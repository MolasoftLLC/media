import Vue from 'vue'
import VueRouter from 'vue-router'

// ページコンポーネントをインポートする
import Login from './pages/Login.vue'
import lancer from './pages/lancer.vue'
import Top from './pages/top.vue'
import talk from './pages/talk.vue'
import more from './pages/more.vue'
import search from './pages/search.vue'
import store from './store' //
import SystemError from './pages/errors/System.vue'

// VueRouterプラグインを使用する
// これによって<RouterView />コンポーネントなどを使うことができる
Vue.use(VueRouter)

// パスとコンポーネントのマッピング
const routes = [
  {
    path: '/',
    components:{
      default: Top,
      talkComponents:talk,}
  },
  {
    path: '/login',
    components:{
      default: Login,
      talkComponents:Top,
    }
},
{
    path: '/lancer/:id',
    components:{
      default: lancer,
      talkComponents: more,
    }
},
{
    path: '/tag/:tag',
    components:{
      default: search,
      talkComponents:more,
    }
},

{
    path: '/500',
    component: SystemError
}
]

// VueRouterインスタンスを作成する
const router = new VueRouter({
  mode: 'history', // ★ 追加
  routes,
  scrollBehavior (to, from, savedPosition) { //スクロール時の挙動
    if (savedPosition) {
      return savedPosition
    } else {
      return { x: 0, y: 0 }
    }
  }
  
})
router.afterEach((to, from) => {
  if (to.meta && to.meta.title) {
    document.title = to.meta.title
  }
})

// VueRouterインスタンスをエクスポートする
// app.jsでインポートするため
export default router

