/**
 * Created by sumit on 10/2/15.
 */
$(document).ready(function () {

    stickyNavBar()

    $('#Dob').datepicker();

    $('.signupLogin').on('click', function () {
        $('#login').toggle();
        $('#register').toggle();

    });


    $('.option-box').on('click', '.check-btn', function () {
        var ischecked = this.getAttribute('ischecked');
        //alert(isChecked);
        if (ischecked === 'false') {
            $(this).append('<i class="fa fa-check"></i>')
            $(this).attr('ischecked', 'true')
        }
        else {
            $(this).empty();
            $(this).attr('ischecked', 'false')
        }

    })


//    function to check if checkbox is checked
    $('.correctAns').change(function () {
        if (this.checked) {
            var correspondingTestBoxValue = $(this).parent().next().children().children().val()
            $(this).val(correspondingTestBoxValue)
        }
    })

    // Data table search-------------------------------------------------------------------
    //$(document).mouseup(function (e) {
    //    var container = $('#qname');
    //
    //    if (!container.is(e.target) // if the target of the click isn't the container...
    //        && container.has(e.target).length === 0) // ... nor a descendant of the container
    //    {
    //        container.child().remove();
    //        container.html('<a href="/mvc/question#" class="search"> Question</a>');
    //    }else {
    //        container.html('');
    //        container.append('<input id="searchByName" type="text" name="nameQuery" placeholder="search By question"/>');
    //    }
    //});


    /*  $('thead').on('click', '#qname', function () {
     $(this).html('');
     $(this).append('<input id="searchByName" type="text" name="nameQuery" placeholder="search By question"/>');
     })*/




    $('.qLink').on('click', function (e) {
        e.preventDefault();
        var id = $(this).parent().parent().next().slideToggle();
      var ids=  id.split('q');
        getOptionForQuestion(ids[1]);

    });

    $('.taction').on('click',function() {

        var tr=$('.createTest').first().clone();
       var index= $('.createTest').length+1
        tr.children('.index').text(index);

        $('.createTest').parent().append(tr);
    })

});

// sticky navbar

function stickyNavBar() {
    $(window).scroll(function () {
        if ($(document).scrollTop() >= 70) {
            shrinkNavBar()
        } else {
            expandNavBar()
        }
    })

    function shrinkNavBar() {
        $('.topbar').hide();
        $('.nav-wrapper').addClass('nav-wrapper-transition')
        var $appHeader = $('.app-heading').removeClass('app-heading')
        $appHeader.addClass('shrink');
        $('.nav-wrapper').append($appHeader);

    }

    function expandNavBar() {
        $('.topbar').show();
        $('.nav-wrapper').removeClass('nav-wrapper-transition')
        var $appHeader = $('.shrink').removeClass('shrink');
        $appHeader.addClass('app-heading');
        $('.topbar .container').append($appHeader);


    }


    /*
     * Tab panel
     * */

    function tabInit() {

        $('.tabHeader').click(function () {
            $('.tabHeader').removeClass("active")
            this.addClass('active')

        })
    }
}

/*
 * validation
 * */
(function () {
    var error = false;
    $('input').keyup(function () {

        switch (this.getAttribute('type')) {


            case 'text':
            {
                switch (this.getAttribute('id')) {
                    case 'name':
                    {
                        if ($(this).val().length <= 1) {
                            showMessage(true, $(this))
                            error = true;
                        }
                        else {
                            showMessage(false, $(this));
                            error = false;
                        }
                    }
                    case'username':
                    {
                        var value = $(this).val()
                        var pattern = $('#username').attr('data-pattern');
                        if (!value.match(pattern)) {
                            showMessage(true, $(this));
                            error = true;
                        }
                        else {
                            showMessage(false, $(this))
                            error = false;
                        }
                    }

                }

            }

            case 'password':
                if ($(this).val().length < 8) {
                    showMessage(true, $(this))
                    error = true;
                } else
                    showMessage(false, $(this))
                error = false;
        }

    })
})();

var showMessage = function (errorFlag, $element) {
    if (errorFlag) {
        $element.addClass('error')
        $element.next('.errorMsg').show();
        $('.button').attr('disabled', true);

    }
    else {
        $element.removeClass('error')
        $element.next('.errorMsg').hide();
        $('.button').attr('disabled', false);


    }

}
$(function () {

})
