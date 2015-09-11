
// ui.js

$(function() {
  var body = $('body'),
      disabledLink = $('.link-disabled'),
      locationsLink = $('#locations-link');

  disabledLink.click(function(e) {
    console.log('disabled link clicked!');
    e.preventDefault();
  });

  locationsLink.click(function() {
    body.scrollTo('#locations');
  });
});
