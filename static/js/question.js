/**
 * Created by sumit on 1/2/16.
 */



//$(function () {
//    $('.question').on('click', function (e) {
//        var id = $(this).attr('id');
//       alert( id.split('q'))
//
//
//        $('#followbtn').fadeOut(300);
//
//        $.ajax({
//            url: '/mvc/quesion/option?id=',
//            type: 'post',
//            data: {'action': 'follow', 'userid': '11239528343'},
//            success: function (data, status) {
//                if (data == "ok") {
//                    $('#followbtncontainer').html('<p><em>Following!</em></p>');
//                    var numfollowers = parseInt($('#followercnt').html()) + 1;
//                    $('#followercnt').html(numfollowers);
//                }
//            },
//            error: function (xhr, desc, err) {
//                console.log(xhr);
//                console.log("Details: " + desc + "\nError:" + err);
//            }
//        }); // end ajax call
//    });
//})


function getOptionForQuestion(id) {


}