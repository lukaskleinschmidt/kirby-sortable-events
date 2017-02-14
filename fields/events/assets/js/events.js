(function($) {

  var Events = function(element) {
    this.element = $(element);
    console.log('Perhaps initiate a calender here.');
  }

  $.fn.events = function() {
    return this.each(function() {
      if ($(this).data('events')) {
        return $(this);
      } else {
        var events = new Events(this);
        $(this).data('events', events);
        return $(this);
      }
    });
  }

})(jQuery);
