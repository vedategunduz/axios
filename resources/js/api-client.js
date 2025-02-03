import axios from 'axios'

const BASE_URL = window.location.origin;
const CSRF_TOKEN = document.head.querySelector('meta[name="csrf-token"]').content;

axios.defaults.baseURL = BASE_URL;
axios.defaults.headers.common['Accept'] = 'application/json';
axios.defaults.headers.common['X-CSRF-TOKEN'] = CSRF_TOKEN;

async function fetchData(URL, DATA = null, METHOD = 'GET') {
    try {
        let config = {
            method: METHOD,
            url: URL,
        };

        if (METHOD === 'GET' || METHOD === 'DELETE') {
            if (DATA)
                config.params = DATA;
        } else {
            if (DATA instanceof FormData)
                config.data = DATA;
        }

        const response = await axios(config);

        return response.data;
    } catch (error) {
        return {
            success: false,
            message: error.response.data.message
        };
    }
}

export default fetchData;
