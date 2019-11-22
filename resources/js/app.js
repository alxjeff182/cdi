/**
 * First we will load all of this project's JavaScript dependencies which
 * includes Vue and other libraries. It is a great starting point when
 * building robust, powerful web applications using Vue and Laravel.
 */

require("./bootstrap");

import Vue from "vue";
import VueRouter from "vue-router";
import CircleMenu from "vue-circle-menu";

window.Vue = require("vue");

Vue.use(VueRouter);
const Location = () => import("./components/LocationSelect.vue");
const Job = () => import("./components/UploadTask.vue");
const Report = () => import("./components/ReportTask.vue");
const Message = () => import("./components/UserProfile.vue");
const UserMenu = () => import("./components/MainContent.vue");
const router = new VueRouter({
    routes: [
        {
            path: "/home/:id",
            component: UserMenu,
            children: [
                // UserHome will be rendered inside User's <router-view>
                // when /user/:id is matched,

                { path: "/location", component: Location },

                // UserProfile will be rendered inside User's <router-view>
                // when /user/:id/profile is matched
                { path: "/job", component: Job },

                // UserPosts will be rendered inside User's <router-view>
                // when /user/:id/posts is matched
                { path: "/message", component: Message },
                { path: "/report", component: Report }
            ]
        }
    ]
});

/**
 * The following block of code may be used to automatically register your
 * Vue components. It will recursively scan this directory for the Vue
 * components and automatically register them with their "basename".
 *
 * Eg. ./components/ExampleComponent.vue -> <example-component></example-component>
 */

// const files = require.context('./', true, /\.vue$/i);
// files.keys().map(key => Vue.component(key.split('/').pop().split('.')[0], files(key).default));

/**
 * Next, we will create a fresh Vue application instance and attach it to
 * the page. Then, you may begin adding components to this application
 * or customize the JavaScript scaffolding to fit your unique needs.
 */

Vue.component(
    "splash-screen",
    require("./components/SplashScreen.vue").default
);

Vue.component("main-content", require("./components/MainContent.vue").default);
Vue.component("user-profile", require("./components/UserProfile.vue").default);
Vue.component(
    "broadcast-message",
    require("./components/BroadcastMessage.vue").default
);
Vue.component(
    "footer-setting",
    require("./components/FooterSetting.vue").default
);
Vue.component(
    "location-select",
    require("./components/LocationSelect.vue").default
);
Vue.component("report-task", require("./components/ReportTask.vue").default);
Vue.component("upload-task", require("./components/UploadTask.vue").default);

Vue.component(
    "admin-content",
    require("./components/AdminContent.vue").default
);
Vue.component("admin-edit", require("./components/AdminEdit.vue").default);
Vue.component(
    "admin-edit-invoice",
    require("./components/AdminEditInvoice.vue").default
);
Vue.component(
    "admin-edit-message",
    require("./components/AdminEditMessage.vue").default
);
Vue.component("user-home", require("./components/UserHome.vue").default);
Vue.component("circle-menu", CircleMenu);
const app = new Vue({
    el: "#app",
    router
});
