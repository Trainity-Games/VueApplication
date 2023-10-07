
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