{% extends 'templates/base.php' %}

{% block title %}{{ title }}{% endblock %}

{% block hero %}
  <div class="hero-container">
    <div class="hero-inner container clearfix">
      <div class="hero-callout fadeInLeft">
        <h1>6 Locations</h1>
        <h1 class="sub">To Choose From</h1>
        <p>Eastlake Athletic Clubs are Elkhart County’s premier racquet and fitness complexes.</p>
        <a href="{{ root }}locations" class="btn-outline btn btn-lg shake">Find A Gym</a>
      </div>
      <div class="hero-img pull-right fadeInRight">
        <img src="images/homepage/home-hero.png" />
      </div>
    </div>
  </div>
{% endblock %}

{% block main %}
  <div class="sports-section">
    {% include 'partials/home/sports.php' %}
  </div>
  <div class="row">
    <div class="col-md-6">
      <div class="services-section">
        {% include 'partials/home/services.php' %}
      </div>
    </div>
    <div class="col-md-6">
      <div class="facebook-section">
        {% include 'partials/home/facebook.php' %}
      </div>
    </div>
  </div>
  <div class="pro-shop-section">
    {% include 'partials/home/proshop.php' %}
  </div>
{% endblock %}