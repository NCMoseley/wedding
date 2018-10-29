/**
 * skip-link-focus-fix.js
 *
 * Helps with accessibility for keyboard only users.
 *
 * Learn more: https://github.com/Automattic/_s/pull/136
 */
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

//  Welcome Image
jQuery(document).ready(function($) {

if ($(window).width() > 769) {
  $(document).ready(function() {
    var isshow = sessionStorage.getItem('isshow');
    if (isshow === null) {
      sessionStorage.setItem('isshow', 1);
      document.documentElement.style.overflow = 'hidden'; // firefox, chrome
      document.body.scroll = 'no'; // ie only
      $('#welcome')
        .show()
        .delay(4000)
        .fadeOut(2000, function() {
          // will run upon fadeout completion
          document.documentElement.style.overflow = 'auto'; // firefox, chrome
          document.body.scroll = 'yes'; // ie only
        });
    }
  });
}
});
