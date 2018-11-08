/**
 * skip-link-focus-fix.js
 *
 * Helps with accessibility for keyboard only users.
 *
 * Learn more: https://github.com/Automattic/_s/pull/136
 */

var moment = moment;
var countdown = countdown;

(function() {
  var isWebkit = navigator.userAgent.toLowerCase().indexOf('webkit') > -1,
    isOpera = navigator.userAgent.toLowerCase().indexOf('opera') > -1,
    isIE = navigator.userAgent.toLowerCase().indexOf('msie') > -1;

  if (
    (isWebkit || isOpera || isIE) &&
    document.getElementById &&
    window.addEventListener
  ) {
    window.addEventListener(
      'hashchange',
      function() {
        var id = location.hash.substring(1),
          element;

        if (!/^[A-z0-9_-]+$/.test(id)) {
          return;
        }

        element = document.getElementById(id);

        if (element) {
          if (!/^(?:a|select|input|button|textarea)$/i.test(element.tagName)) {
            element.tabIndex = -1;
          }

          element.focus();
        }
      },
      false
    );
  }
})();


jQuery(document).ready(function($) {
 //  Welcome Image
  if ($(window).width() > 880 || !$('.logged-in')[0]) {
    $(document).ready(function() {
      //  var isshow = sessionStorage.getItem('isshow');
      // if (isshow === null) {
      //   sessionStorage.setItem('isshow', 1);
      //   document.documentElement.style.overflow = 'hidden'; // firefox, chrome
      //   document.body.scroll = 'no'; // ie only
      $('#hero-banner').delay(5000).fadeIn(1000).delay(3000).fadeOut(1000);
      // }
    });
  }

  //  Countdown timers
  var now = moment();
  var then = moment('20190907', 'YYYYMMDD');
  $('.now').text(moment(now).format('YYYYMMDD'));
  $('.then').text(moment(then).format('YYYYMMDD'));
  $('.duration').text(moment(now).to(then));
  (function timerLoop() {
    $('.difference > span').text(then.diff(now, 'days'));
    $('.countdown').text(countdown(then).toString());
    requestAnimationFrame(timerLoop);
  })();

  // Variable height for countdown depending on logged in status
  if ($('.logged-in')[0]) {
    $('#difference').addClass('subtract-height');
  } else {
    return;
  }
});
