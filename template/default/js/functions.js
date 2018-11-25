$(document).ready(function(){
    $('#login, #pass').focus(function(){
       $(this).data('placeholder',$(this).attr('placeholder'));
       $(this).attr('placeholder','');
    });
    $('#login, #pass').blur(function(){
       $(this).attr('placeholder',$(this).data('placeholder'));
    });
});    