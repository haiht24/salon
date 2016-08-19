var chamCongJs = function () {
    $('#modalAdd').modal('show');

    new Vue({
        el: '#modalAdd',
        data: {
            title: 'Thêm mới',
            response: []
        },
        ready: function () {

            this.$http.get('api/cham-cong/get-data').then((resp) => {
                this.$set('response',resp.json());
            }, (resp) => {
                console.log(resp);
            });

        },
        methods: {

        }
    })
}