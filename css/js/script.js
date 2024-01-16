import Vue from 'vue;'
import axios from'axios';



    const axiosInstance = axios.create({
        baseURL: 'http://localhost/api/api.php',
    });

    const { createApp } = Vue

createApp({
  data() {
    return {
      message: 'Hello Vue!'
    }
  }
}).mount('#app')
