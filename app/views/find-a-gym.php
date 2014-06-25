{% extends 'templates/base.php' %}

{% block title %}{{ title }}{% endblock %}

{% block main %}
  <div class="map">
    <div class="row">
      <div class="col-md-4">
        <div class="map-sidebar-container">
          <ul class="map-sidebar">
            {% for key, location in locations %}
              {% if key == (locations|length - 1) %}
                {% set modifier = 'last' %}
              {% endif %}
              <li data-id="{{key}}" class="map-item {{modifier}}">
                <p class="flush-bottom map-item-title">{{ location.title }}</p>
                <p class="small flush-bottom">{{ location.street }}</p>
                <p class="small flush-bottom">{{ location.city }}, {{ location.state }}, {{ location.zip }}</p>
                <p class="small">{{ location.phone }}</p>
                <a href="{{ root }}locations/{{ location.route }}" class="btn btn-sm btn-default">More Details</a>
              </li>
            {% endfor %}
          </ul>
        </div>
      </div>
      <div class="col-md-8">
        <div class="map-container">
          <div id="map-element"></div>
        </div>
      </div>
    </div>
  </div>
{% endblock %}

{% block scripts %}
  <script src="//maps.googleapis.com/maps/api/js?sensor=false"></script>
  <script src="{{ root }}js/components/map-app.js"></script>
{% endblock %}