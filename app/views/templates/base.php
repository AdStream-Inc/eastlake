<!DOCTYPE html>
<html>
  <head>
      <meta charset="utf-8">
      <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
      <title>{% block title %}{% endblock %} &middot; Eastlake Athletic Club</title>
      <meta name="description" content="{% block description %}{% endblock %}">
      <meta name="viewport" content="width=device-width, minimum-scale=1, maximum-scale=1">

      <link rel="stylesheet" type="text/css" href="//cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/3.1.1/css/bootstrap.min.css" />
      <link rel="stylesheet" type="text/css" href="//cdnjs.cloudflare.com/ajax/libs/font-awesome/4.0.3/css/font-awesome.min.css" />
      <link rel="stylesheet" href="{{ root }}css/app.min.css">
      {% block stylesheets %}{% endblock %}

      <script>
        var URL = {
          root: '{{root}}'
        }
      </script>
  </head>
  <body>
    <nav class="navbar header-container" role="navigation">
      <div class="container">
        <div class="navbar-header">
          <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#main-nav-collapse">
            <span class="sr-only">Toggle navigation</span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
          </button>
          <a class="navbar-brand" href="{{ root }}">
            <img class="logo-icon" src="{{ root }}images/logo.png" />
            <img class="logo-text" src="{{ root }}images/logo-text.png" />
          </a>
        </div>
        <div class="collapse navbar-collapse" id="main-nav-collapse">
          <ul class="nav navbar-nav navbar-right nav-main">
            <li><a {% if (uri == '/about') %} class="active" {% endif %} href="{{ root }}about">About</a></li>
            <li class="dropdown">
              <a href="#" class="dropdown-toggle" data-toggle="dropdown" data-hover="dropdown" data-delay="0">Sports <b class="caret"></b></a>
              <ul class="dropdown-menu">
                <li><a href="{{ root }}sports/tennis">Tennis</a></li>
                <li><a href="{{ root }}sports/racquetball">Racquetball</a></li>
                <li><a href="{{ root }}sports/football">Football</a></li>
                <li><a href="{{ root }}sports/soccer">Soccer</a></li>
                <li><a href="http://ecbsa.lockerdome.com/">Baseball</a></li>
                <li><a href="http://www.hoosierpremier.com/">Basketball</a></li>
              </ul>
            </li>
            <li class="dropdown">
              <a href="#" class="dropdown-toggle" data-toggle="dropdown" data-hover="dropdown" data-delay="0">Services <b class="caret"></b></a>
              <ul class="dropdown-menu">
                <li><a href="{{ root }}services/group-fitness">Group Fitness</a></li>
                <li><a href="{{ root }}services/message">Message</a></li>
                <li><a href="#">Silver Sneakers</a></li>
                <li><a href="#">Facility Rental</a></li>
                <li><a href="#">Fitness Training</a></li>
                <li><a href="{{ root }}services/child-care">Child Care</a></li>
                <li><a href="#">Brazilian Jiu Jitsu</a></li>
                <li><a href="#">Strength &amp; Conditioning</a></li>
              </ul>
            </li>
            <li><a href="#">Contact</a></li>
            <li><a href="{{ root }}locations" class="btn-outline">Find a Gym</a></li>
          </ul>
        </div>
      </div>
    </nav>
    {% block hero %}{% endblock %}
    <div class="main-container">
      <div class="container">
        {% block main %}{% endblock %}
      </div>
    </div>
    <div class="footer-container">
      <div class="container">
        <p>
          Get In <strong>Touch</strong>
          <a href="https://www.facebook.com/EastlakeAthleticClub" class="fa fa-facebook footer-social"></a>
          <a href="https://twitter.com/EastlakeAthClub" class="fa fa-twitter footer-social"></a>
          <a href="http://www.youtube.com/user/EastlakeAthleticClub" class="fa fa-youtube-play footer-social"></a>
        </p>
        <hr />
        <p class="pull-left">&copy; Copyright <?php echo date('Y'); ?> Eastlake Athletic Clubs</p>
        <ul class="footer-nav nav-inline pull-right">
          <li><a href="#">Home</a></li>
          <li><a href="#">About</a></li>
          <li><a href="#">Sports</a></li>
          <li><a href="#">Services</a></li>
          <li><a href="#">Contact</a></li>
          <li><a href="{{ root }}locations" class="btn-outline">Find Gym</a></li>
        </ul>
      </div>
    </div>
    <script src="//cdnjs.cloudflare.com/ajax/libs/jquery/2.1.0/jquery.min.js"></script>
    <script src="//cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/3.1.1/js/bootstrap.min.js"></script>
    <script src="{{root}}js/app.min.js"></script>
    {% block scripts %}{% endblock %}
  </body>
</html>