(function($) {

  var Events = function(element) {
    this.element = $(element);
    console.log('Perhaps initiate a calender here.');
  }

  $.fn._events = function() {
    return this.each(function() {
      if ($(this).data('_events')) {
        return $(this);
      } else {
        var events = new Events(this);
        $(this).data('_events', events);
        return $(this);
      }
    });
  }

})(jQuery);
