/**
 * Created by During on 2017/3/5.
 */
// 注册
// 定义
var MyComponent = Vue.extend({
    template: '<div>A custom component!</div>'
})

// 注册
Vue.component('my-component', MyComponent)

// 创建根实例
new Vue({
    el: '#example'
})