$(document).ready(function() {
    if(typeof include_indexJs !== 'undefined' && include_indexJs === true){
        indexJs();
    }
    if(typeof include_chamCongJs !== 'undefined' && include_chamCongJs === true){
        chamCongJs();
    }
});