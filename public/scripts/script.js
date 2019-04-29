$(document).ready(function () {
    $('#ExecutaAjax').click(function () {
       $.ajax({
           url: "https://www.youtube.com/",
           success:function (data) {
               $('#container-corpo').html(data);
           }
       });
    });
});