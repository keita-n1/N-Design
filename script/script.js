'use strict';

//ハンバーガーメニュー
$(function() {
    $('.bl_hamburger').on('click', function() {
        $(this).toggleClass('active');
        return false;
    });
});
