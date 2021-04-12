'use strict';

//ハンバーガーメニュー
$(function() {
    $('.bl_hamburger').on('click', function() {
        $(this).toggleClass('active');
        //ドロワー
        $('.bl_headerNav_wrap').toggleClass('js_drawer');
        return false;
    });
});
