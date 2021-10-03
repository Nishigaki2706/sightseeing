'use strick';
//メニュー開閉
$(function(){
$('.sideber').hide();
$('header nav').on('click', function(){
    $('.sideber').slideToggle();
})
});



//メニューバー　サンプルに飛ぶ
// $(function(){
//     document.getElementById('sample-position').addEventListener('click',()=>{
//         document.getElementById('sample-position').classList('.move')
//     });
// });
$(function(){
    const top = document.getElementById('top');
    top.addEventListener('click',() => {
        $('.sideber').hide();
    })
})

//トップに戻る、サンプルを押したらメニューバーが閉じる
$(function(){
    $('top').on('click',function() {
        $('.sideber').hide();
    });
});

