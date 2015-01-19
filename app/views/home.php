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
  <div class="special-section">
    <h1 class="section-title">CURRENT SPECIAL</h1>
    <div class="store-info">
      <img class="img-responsive hidden-xs" src="https://fbcdn-sphotos-d-a.akamaihd.net/hphotos-ak-xpa1/t31.0-8/s2048x2048/10896359_558274364309340_8912820614730807181_o.jpg" / alt="$29 Enrollment, 29$ a month. This offer will give you access to all 8 of our locations! Corporate, family and other discounts available.">
      <p class="visible-xs">$29 Enrollment, 29$ a month. This offer will give you access to all 8 of our locations! Corporate, family and other discounts available. Stop in and ask us about our new member referral programs.</p>
    </div>
  </div>
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
