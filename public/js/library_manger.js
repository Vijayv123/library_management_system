$(document).ready(function(){
    $('#menu_toggle').click(()=>{
        console.log('ghi')
        $('#body').toggleClass('expand');
    })
})

function scroll_to_top(){
    $(window).scrollTop(0);
}