import Vue from 'vue'
import VueRouter from 'vue-router'

// ページコンポーネントをインポートする
import PhotoList from './pages/PhotoList.vue'
import Login from './pages/Login.vue'
import interview1 from './pages/interview1.vue'
import lancer from './pages/lancer.vue'
import interview2 from './pages/interview2.vue'
import interview3 from './pages/interview3.vue'
import Top from './pages/top.vue'
import talk from './pages/talk.vue'
import more from './pages/more.vue'
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
    path: '/lancers',
    components:{
      default: interview1,
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
    path: '/interview3',
    components:{
      default: interview3,
      talkComponents:Top,
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

