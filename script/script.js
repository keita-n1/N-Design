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

//スクロールフェードイン
$(function(){
    $(window).scroll(function (){
        $('.js_fadein').each(function(){
            var targetElement = $(this).offset().top;
            var scroll = $(window).scrollTop();
            var windowHeight = $(window).height();
            if (scroll > targetElement - windowHeight + 100){
                $(this).css('opacity','1');
                $(this).css('transform','translateY(0)');
            }
        });
    });
});

//lottie
bodymovin.loadAnimation({
    container: document.querySelector('.js_lottie'),
    renderer: 'svg', //'svg' / 'canvas' / 'html'の中から選ぶことができます。
    loop: true, //ループ再生するのかを選びます（true/false）
    autoplay: true, //自動再生するかどうかを選択します（true/false）
    path: 'data.json' //jsonまでのパスを記述します。出力したjsonの名前は適宜変える必要があります。
});