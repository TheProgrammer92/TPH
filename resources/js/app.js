import Vue from "vue";

require('./bootstrap');

import CardCoach from "./components/vue-card-coach.vue"

Vue.component('vue-card-coach',CardCoach);


const app = new Vue({
    el: '#app',
});
