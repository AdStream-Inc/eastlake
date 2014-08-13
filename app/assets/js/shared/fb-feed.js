(function($) {
  function EastlakeFeed() {
    this.id = 'EastlakeAthleticClub';
    this.key = '424396011034000|C1lat5sXOeGZOvUyZqOiCT5CfPI';
    this.postsUrl = 'https://graph.facebook.com/' + this.id + '/posts/?access_token=' + this.key + '&limit=3';

    this.getPosts();
  }

  EastlakeFeed.prototype.getPosts = function() {
    var _this = this;

    $.ajax({
      url: _this.postsUrl,
      type: 'GET',
      contentType: "application/json",
      dataType: 'jsonp',
    }).done(function(res) {
      var html = '';
      $.each(res.data, function() {

        if (this.message) {
          html += '<div class="fb-message">';
          html += '<p class="fb-message-body">' + this.message.substring(150)  + '...</p>';
          html += '<p class="fb-message-date small text-muted">' + relativeTime(this.created_time) +'</p>';
          html += '</div>';
        }
      });

      $('#facebook-feed').append(html);
    });
  };

  window.EastlakeFeed = EastlakeFeed;

  // Adapted from James Herdman's http://bit.ly/e5Jnxe
  function relativeTime(time) {
    var period = new Date(time);
    var delta = new Date() - period;

    if (delta <= 10000) { // Less than 10 seconds ago
      return 'Just now';
    }

    var units = null;

    var conversions = {
      millisecond: 1, // ms -> ms
      second: 1000, // ms -> sec
      minute: 60, // sec -> min
      hour: 60, // min -> hour
      day: 24, // hour -> day
      month: 30, // day -> month (roughly)
      year: 12 // month -> year
    };

    for (var key in conversions) {
      if (delta < conversions[key]) {
        break;
      } else {
        units = key;
        delta = delta / conversions[key];
      }
    }

    // Pluralize if necessary:
    delta = Math.floor(delta);
    if (delta !== 1) {
      units += 's';
    }
    return [delta, units, "ago"].join(' ');
  }
})(jQuery);