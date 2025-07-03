<?php

namespace Flagstudio\DaDataAddressYandexMap;

use Laravel\Nova\Fields\Field;

class DaDataAddressYandexMap extends Field
{
    /**
     * The field's component.
     *
     * @var string
     */
    public $component = 'da-data-address-yandex-map';

    public function jsonSerialize(): array
    {
        return array_merge([
            'da_data_api_key' => config('services.da_data.token'),
            'map_api_key' => config('yandex.apikey_map'),
        ],parent::jsonSerialize());
    }
}
