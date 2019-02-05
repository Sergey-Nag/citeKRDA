$(document).ready(function () {
  var lButton = $('#language-button');
  lButton.ready(function () {
    setTimeout(function () {
      lButton.addClass('wow');
      setTimeout(function () {
        lButton.removeClass('wow');
      }, 1500);
    }, 1500);

  });
  var list = $('.leng-list');
  var isDown = false;
  var FORM = $('#send-form');

  $('#language-button').click(function (e) {
    list.slideToggle(200);
    isDown = !isDown;
  });
  $(this).mouseup(function (e) {
    var button = $('#language-button');
    if (!button.is(e.target) && button.has(e.target).length === 0 && !list.is(e.target) && list.has(e.target).length === 0) list.slideUp(200);
  });

  FORM.submit(function (e) {
    e.preventDefault();
    var formSubm = $('#form-subm');
    $.ajax({
      url: "sendMail.php", // куда отправляем
      type: "get", // метод передачи
      dataType: "json", // тип передачи данных
      data: $(this).serialize(),
      beforeSend: function () {
        FORM.find('.error').remove();
        formSubm.addClass('sending');
        formSubm.attr('disabled', true);
        formSubm.attr('value', 'Sending...');
      },
      // после получения ответа сервера
      error: function (error) {
        formSubm.removeClass('sending');
        formSubm.attr('disabled', false);
        formSubm.attr('value', 'Send');
        FORM.append('<span class="error">Something happend, try again please</span>');
        var res = error.responseText;
        console.log(res)
      },
      success: function (data) {
        var res = data.result
        console.log(data.result); // выводим ответ сервера
        if (!/&/g.test(res)) {
          formSubm.removeClass('sending');
          formSubm.attr('value', 'Sended');
        } else {
          formSubm.removeClass('sending');
          formSubm.attr('disabled', false);
          formSubm.attr('value', 'Send');
          FORM.append('<span class="error">Something happend, try again please</span>');
        }

      }
    });
  })

  $(window).scroll(toperScroll);
  $(window).resize(toperScroll);

  function toperScroll() {
    var header = $('.main-screen');
    var scrollTop = $(this).scrollTop();
    var wWidth = $(window).outerWidth();
    var hiddenH = $('#show430');
    var toper = $('.toper-left');
    var wrapp = $('#wrapp_info');
    if (hiddenH.css('display') == 'block' && wWidth <= 430) {
      var toperLeft = toper.position().left;
      var listColors = $('.list-colors');
      var toperPosTop = toper.height() + scrollTop;
      var wrappPosTop = wrapp.position().top + wrapp.height();

      if (scrollTop >= wrapp.position().top && toperPosTop < wrappPosTop) {
        toper.css({
          position: 'fixed',
          top: '20px',
          left: toperLeft + 'px'
        });
      } else {
        if (toperPosTop >= wrappPosTop) {
          var posFixed = toperPosTop;
          toper.css({
            position: 'absolute',
            top: wrappPosTop - toper.height() + 24 + 'px',
            left: toperLeft + 'px'
          });
        } else {
          toper.css({
            position: 'relative',
            top: 'auto',
            left: 'auto'
          });
        }
      }
    } else {
      toper.css({
        position: 'relative',
        top: 'auto',
        left: 'auto'
      });
    }
  }



  var isCheck = {
    name: false,
    country: false,
    email: false
  };

  $('.form-input[name="name"]').on('input', checkingVal);
  $('.form-input[name="name"]').on('blur', checkingVal);
  $('.form-input[name="country"]').on('input', checkingVal);
  $('.form-input[name="country"]').on('blur', checkingVal);
  $('.form-input[name="email"]').on('input', checkingEmail);
  $('.form-input[name="email"]').on('blur', checkMail);

  function checkingVal() {
    var name = $(this).attr('name');
    var value = $(this).val();
    if (value.length > 2) {
      form[name] = true;
      $('.form-bottom div[data-check="' + name + '"]').children('.incorrect').fadeOut(200, function () {
        $('.form-bottom div[data-check="' + name + '"]').children('.correct').fadeIn(200);
      });
      isCheck[name] = true;
    } else {
      form[name] = false;
      if (isCheck[name]) {
        $('.form-bottom div[data-check="' + name + '"]').children('.correct').fadeOut(200, function () {
          $('.form-bottom div[data-check="' + name + '"]').children('.incorrect').fadeIn(200);
        });
      }
    }
    allowForm();
  }

  function checkingEmail() {
    var value = $(this).val();
    if (/[a-z0-9!#$%&'*+/=?^_`{|}~-]+(?:\.[a-z0-9!#$%&'*+/=?^_`{|}~-]+)*@(?:[a-z0-9](?:[a-z0-9-]*[a-z0-9])?\.)+[a-z0-9](?:[a-z0-9-]*[a-z0-9])?/.test(value)) {
      form.email = true;
      $('.form-bottom div[data-check="email"]').children('.incorrect').fadeOut(200, function () {
        $('.form-bottom div[data-check="email"]').children('.correct').fadeIn(200);
      });
      isCheck.email = true;
    } else {
      form.email = false;
      if (isCheck.email) {
        $('.form-bottom div[data-check="email"]').children('.correct').fadeOut(200, function () {
          $('.form-bottom div[data-check="email"]').children('.incorrect').fadeIn(200);
        });
      }
    }
    allowForm();
  }

  function checkMail() {
    var value = $(this).val();
    if (value.length > 0) {

      if (/[a-z0-9!#$%&'*+/=?^_`{|}~-]+(?:\.[a-z0-9!#$%&'*+/=?^_`{|}~-]+)*@(?:[a-z0-9](?:[a-z0-9-]*[a-z0-9])?\.)+[a-z0-9](?:[a-z0-9-]*[a-z0-9])?/.test(value)) {
        form.email = true;
        isCheck.email = true;
        $('.form-bottom div[data-check="email"]').children('.incorrect').fadeOut(200, function () {
          $('.form-bottom div[data-check="email"]').children('.correct').fadeIn(200);
        });
      } else {
        form.email = false;
        $('.form-bottom div[data-check="email"]').children('.correct').fadeOut(200, function () {
          $('.form-bottom div[data-check="email"]').children('.incorrect').fadeIn(200);
        });
      }
    }
    allowForm();
  }
});

var form = {
  name: false,
  country: false,
  email: false
};

function allowForm() {
  console.log(form.name, form.country, form.email);
  if (form.name && form.country && form.email) $('#form-subm').attr('disabled', false);
  else $('#form-subm').attr('disabled', true);
}
