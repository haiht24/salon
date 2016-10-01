var chamCongJs = function () {
    // $('#modalAdd').modal('show');
    // Vue.http.headers.common['X-CSRF-TOKEN'] = $('meta[id="_token"]').attr('value');
    // new Vue({
    //     el: '#modalAdd',
    //     data: {
    //         title: 'Thêm mới',
    //         response: [],
    //         donhang:{}
    //     },
    //     ready: function () {
    //         // init data
    //         this.$http.get('api/doanh-thu/get-data').then((resp) => {
    //             this.$set('response',resp.json());
    //         }, (resp) => {
    //             console.log(resp);
    //         });
    //
    //     },
    //     methods: {
    //         confirm: function (donhang) {
    //             // console.log(donhang);
    //             // console.log(this.donhang);
    //             this.$http.post('api/doanh-thu/add', donhang).then((resp) => {
    //                 if(resp.body === 'true')
    //                     location.reload();
    //             }, (resp) => {
    //                 console.log(resp);
    //             });
    //         }
    //     }
    // })
}

var cuaHangJs = function () {
    var $form = $('#frmAddCuaHang');
    $form.on('submit', function (e) {
        e.preventDefault();
        $.ajax({
            type: 'post',
            url: $form.attr('action'),
            data: $form.serialize()
        }).done(function (data) {
            console.log(data);
            if(data === 'true'){
                location.reload();
            }
        });
    });
};

var nhanVienJs = function () {
    var $form = $('#frmAddNhanVien');
    $form.on('submit', function (e) {
        e.preventDefault();
        $.ajax({
            type: 'post',
            url: $form.attr('action'),
            data: $form.serialize()
        }).done(function (data) {
            console.log(data);
            if(data === 'true'){
                location.reload();
            }
        });
    });
};

var dichvuJs = function () {
    var $form = $('#frmAddDichVu');
    $form.on('submit', function (e) {
        e.preventDefault();
        $.ajax({
            type: 'post',
            url: $form.attr('action'),
            data: $form.serialize()
        }).done(function (data) {
            console.log(data);
            if(data === 'true'){
                location.reload();
            }
        });
    });
};

var sanphamJs = function () {
    var $form = $('#frmAddSanPham');
    $form.on('submit', function (e) {
        e.preventDefault();
        $.ajax({
            type: 'post',
            url: $form.attr('action'),
            data: $form.serialize()
        }).done(function (data) {
            console.log(data);
            if(data === 'true'){
                location.reload();
            }
        });
    });
};