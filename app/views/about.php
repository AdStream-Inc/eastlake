{% extends 'templates/base.php' %}

{% block title %}{{ title }}{% endblock %}

{% block main %}
  <h1 class="section-title">{{ title }}</h1>
  <div class="row">
    <div class="col-md-8">
      <p>Eastlake Athletic Clubs are Elkhart County's largest local family owned sport and fitness clubs. They are owned and operated by Justin and Jason Evers, who grew up in the area and currently reside.  Eastlake Elkhart, was established in 2000 when the twins moved back home from Las Vegas as Tennis Professionals to pursue their dream of owning an athletic club.  Three years later they purchased the Goshen YMCA and converted it into their second club which was name Eastlake Athletic Club Goshen.  These two fifty thousand sq.ft facilities provide an opportunity for community adult and youth to engage in a variety of fitness and sport programs.</p>
      <p>Due to overwhelming growth, in 2012 Jason and Justin opened two 24 hour fitness only facilities in Elkhart and Middlebury.  In 2014 the brothers opened two more 24 hour locations in Elkhart and Syracuse. In addition they partnered with Nappanee Health and Fitness owned by Jason and Jessica Yoder and converted it into Eastlake-Nappanee. Eastlake members now have access to all seven locations throughout Elkhart County.</p>
    </div>
    <div class="col-md-4">
      <div class="sidebar">
        <h3 class="section-sub-title">Staff</h3>
        <img class="img-responsive img-thumbnail push-bottom" src="{{root}}images/owners.png">
        <p class="small text-muted flush-bottom">Owners</p>
        <p>Justin &amp; Jason Evers</p>
        <hr />
        <p class="small text-muted flush-bottom">General Manager</p>
        <p>Brent Balser</p>
        <hr />
        <p class="small text-muted flush-bottom">Office Manger</p>
        <p>Stephanie Ravenscroft</p>
      </div>
    </div>
  </div>
{% endblock %}