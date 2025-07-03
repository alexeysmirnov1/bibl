import axios from 'axios';

export const getData = (api_key, options) => {
    return new Promise(function (resolve, reject) {
        axios.post(`https://suggestions.dadata.ru/suggestions/api/4_1/rs/suggest/address`,
            options,
            {
                headers: {
                    'Content-Type': 'application/json',
                    'Authorization': 'Token ' + api_key
                }
            })
            .then(response => {
                switch (response.status) {
                    case 200 : {
                        resolve(response.data);
                        break;
                    }
                    default : {
                        reject(new Error('Во время выполнения запроса произошла ошибка'));
                        break;
                    }
                }
            })
            .catch(error => {
                if (!error.response) {
                    reject(new Error('Ошибка сети. Проверьте ваше подключение к интернету.'));
                } else {
                    reject(new Error(error.response.data.message || error.message));
                }
            });
    })
};
