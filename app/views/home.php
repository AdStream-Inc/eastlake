{% extends 'templates/base.php' %}

{% block title %}{{ title }}{% endblock %}

{% block hero %}
  <div class="hero-container">
    <div class="hero-inner container clearfix">
      <div class="hero-callout fadeInLeft">
        <h1>7 Locations</h1>
        <h1 class="sub">To Choose From</h1>
        <p>Eastlake Athletic clubs are Elkhart county's largest local family owned sport and 24 hour fitness clubs.</p>
        <a href="{{ root }}locations" class="btn-outline btn btn-lg shake">Find A Club</a>
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