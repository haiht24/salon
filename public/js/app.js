$(document).ready(function() {
    if(typeof include_indexJs !== 'undefined' && include_indexJs === true){
        indexJs();
    }
    if(typeof include_chamCongJs !== 'undefined' && include_chamCongJs === true){
        chamCongJs();
    }
    if(typeof include_cuaHangJs !== 'undefined' && include_cuaHangJs === true){
        cuaHangJs();
    }
    if(typeof include_nhanVienJs !== 'undefined' && include_nhanVienJs === true){
        nhanVienJs();
    }
});