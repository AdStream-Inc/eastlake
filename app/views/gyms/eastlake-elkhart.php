{% extends 'templates/base.php' %}

{% block title %}{{ title }}{% endblock %}

{% block main %}
  <h1 class="section-title">{{ title }}</h1>
  <div class="row">
    <div class="col-md-8">
      <h3 class="section-sub-title">Staffed Hours</h3>
      <table class="table">
        <thead>
          <tr>
            <th>Day</th>
            <th class="text-right">Hours</th>
          </tr>
        </thead>
        <tbody>
          <tr>
            <td>Monday - Thursday</td>
            <td class="text-right">5 AM - 9 PM</td>
          </tr>
          <tr>
            <td>Friday</td>
            <td class="text-right">5 AM - 8 PM</td>
          </tr>
          <tr>
            <td>Saturday</td>
            <td class="text-right">7 AM - 3 PM</td>
          </tr>
          <tr>
            <td>Sunday</td>
            <td class="text-right">12 PM - 4 PM</td>
          </tr>
        </tbody>
      </table>
      <h3 class="section-sub-title">Amenities</h3>
      <ul class="list-group eastlake-list-group">
        <li class="list-group-item">Cybex Strength</li>
        <li class="list-group-item">Hammer Strength</li>
        <li class="list-group-item">Precor Cardio</li>
        <li class="list-group-item">Women Only Area</li>
        <li class="list-group-item">Tennis Courts</li>
        <li class="list-group-item">Soccer Field</li>
        <li class="list-group-item">Silver Sneakers Access</li>
        <li class="list-group-item">Racquetball Courts</li>
        <li class="list-group-item">Message</li>
        <li class="list-group-item">Towel Service</li>
        <li class="list-group-item">Nursery</li>
      </ul>
    </div>
    <div class="col-md-4">
      <div class="sidebar">
        <h3 class="section-sub-title">Location</h3>
        <p class="flush-bottom small">{{ location['phone'] }}</p>
        <p class="flush-bottom small">{{ location['street'] }}</p>
        <p class="small">{{ location['city'] }}, {{ location['state'] }} {{ location['zip'] }}</p>
        <script type="text/javascript" src="http://maps.google.com/maps/api/js?sensor=false"></script>
        <div style="width:320px;color:#555" class="push-bottom">
          <div style="overflow:hidden;height:240px;width:320px;">
            <div id="gmap_canvas" style="height:240px;width:320px;"></div>
            <style>#gmap_canvas img{max-width:none!important;background:none!important}</style>
          </div>
          <script type="text/javascript"> function init_map(){var myOptions = {zoom:16,center:new google.maps.LatLng(41.572844,-85.81538499999999),mapTypeId: google.maps.MapTypeId.ROADMAP};map = new google.maps.Map(document.getElementById("gmap_canvas"), myOptions);marker = new google.maps.Marker({map: map,position: new google.maps.LatLng(41.572844, -85.81538499999999)});infowindow = new google.maps.InfoWindow({content:"<b>Eastlake Athletic Club - Goshen</b><br/>1400 Fairfield Ave.<br/>46526 Elkhart" });google.maps.event.addListener(marker, "click", function(){infowindow.open(map,marker);});}google.maps.event.addDomListener(window, 'load', init_map);</script>
        </div>
        <h3 class="section-sub-title">Resources</h3>
        <a href="#" class="btn btn-primary btn-block">Group Fitness Schedule</a>
      </div>
    </div>
  </div>
{% endblock %}