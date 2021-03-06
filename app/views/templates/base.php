<!DOCTYPE html>
<html>
  <head>
      <meta charset="utf-8">
      <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
      <title>{% block title %}{% endblock %} &middot; Eastlake Athletic Club</title>
      <meta name="description" content="{% block description %}{% endblock %}">
      <meta name="viewport" content="width=device-width, minimum-scale=1, maximum-scale=1">

      <link rel="stylesheet" href="//maxcdn.bootstrapcdn.com/font-awesome/4.1.0/css/font-awesome.min.css">
      <link rel="stylesheet" href="{{ root }}css/app.min.css">
      {% block stylesheets %}{% endblock %}

      <script>
        var URL = {
          root: '{{root}}'
        };
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
            <li><a {% if (uri == '/membership') %} class="active" {% endif %} href="{{ root }}membership">Membership</a></li>
            <li class="dropdown">
              <a href="#" class="dropdown-toggle" data-toggle="dropdown" data-hover="dropdown" data-delay="0">Sports <b class="caret"></b></a>
              <ul class="dropdown-menu">
                <li><a href="{{ root }}sports/tennis">Tennis</a></li>
                <li><a href="{{ root }}sports/racquetball">Racquetball</a></li>
                <li><a href="{{ root }}sports/jiu-jitsu">Jiu Jitsu</a></li>
                <li><a href="{{ root }}sports/soccer">Soccer</a></li>
                <li><a href="http://www.chargersacademy.com ">Baseball</a></li>
                <li><a href="http://www.hoosierpremier.com/">Basketball</a></li>
              </ul>
            </li>
            <li class="dropdown">
              <a href="#" class="dropdown-toggle" data-toggle="dropdown" data-hover="dropdown" data-delay="0">Services <b class="caret"></b></a>
              <ul class="dropdown-menu">
                <li><a href="{{ root }}services/group-fitness">Group Fitness</a></li>
                <li><a href="{{ root }}services/massage">Massage</a></li>
                <li><a target="_blank" href="http://silversneakers.com">Silver Sneakers</a></li>
                <li><a href="{{ root }}services/facility-rental">Facility Rental</a></li>
                <li><a href="{{ root }}services/fitness-training">Fitness Training</a></li>
                <li><a href="{{ root }}services/child-care">Child Care</a></li>
                <li><a href="{{ root }}services/strength-and-conditioning">Strength &amp; Conditioning</a></li>
              </ul>
            </li>
            <li><a href="{{ root }}contact" {% if (uri == '/contact') %} class="active" {% endif %}>Contact</a></li>
            <li><a href="{{ root }}locations" class="btn-outline">Find a Club</a></li>
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
        <div class="clearfix">
          <p class="get-in-touch">
            Get In <strong>Touch</strong>
            <a href="https://www.facebook.com/EastlakeAthleticClub" class="fa fa-facebook footer-social"></a>
            <a href="https://twitter.com/EastlakeAthClub" class="fa fa-twitter footer-social"></a>
            <a href="http://www.youtube.com/user/EastlakeAthleticClub" class="fa fa-youtube-play footer-social"></a>
          </p>
          <a href="{{ root }}franchise" class="franchise">Find out about our franchising opportunities</a>
        </div>
        <hr />
        <div class="clearfix">
          <p class="copyright">&copy; Copyright {{ 'now'|date('Y', 'America/Indiana/Indianapolis') }} Eastlake Athletic Clubs</p>
          <ul class="footer-nav nav-inline">
            <li><a href="{{ root }}">Home</a></li>
            <li><a href="{{ root }}about">About</a></li>
            <li><a href="{{ root }}membership">Membership</a></li>
            <li><a href="{{ root }}sports/tennis">Sports</a></li>
            <li><a href="{{ root }}services/group-fitness">Services</a></li>
            <li><a href="{{ root }}contact">Contact</a></li>
            <li class="footer-nav-block"><a href="{{ root }}locations" class="btn-outline">Find A Club</a></li>
          </ul>
        </div>
        <div class="clearfix">
         <p class="flush-bottom small text-muted adstream">Website by <a target="_blank" href="http://www.adstreaminc.com/">Ad Stream Inc</a></p>
        </div>
      </div>
    </div>
    <script src="//ajax.googleapis.com/ajax/libs/jquery/2.1.1/jquery.min.js"></script>
    <script src="{{root}}js/app.min.js"></script>
    {% block scripts %}{% endblock %}
  </body>
</html>