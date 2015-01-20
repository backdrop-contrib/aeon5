(function($) {

  $(document).ready(function() {
    // When the hamburger toggle link is clicked...
    $('a.hamburger').click(function() {
      // Toggle the hidden menu block.
      $('ul.menu').slideToggle(600);
      // Prevent default link behavior.
      return false;
    });
  });

})(jQuery);
