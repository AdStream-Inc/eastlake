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
      <div class="row push-bottom">
        <div class="col-sm-3 col-xs-6">
          <a class="gallery-item" href="{{ root }}images/gyms/granger/1.jpg"><img class="img-thumbnail" src="{{ root }}images/gyms/granger/1.jpg" /></a>
        </div>
        <div class="col-sm-3 col-xs-6">
          <a class="gallery-item" href="{{ root }}images/gyms/granger/2.jpg"><img class="img-thumbnail" src="{{ root }}images/gyms/granger/2.jpg" /></a>
        </div>
        <div class="col-sm-3 col-xs-6">
          <a class="gallery-item" href="{{ root }}images/gyms/granger/3.jpg"><img class="img-thumbnail" src="{{ root }}images/gyms/granger/3.jpg" /></a>
        </div>
        <div class="col-sm-3 col-xs-6">
          <a class="gallery-item" href="{{ root }}images/gyms/granger/4.jpg"><img class="img-thumbnail" src="{{ root }}images/gyms/granger/4.jpg" /></a>
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
            <td>Monday - Friday</td>
            <td class="text-right">12 PM - 6 PM</td>
          </tr>
        </tbody>
      </table>
      <h3 class="section-sub-title">Amenities</h3>
      <ul class="list-group eastlake-list-group">
        <li class="list-group-item">Life Fitness Strength</li>
        <li class="list-group-item">Life Fitness Cardio</li>
        <li class="list-group-item">Hammer strength plate loaded</li>
        <li class="list-group-item">Lockers</li>
        <li class="list-group-item">Showers</li>
        <li class="list-group-item">Towel Service</li>
        <li class="list-group-item">24 hour access</li>
        <li class="list-group-item">Silver Sneakers Access</li>
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
        <a href="{{root}}uploads/group-fitness-march.pdf" target="_blank" class="btn btn-primary btn-block">Group Fitness Schedule</a>
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
