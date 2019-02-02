$(document).ready(function () {
  let list = $('.leng-list');
  let isDown = false;
  $('#language-button').click(function (e) {
    list.slideToggle(200);
    isDown = !isDown;
  });
  $('.lang-input').click(function () {
    console.log($(this).attr('data-lang'));
  });
  $(this).mouseup(function (e) {
    let button = $('#language-button');
    if (!button.is(e.target) && button.has(e.target).length === 0 && !list.is(e.target) && list.has(e.target).length === 0) list.slideUp(200);
  });


  $(window).scroll(function (e) {
    let header = $('.main-screen');
    let scrollTop = $(this).scrollTop();
    let hiddenH = $('#show430');
    let toper = $('.toper-left');
    let wrapp = $('#wrapp_info');
    if (hiddenH.css('display') == 'block') {
      let toperLeft = toper.position().left;
      let listColors = $('.list-colors');
      let toperPosTop = toper.height() + scrollTop;
      let wrappPosTop = wrapp.position().top + wrapp.height();

      if (scrollTop >= wrapp.position().top && toperPosTop < wrappPosTop) {
        toper.css({
          position: 'fixed',
          top: '20px',
          left: toperLeft + 'px'
        });
      } else {
        if (toperPosTop >= wrappPosTop) {
          let posFixed = toperPosTop;
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
    }
  });


  let isCheck = {
    name: false,
    email: false
  };

  $('.form-input[type="name"]').on('input', checkingName);
  $('.form-input[type="name"]').on('blur', checkName);
  $('.form-input[type="email"]').on('input', checkingEmail);
  $('.form-input[type="email"]').on('blur', checkMail);

  function checkingName() {
    let value = $(this).val();
    if (value.length > 2) {
      form.name = true;
      $('.form-bottom div[data-check="name"]').children('.incorrect').fadeOut(200, function () {
        $('.form-bottom div[data-check="name"]').children('.correct').fadeIn(200);
      });
      isCheck.name = true;
    } else {
      form.name = false;
      if (isCheck.name) {
        $('.form-bottom div[data-check="name"]').children('.correct').fadeOut(200, function () {
          $('.form-bottom div[data-check="name"]').children('.incorrect').fadeIn(200);
        });
      }
    }
    allowForm();
  }

  function checkName() {
    let value = $(this).val();
    if (value.length > 2) {
      form.name = true;
      $('.form-bottom div[data-check="name"]').children('.incorrect').fadeOut(200, function () {
        $('.form-bottom div[data-check="name"]').children('.correct').fadeIn(200);
      });
    } else {
      form.name = false;
      $('.form-bottom div[data-check="name"]').children('.correct').fadeOut(200, function () {
        $('.form-bottom div[data-check="name"]').children('.incorrect').fadeIn(200);
      });
    }
    allowForm();
  }

  function checkingEmail() {
    let value = $(this).val();
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
    let value = $(this).val();
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
    allowForm();
  }
});

var form = {
  name: false,
  email: false
};

function allowForm() {
  console.log(form.name, form.email);
  if (form.name && form.email) $('#form-subm').attr('disabled', false);
  else $('#form-subm').attr('disabled', true);
}
