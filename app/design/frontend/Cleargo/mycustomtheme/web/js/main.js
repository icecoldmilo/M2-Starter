define([
  "jquery",
  "domReady",
  "dropkick"
],
function($, domReady, dropkick) {

    domReady(function() {
        $("select").dropkick({
          mobile: true
        });
    })

});
