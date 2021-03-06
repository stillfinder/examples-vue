/**
 * First we will load all of this project's JavaScript dependencies which
 * includes Vue and other libraries. It is a great starting point when
 * building robust, powerful web applications using Vue and Laravel.
 */

require('./bootstrap');

window.Vue = require('vue');

/**
 * The following block of code may be used to automatically register your
 * Vue components. It will recursively scan this directory for the Vue
 * components and automatically register them with their "basename".
 *
 * Eg. ./components/ExampleComponent.vue -> <example-component></example-component>
 */

// const files = require.context('./', true, /\.vue$/i);
// files.keys().map(key => Vue.component(key.split('/').pop().split('.')[0], files(key).default));

Vue.component('example-component', require('./components/ExampleComponent.vue').default);

Vue.component('task', require('./components/Task.vue').default);
Vue.component('task-list', require('./components/TaskList.vue').default);
Vue.component('message', require('./components/Message.vue').default);
Vue.component('modal', require('./components/Modal.vue').default);

import {Tabs, Tab} from 'vue-tabs-component';
Vue.component('tabs', Tabs);
Vue.component('tab', Tab);

Vue.component('demo-inline', require('./components/DemoInline.vue').default);
Vue.component('skills', require('./components/Skills.vue').default);

import {Form} from './core/Form.js';

/**
 * Next, we will create a fresh Vue application instance and attach it to
 * the page. Then, you may begin adding components to this application
 * or customize the JavaScript scaffolding to fit your unique needs.
 */

const app = new Vue({
    el: '#app',

    data: {
        message: 'Test binding message',
        names: ['Samantha', 'Andrew', 'Jane'],
        newName: '',
        bindedTitle: "Binded title storedi in Vue ",
        isRed: false,
        tasks: [
            { description: 'Write a song', completed: true },
            { description: 'Buy a car', completed: false },
            { description: 'Clean up', completed: false },
        ],
        showCustomModal: false,

        ajaxform: new Form({
            'email': '',
            'name': '',
            'body': '',
        }),

        showSubmittedAjaxFormkModal: false,
        submittingAjaxForm: false,
    },

    methods: {
        addName() {
            if(this.newName.trim() ==='') {
                return;
            }

            this.names.push(this.newName);
            this.newName='';
        },

        toggleRed() {
            this.isRed = ! this.isRed;
        },

        onSubmitAjaxForm() {
            this.submittingAjaxForm = true;

            this.ajaxform.post('/ajax-form')
                .then(response => {
                    this.submittingAjaxForm =false;
                    this.showSubmittedAjaxFormkModal = true;
                })
                .catch(error => {
                    this.submittingAjaxForm =false;
                });
        },
    },

    computed: {
        reversedMessage() {
            return this.message.split('').reverse().join('');
        },

        incompletedTasks() {
            return this.tasks.filter(task => ! task.completed);
        },
    },

    mounted() {

    }
});
