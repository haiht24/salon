var chamCongJs = function () {
    $('#modalAdd').modal('show');
    Vue.http.headers.common['X-CSRF-TOKEN'] = $('meta[id="_token"]').attr('value');
    new Vue({
        el: '#modalAdd',
        data: {
            title: 'Thêm mới',
            response: [],
            donhang:{}
        },
        ready: function () {
            // init data
            this.$http.get('api/cham-cong/get-data').then((resp) => {
                this.$set('response',resp.json());
            }, (resp) => {
                console.log(resp);
            });

        },
        methods: {
            confirm: function (donhang) {
                // console.log(donhang);
                // console.log(this.donhang);
                this.$http.post('api/cham-cong/add', donhang).then((resp) => {

                }, (resp) => {
                    console.log(resp);
                });
            }
        }
    })
}