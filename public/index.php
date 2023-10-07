<!DOCTYPE html>
<html>
<head>
<title>Test China</title>
<meta charset="utf-8" />
<script src="https://unpkg.com/vue@3"></script>
<script src="https://unpkg.com/vue-router@4"></script>
</head>
<style>
body {
    background: #262869;
}
</style>
<div id="app">
    <router-link to="/page2">{{message}}</router-link>
</div>

<?php 

include('page1.php');
include('page2.php');
include('page3.php');
include('page4.php');
?>


const routes = [
  { path: '/', component: page1 },
  { path: '/page2', component: page2 },
  { path: '/page3', component: page3 },
  { path: '/page4', component: page4 },
]


const router = VueRouter.createRouter({
 
  history: VueRouter.createWebHashHistory(),
  routes, 
})

const app = Vue.createApp({el: '#app', router: router,data: {
            message: 'Hello Vue!'
        }})

app.use(router)

app.mount('#app')
</script>

</body>
</html>