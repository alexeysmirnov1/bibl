<template>
    <DefaultField
        :field="field"
        :errors="errors"
        :show-help-text="showHelpText"
        :full-width-content="fullWidthContent"
    >
        <template #field>
            <multiselect
                class="mb-3 w-full datata-address__multiselect"
                :options="addresses"
                placeholder="Введите адрес"
                label="value"
                :allow-empty="false"
                :show-labels="true"
                :options-limit="20"
                :internal-search="false"
                :clear-on-select="false"
                @search-change="debouncedGetAddresses($event)"
                :modelValue="address"
                @select="addressChanged"
                v-model="address"
            >
                <template #noResult>Список пуст</template>
                <template #noOptions>Начните вводить адрес</template>
                <template #clear>
                    <div
                        class="multiselect__clear datata-address__clear"
                        v-show="address"
                        @mousedown.prevent.stop="clearAll"
                    />
                </template>
            </multiselect>
            <div class="datata-address__map-wrapper" v-show="mapRendered">
                <div id="datata-address-map" class="datata-address__map"/>
            </div>
        </template>
    </DefaultField>

</template>

<script>
import Multiselect from 'vue-multiselect';
import {getData} from '../dadata';
import debounce from '../debounce';
import {FormField, HandlesValidationErrors} from 'laravel-nova'

export default {
    mixins: [
        FormField,
        HandlesValidationErrors,
    ],
    components: {
        Multiselect,
    },
    props: [
        'resourceName',
        'resourceId',
        'field',
    ],
    data() {
        return {
            addresses: [],
            address: this.field.value,
            mapRendered: false,
            bufferAddresses: [],
        }
    },
    computed: {
        debouncedGetAddresses() {
            let DELAY = 300;
            return debounce(this.getAddresses, DELAY);
        },
        addressCoords() {
            return (this.address && this.address.data && this.address.data.geo_lat)
                ? [this.address.data.geo_lat, this.address.data.geo_lon]
                : [];
        },
    },
    methods: {
        addressChanged(address) {
            if (typeof (address) !== undefined && address.value !== null) {
                getData(this.field.da_data_api_key, {
                    query: address.value,
                    restrict_value: true,
                    count: 1
                })
                    .then(
                        success => {
                            this.bufferAddresses = success.suggestions;

                            this.address = this.bufferAddresses[0];
                            if (!this.mapRendered) {
                                this.mapInit();
                                this.mapRendered = true;
                            } else {
                                const myGeoObject = new ymaps.GeoObject({
                                    geometry: {
                                        type: 'Point',
                                        coordinates: this.addressCoords,
                                    },
                                }, {
                                    preset: 'islands#greenDotIconWithCaption',
                                    draggable: true,
                                });

                                this.map.geoObjects.removeAll();
                                this.map.geoObjects.add(myGeoObject);

                                myGeoObject.events.add('dragend', this.geoObjectsDragendHandler);
                            }
                        },
                        error => alert(`Произошла ошибка при загрузке адресов: ${error.message}`)
                    );
            }
        },
        geoObjectsDragendHandler(evt) {
            const coords = evt.get('target').geometry.getCoordinates();
            this.address.data.geo_lat = coords[0].toString();
            this.address.data.geo_lon = coords[1].toString();
        },
        getAddresses(searchQuery) {
            getData(this.field.da_data_api_key, {
                query: searchQuery,
                restrict_value: true,
            })
                .then(
                    success => this.addresses = success.suggestions,
                    error => alert(`Произошла ошибка при загрузке адресов: ${error.message}`)
                );
        },
        clearAll() {
            this.address = null;
        },
        mapInit() {
            const yandexMapScript = document.createElement('script');
            const settings = {
                apiKey: this.field.map_api_key,
                lang: 'ru_RU',
                version: '2.1',
                coordorder: 'latlong',
            };
            const settingsPart = `lang=${settings.lang}${settings.apiKey && `&apikey=${settings.apiKey}`}&mode=release&coordorder=${settings.coordorder}`;
            const link = `https://api-maps.yandex.ru/${settings.version}/?${settingsPart}`;
            yandexMapScript.setAttribute('src', link);
            yandexMapScript.setAttribute('async', '');
            yandexMapScript.setAttribute('defer', '');
            document.head.appendChild(yandexMapScript);

            yandexMapScript.onload = () => {
                ymaps.ready(() => {
                    this.map = new ymaps.Map('datata-address-map', {
                        center: this.addressCoords,
                        zoom: 12,
                        controls: ['zoomControl'],
                    });

                    const myGeoObject = new ymaps.GeoObject({
                        geometry: {
                            type: 'Point',
                            coordinates: this.addressCoords,
                        },
                    }, {
                        preset: 'islands#greenDotIconWithCaption',
                        draggable: true,
                    });

                    this.map.geoObjects.add(myGeoObject);

                    myGeoObject.events.add('dragend', this.geoObjectsDragendHandler);
                });
            };
        },
    },
    mounted() {
        if (this.field.value) {
            this.mapRendered = true;
            this.mapInit();
        }

        this.field.fill = formData => {
            formData.append(this.field.attribute, JSON.stringify(this.address))
        }
    }
}
</script>

<style src="vue-multiselect/dist/vue-multiselect.min.css"></style>
