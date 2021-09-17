'use strick';
//メニュー開閉
$('.sideber').hide();
$('header nav').on('click', function(){
    console.log('Hello');
    $('.sideber').slideToggle();
})

//console.log('Hello');