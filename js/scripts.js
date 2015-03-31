$(window).load(function () {

    $('.showhide').click(function () {
        var t = $(this).text();
        $(this).text($(this).attr('data-text')).attr('data-text', t).parents('.presentation').toggleClass('active').find('.hidden_map').slideToggle();
        return false;
    });

    $('.flexslider').flexslider({
        animation: "slide",
        start: function (slider) {
            $('#window').css({'display': 'none', 'left': 0});
            $('body').removeClass('loading');
        }
    });

    $('#search-input, #search-input2').keypress(function (e) {
        if (e.keyCode == $.ui.keyCode.ENTER) {
            window.location = '/search/' + $(this).val();
        }
    });
    $('#search-button').click(function () {
        window.location = '/search/' + $(this).prev().val();
    });
    $('#search-button2').click(function () {
        window.location = '/search/' + $(this).parent().find('#search-input2').val();
    });

    $('.trener_image').click(function () {
        var id = $(this).parent().attr('data-id');
        var point = $('.presentation_title').find('h5').text();
        $.post('/trener/' + id, {point: point}, function (data, status, hxr) {
            $('.trener_popup').html(data);
        });
    });
});

function show(state) {
    document.getElementById('modal-wrapper').style.display = state;
    document.getElementById('bg').style.display = state;
    if (state == 'block') {
        initScroll();
    }
}

var openSelect = function (selector) {
    var element = $(selector)[0], worked = false;
    if (document.createEvent) { // all browsers
        var e = document.createEvent("MouseEvents");
        e.initMouseEvent("mousedown", true, true, window, 0, 0, 0, 0, 0, false, false, false, false, 0, null);
        worked = element.dispatchEvent(e);
    } else if (element.fireEvent) { // ie
        worked = element.fireEvent("onmousedown");
    }
    if (!worked) { // unknown browser / error
        alert("It didn't worked in your browser.");
    }
}
function sendbid() {
    $("#send_request_btn").hide();
    $("#send_request_img").show();
    $.ajax({
        url: '/sendrequest/save',
        type: "POST",
        dataType: "html",
        data: $('#request_res').find('form').serialize(),
        success: function (response) {
            document.getElementById('request_res').innerHTML = response;
            $("#send_request_btn").show();
            $("#send_request_img").hide();
        },
        error: function (response) {
            document.getElementById('request_res').innerHTML = "Ошибка при отправке формы";
        }
    });
    return false;
}
function form_sendbid() {
    $.ajax({
        url: '/sendrequest',
        type: "POST",
        dataType: "html",
        success: function (response) {
            document.getElementById('request_res').innerHTML = response;
        },
        error: function (response) {
            document.getElementById('request_res').innerHTML = "Ошибка при отправке формы";
        }
    });
    return false;
}
function sendsbs() {
    $("#send_sbs_btn").hide();
    $("#send_sbs_img").show();
    $('#sbs_call_form').css('opacity', '0.3');
    $.ajax({
        url: '/getStudentTicket/save',
        type: "POST",
        dataType: "html",
        data: $('#sbs_res').find('form').serialize(),
        success: function (response) {
            document.getElementById('sbs_res').innerHTML = response;
            $("#send_sbs_btn").show();
            $("#send_sbs_img").hide();
            $('#sbs_call_form').css('opacity', '1');
        },
        error: function (response) {
            document.getElementById('sbs_res').innerHTML = "Ошибка при отправке формы";
        }
    });
    return false;
}
function form_sendsbs() {
    $.ajax({
        url: '/getStudentTicket',
        type: "POST",
        dataType: "html",
        success: function (response) {
            document.getElementById('sbs_res').innerHTML = response;
        },
        error: function (response) {
            document.getElementById('sbs_res').innerHTML = "Ошибка при отправке формы";
        }
    });
    return false;
}
function sendbackcall() {
    $('#send_backcall_btn').hide();
    $('#send_backcall_img').show();
    $('#back_call_form').css('opacity', '0.3');
    $.ajax({
        url: '/send_backcall_from_point/save',
        type: "POST",
        dataType: "html",
        data: $('#backcall_form').find('form').serialize(),
        success: function (response) {
            document.getElementById('backcall_form').innerHTML = response;
            var url = $('#point_url').attr('href');
            $('#point_input_url').val(url);
            $('#send_backcall_btn').show();
            $('#send_backcall_img').hide();
            $('#back_call_form').css('opacity', '1');
        },
        error: function (response) {
            document.getElementById('backcall_form').innerHTML = "Ошибка при отправке формы";
        }
    });
    return false;
}
function form_sendbackcall() {
    $.ajax({
        url: '/send_backcall_from_point',
        type: "POST",
        dataType: "html",
        success: function (response) {
            document.getElementById('backcall_form').innerHTML = response;
            var url = $('#point_url').attr('href');
            $('#point_input_url').val(url);
        },
        error: function (response) {
            document.getElementById('backcall_form').innerHTML = "Ошибка при отправке формы";
        }
    });
    return false;
}
$(function () { // when DOM is ready
    // open .select element
    $('.select_open_1').click(function () {
        openSelect('#select-1');
    });

    $('.select_open_2').click(function () {
        openSelect('#select-2');
    });

    $('.select_open_3').click(function () {
        openSelect('#select-3');
    });

    $('.send_request').click(function () {
        form_sendbid();
    });

    $('.ticket').click(function () {
        form_sendsbs();
    });

    $('#send_backcall').click(function () {
        form_sendbackcall();
    });

    $('#select-1').change(function () {
        $.post('/get_sports', {category: $(this).val()}, function (data) {
            $('#select-2').html(data);
        });
    });

    $('#self').live('change', function () {
        if ($(this).attr('checked')) {
            $('#send_sbs_btn').hide();
            $('#payment').show();
        }
    });
    $('#courier').live('change', function () {
        if ($(this).attr('checked')) {
            $('#send_sbs_btn').show();
            $('#payment').hide();
        }
    });

});