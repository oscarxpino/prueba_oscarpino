    import './bootstrap';
    import '../css/app.css';

    import { createApp, h } from 'vue';
    import { createInertiaApp } from '@inertiajs/vue3';
    import { resolvePageComponent } from 'laravel-vite-plugin/inertia-helpers';
    import { ZiggyVue } from '../../vendor/tightenco/ziggy';


    import ProductList from './Components/ProductList.vue'; 
    import ProductForm from './Components/ProductForm.vue'; 

    const appName = import.meta.env.VITE_APP_NAME || 'Laravel';


    createInertiaApp({
        title: (title) => `${title} - ${appName}`,
        resolve: (name) => resolvePageComponent(`./Pages/${name}.vue`, import.meta.glob('./Pages/**/*.vue')),
        setup({ el, App, props, plugin }) {
            const app = createApp({
                render: () => h(App, props)
            });

            app.component('product-list', ProductList);
            app.component('product-form', ProductForm);

            app.use(plugin)
            .use(ZiggyVue)
            .mount(el);
        },
        progress: {
            color: '#4B5563',
        },
    });
