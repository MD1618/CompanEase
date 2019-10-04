/**
 * First we will load all of this project's JavaScript dependencies which
 * includes Vue and other libraries. It is a great starting point when
 * building robust, powerful web applications using Vue and Laravel.
 */

require('./bootstrap');
require('./TweenMax.min.js');

window.Vue = require('vue');

/**
 * The following block of code may be used to automatically register your
 * Vue components. It will recursively scan this directory for the Vue
 * components and automatically register them with their "basename".
 *
 * Eg. ./components/ExampleComponent.vue -> <example-component></example-component>
 */

// const files = require.context('./', true, /\.vue$/i)
// files.keys().map(key => Vue.component(key.split('/').pop().split('.')[0], files(key).default))

Vue.component('qualification-editor', require('./components/QualificationEditor.vue').default);

/**
 * Next, we will create a fresh Vue application instance and attach it to
 * the page. Then, you may begin adding components to this application
 * or customize the JavaScript scaffolding to fit your unique needs.
 */

const app = new Vue({
    el: '#app',
});


/**
 * 
 * qualifications modal 
 * 
 */

window.showQualificationsModal = function() {

    var qualificationModal = document.getElementById('qualificationModal');
    if (qualificationModal.classList.contains('hideModal')) {
        qualificationModal.classList.remove('hideModal');
    } else {
        qualificationModal.classList.add('hideModal');
    }
}

window.deleteQualification = function() {
    var deleteModal = document.getElementById('deleteModal');
    if (deleteModal.classList.contains('hideModal')) {
        deleteModal.classList.remove('hideModal');
    } else {
        deleteModal.classList.add('hideModal');
    }
}



/**
 * custom animations
 */
window.onload = function() {

    var welcome = document.getElementById("welcome");
    var welcomeTitle = document.getElementById("welcomeTitle");
    var timeline = new TimelineMax();
    if (welcome && welcomeTitle) {

        timeline.to(welcome, 2, { opacity: 1, y: -150 }, 0);
        timeline.to(welcomeTitle, 1.5, { opacity: 1, y: -150 }, 0.5);
    }

    var listItem = document.getElementsByClassName('listItem');
    if (listItem) {
        TweenMax.staggerTo(listItem, 0.7, { opacity: 1, x: '0px' }, 0.2);
    }

}