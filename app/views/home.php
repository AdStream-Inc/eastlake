{% extends 'templates/base.php' %}

{% block title %}{{ title }}{% endblock %}

{% block hero %}
  <div class="hero-container">
    <div class="hero-inner container clearfix">
      <div class="hero-callout fadeInLeft">
        <h1>7 Locations</h1>
        <h1 class="sub">One Membership</h1>
        <p>Eastlake Athletic clubs are Elkhart county's largest local family owned sport and 24 hour fitness clubs.</p>
        <a href="{{ root }}locations" class="btn-outline btn btn-lg shake">Find A Club</a>
      </div>
      <div class="hero-img pull-right fadeInRight">
        <div class="hero-img-slider">
          <img class="item" src="images/homepage/rates-hero.png" alt="Personal and Corporate Rates" data-title="Individual, Family, and Corporate Rates" />
          <img class="item" src="images/homepage/tennis-hero.png" alt="Elite Tennis Programs" data-title="Elite Tennis Programs" />
          <img class="item" src="images/homepage/silver-sneakers-hero.png" alt="Silver Sneakers Program" data-title="Silver Sneakers Program" />
        </div>
      </div>
      <div class="hero-caption fadeInRight">
        Individual, Family, and Corporate Rates
      </div>
    </div>
  </div>
{% endblock %}

{% block main %}
  <div class="row">
    <div class="col-md-6">
      <div class="sports-section">
        {% include 'partials/home/sports.php' %}
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

{% block scripts %}
  <script>
    new EastlakeFeed();
  </script>
{% endblock %}