import Vue from 'vue';
import axios from 'axios';

const app = new Vue ({
    el: '#app',
    data: {
        appTitle: 'Boolean DISCHI',
        dischi: [],

    },
    created() {
        // get users from server 
    axios.get('http://localhost/dischi-php/scripts/json-script.php')
    .then(response => {
        // handle success
        // console.log(response.data);
        this.dischi = response.data;
    })
    .catch(error => {
        // handle error
        console.log(error);
   
    });  
  }
});