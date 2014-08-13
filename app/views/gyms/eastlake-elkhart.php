{% extends 'templates/base.php' %}

{% block title %}{{ title }}{% endblock %}

{% block main %}
  <ol class="breadcrumb">
    <li><a href="{{ root }}">Home</a></li>
    <li><a href="{{ root }}locations">All Locations</a></li>
    <li class="active">{{ title }}</li>
  </ol>
  <h1 class="section-title">{{ title }}</h1>
  <div class="row">
    <div class="col-md-8">
      <img class="img-thumbnail push-bottom" src="{{ root }}images/gyms/gym-elkhart.png" />
      <div class="row push-bottom">
        <div class="col-xs-4">
          <a class="gallery-item" href="{{ root }}images/gyms/corporate/1.jpg"><img class="img-thumbnail" src="{{ root }}images/gyms/corporate/1-thumb.png" /></a>
        </div>
        <div class="col-xs-4">
          <a class="gallery-item" href="{{ root }}images/gyms/corporate/4.jpg"><img class="img-thumbnail" src="{{ root }}images/gyms/corporate/4-thumb.png" /></a>
        </div>
        <div class="col-xs-4">
          <a class="gallery-item" href="{{ root }}images/gyms/corporate/3.jpg"><img class="img-thumbnail" src="{{ root }}images/gyms/corporate/3-thumb.png" /></a>
        </div>
      </div>
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
      <h3 class="section-sub-title">Nursery Hours</h3>
      <table class="table">
          <thead>
            <tr>
              <th>Day</th>
              <th class="text-right">Hours</th>
            </tr>
          </thead>
          <tbody>
            <tr>
              <td>Monday</td>
              <td class="text-right">8 AM - 1 PM &amp;   4:30 AM -8 PM</td>
            </tr>
            <tr>
              <td>Tuesday</td>
              <td class="text-right">8 AM - 1 PM &amp;   4:30 AM -8 PM</td>
            </tr>
            <tr>
              <td>Wednesday</td>
              <td class="text-right">8 AM - 1 PM &amp;   4:30 AM -8 PM</td>
            </tr>
            <tr>
              <td>Thursday</td>
              <td class="text-right">8 AM - 1 PM &amp;   4:30 AM -8 PM</td>
            </tr>
            <tr>
              <td>Friday</td>
              <td class="text-right">8 AM - 1 PM &amp;   4:30 AM -8 PM</td>
            </tr>
            <tr>
              <td>Saturday</td>
              <td class="text-right">8 AM - 1 PM &amp;   4:30 AM -8 PM</td>
            </tr>
          </tbody>
      </table>
      <h3 class="section-sub-title">Amenities</h3>
      <ul class="list-group eastlake-list-group">
        <li class="list-group-item">Personal Training</li>
        <li class="list-group-item">Cybex Strength</li>
        <li class="list-group-item">Precor Cardio</li>
        <li class="list-group-item">Basketball Court</li>
        <li class="list-group-item">Tennis Courts</li>
        <li class="list-group-item">Baseball Cages</li>
        <li class="list-group-item">Waling Track</li>
        <li class="list-group-item">Lockers</li>
        <li class="list-group-item">Silver Sneakers Access</li>
        <li class="list-group-item">Massage</li>
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
        <div class="responsive-map-container push-bottom">
          <div id="map-container"></div>
        </div>
        <h3 class="section-sub-title">Resources</h3>
        <a href="{{root}}uploads/august-september.pdf" target="_blank" class="btn btn-primary btn-block">Group Fitness Schedule</a>
      </div>
    </div>
  </div>
{% endblock %}

{% block scripts %}
  <script src="//maps.googleapis.com/maps/api/js?sensor=false"></script>
  <script src="{{ root }}js/components/location-map.js"></script>
  <script>
    {% set mapAddress = location['street'] ~ ', ' ~ location['city'] ~ ', ' ~ location['state'] %}
    new LocationMap('{{ mapAddress }}')
  </script>
{% endblock %}