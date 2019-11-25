/**
 * First we will load all of this project's JavaScript dependencies which
 * includes Vue and other libraries. It is a great starting point when
 * building robust, powerful web applications using Vue and Laravel.
 */

require("./bootstrap");

import Vue from "vue";
import VueRouter from "vue-router";
import Gate from "./Gate";

import { RadialMenu, RadialMenuItem } from "vue-radial-menu";
window.Vue = require("vue");

Vue.prototype.$gate = new Gate(window.user);
Vue.use(VueRouter);
const Location = () => import("./components/LocationSelect.vue");
const Job = () => import("./components/UploadTask.vue");
const Report = () => import("./components/ReportTask.vue");
const Message = () => import("./components/AdminEditMessage.vue");
const MainContent = () => import("./components/MainContent.vue");
const RoleManagement = () => import("./components/RoleManagement.vue");

const AdminUser = () => import("./components/AdminEditUser.vue");
const AdminInvoice = () => import("./components/AdminEditInvoice.vue");
const AdminTask = () => import("./components/AdminEditTask.vue");
const AdminLocation = () => import("./components/AdminEditLocation.vue");
const AdminMessage = () => import("./components/AdminEditMessage.vue");
const AdminAssignment = () => import("./components/AdminEditAssignment.vue");

const CustomerLocation = () => import("./components/CustomerLocation.vue");
const CustomerTask = () => import("./components/CustomerTask.vue");
const CustomerReport = () => import("./components/CustomerReport.vue");
const CustomerInvoice = () => import("./components/CustomerInvoice.vue");
const CustomerMessage = () => import("./components/CustomerMessage.vue");
let routes = [
    {
        path: "/dashboard/:id",
        component: MainContent,
        children: [
            { path: "/dashboard", component: RoleManagement },
            { path: "/dashboard/location", component: Location },
            { path: "/dashboard/job", component: Job },
            { path: "/dashboard/message", component: Message },
            { path: "/dashboard/report", component: Report },

            { path: "/dashboard/manage-user", component: AdminUser },
            { path: "/dashboard/manage-location", component: AdminLocation },
            { path: "/dashboard/manage-invoice", component: AdminInvoice },
            { path: "/dashboard/manage-message", component: AdminMessage },
            { path: "/dashboard/manage-task", component: AdminTask },
            {
                path: "/dashboard/manage-assignment",
                component: AdminAssignment
            },

            {
                path: "/dashboard/customer-location",
                component: CustomerLocation
            },
            { path: "/dashboard/customer-task", component: CustomerTask },
            { path: "/dashboard/customer-report", component: CustomerReport },
            { path: "/dashboard/customer-invoice", component: CustomerInvoice },
            { path: "/dashboard/customer-message", component: CustomerMessage }
        ]
    }
];

const router = new VueRouter({
    mode: "history",
    routes
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
    "admin-edit-invoice",
    require("./components/AdminEditInvoice.vue").default
);
Vue.component(
    "admin-edit-message",
    require("./components/AdminEditMessage.vue").default
);
Vue.component(
    "admin-content",
    require("./components/AdminContent.vue").default
);
Vue.component(
    "cleaner-content",
    require("./components/CleanerContent.vue").default
);
Vue.component(
    "customer-content",
    require("./components/CustomerContent.vue").default
);
Vue.component("RadialMenu", RadialMenu);
Vue.component("RadialMenuItem", RadialMenuItem);
const app = new Vue({
    el: "#app",
    router
});
