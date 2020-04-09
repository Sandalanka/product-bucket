import Vue from 'vue'
import VueRouter from 'vue-router'


Vue.use(VueRouter);
import addproduct from './components/addproduct.vue'
import about from './components/about.vue'
import contact from './components/contact.vue'
import productbasket from './components/productbasket.vue'
import home from './components/home.vue'
const  router =new VueRouter({
    mode:'history',
    routes:[
        {path:"/addproduct",component:addproduct},
        {path:"/about",component:about},
        {path:"/contact",component:contact},
        {path:"/productbasket",component:productbasket},
        {path:"",component:home},
    ]

});

export default router