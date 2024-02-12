/**
 * Created by Ikhsan Pratama on 12/28/2023.
 */
$('.menu').on('click',function(){
    var menu    =   $(this).attr("id");
    $(this).addClass('active');
    $('.menu').not(this).removeClass('active');
    file        =   "pages/"+menu+".php";
    $('#konten').load(file);
})