/**
 * Created by HaiHT on 9/30/16.
 */
$(document).ready(function() {
    if(typeof runHome !== 'undefined' && runHome === true){
        home();
    }
});

var home = function () {
    var $form = $('#modalAdd');
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
