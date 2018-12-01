import Vue from 'vue';
import VueRouter from 'vue-router';
import App from './App.vue';
import nav from './globals/nav.vue';
import Footer from './globals/footer.vue';
import PostExcerpt from './posts/post-excerpt.vue';
import { routes } from './routes';
import mixin from './mixin';

Vue.use( VueRouter );
Vue.mixin( mixin );

const router        =   new VueRouter({
    routes:             routes,
    mode:               'history',
    base:               '/spa/'
});

Vue.component( 'app-main-nav', nav );
Vue.component( 'app-footer', Footer );
Vue.component( 'app-post-excerpt', PostExcerpt );

new Vue({
    el: '#app',
    router: router,
    render: h => h(App)
});
