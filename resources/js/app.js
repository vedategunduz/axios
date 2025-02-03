import fetchData from './api-client';
import * as alert from './alert-service';

const ApiService = {
    fetchData,
    alert
}

window.ApiService = ApiService;
