(function($) {

  $(document).ready(function() {
    // When the hamburger toggle link is clicked...
    $('a.hamburger').click(function() {
      // Toggle the hidden menu block.
      $('#nav').toggle();
      // Prevent default link behavior.
      return false;
    });
  });

})(jQuery);
