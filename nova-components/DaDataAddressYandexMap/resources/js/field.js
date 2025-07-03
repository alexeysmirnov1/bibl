import IndexField from './components/IndexField'
import DetailField from './components/DetailField'
import FormField from './components/FormField'

Nova.booting((app, store) => {
  app.component('index-da-data-address-yandex-map', IndexField)
  app.component('detail-da-data-address-yandex-map', DetailField)
  app.component('form-da-data-address-yandex-map', FormField)
})
