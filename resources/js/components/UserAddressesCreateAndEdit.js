// 注册一个名为 user-addresses-create-and-edit 的组件
Vue.component('user-addresses-create-and-edit', {
    // 组件的数据
    data() {
        return {
            province: '', // 省
            city: '', // 市
            district: '', // 区
        }
    },

    methods: {
        // 把参数 val 中的值保存到组件的数据中
        onDistrictChanged(value) {
            if (value.length === 3) {
                this.province = value[0];
                this.city = value[1];
                this.district = value[2];
            }
        }
    }
})
