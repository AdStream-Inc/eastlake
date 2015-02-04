{% extends 'templates/base.php' %}

{% block title %}{{ title }}{% endblock %}

{% block main %}
  <h1 class="section-title">{{ title }}</h1>
  <div class="row">
    <div class="col-md-8">
      <p>Eastlake Athletic Club will provide you with a variety of the best classes in todays fitness industry. To find out what classes are offered at each club go to <a href="{{root}}locations">Find a Club</a> and click on the group fitness schedule for your club.</p>
    </div>
    <div class="col-md-4">
      <div class="sidebar">
        <h3 class="section-sub-title">Resources</h3>
        <a href="{{root}}uploads/jan-2015.pdf" target="_blank" class="btn btn-primary btn-block">Group Fitness Schedule</a>
      </div>
    </div>
  </div>
  <!-- <div class="row">
    <div class="col-md-6">
      <div class="panel panel-default">
        <div class="panel-heading">
          <h3 class="panel-title">eAbs <a href="#" class="pull-right fa fa-calendar"></a></h3>
        </div>
        <div class="panel-body">
          10-15 minutes of all out abs. Crunches, power exercises, Pilates moves combined to provide an efficient and effective abdominal workout for all fitness levels. Serve the six-pack at Eastlake!
        </div>
      </div>
    </div>
    <div class="col-md-6">
      <div class="panel panel-default">
        <div class="panel-heading">
          <h3 class="panel-title">eHip <a href="#" class="pull-right fa fa-calendar"></a></h3>
        </div>
        <div class="panel-body">
          High energy, high aerobic workout using the latest fun and funky music and dance moves. All fitness and "rhythm" levels will certainly bring down the house at Eastlake!
        </div>
      </div>
    </div>
    <div class="col-md-6">
      <div class="panel panel-default">
        <div class="panel-heading">
          <h3 class="panel-title">ePump <a href="#" class="pull-right fa fa-calendar"></a></h3>
        </div>
        <div class="panel-body">
          Perfect mix of strength exercises boosted with aerobic moves to tone and tighten. Work all major muscle groups in a 45-60 minutes workout using bars, hand weights, and resistance equipment. Motivating music beats lead the exercise patterns for all fitness levels. Feel the burn at Eastlake!
        </div>
      </div>
    </div>
    <div class="col-md-6">
      <div class="panel panel-default">
        <div class="panel-heading">
          <h3 class="panel-title">eSculpt <a href="#" class="pull-right fa fa-calendar"></a></h3>
        </div>
        <div class="panel-body">
          Tone & strengthen, working all major muscle groups using bars, hand weights, & resistance equipment. Focus on proper form & building strength with controlled exercises that isolate targeted muscles. Fun music serves as a backdrop to encourage all fitness levels. Power up at Eastlake!!
        </div>
      </div>
    </div>
    <div class="col-md-6">
      <div class="panel panel-default">
        <div class="panel-heading">
          <h3 class="panel-title">eYogaFlex <a href="#" class="pull-right fa fa-calendar"></a></h3>
        </div>
        <div class="panel-body">
          Improve flexibility, stability, and core strength with basic yoga and Pilates exercises. Designed for the beginner but can be modified for more advanced participants. Flex your muscles at Eastlake!!
        </div>
      </div>
    </div>
    <div class="col-md-6">
      <div class="panel panel-default">
        <div class="panel-heading">
          <h3 class="panel-title">Zumba <a href="#" class="pull-right fa fa-calendar"></a></h3>
        </div>
        <div class="panel-body">
          Latin inspired cardio dance class with high energy, high aerobic workout. All fitness and "rhythm" levels will certainly bring down the house at Eastlake!        </div>
      </div>
    </div>
    <div class="col-md-6">
      <div class="panel panel-default">
        <div class="panel-heading">
          <h3 class="panel-title">E30 Series <a href="#" class="pull-right fa fa-calendar"></a></h3>
        </div>
        <div class="panel-body">
          Keep your workout full of variety. 30 minute efficient workouts jam packed with energy using only your body weight and resistance equipment. Classes encourage muscle confusion with high intensity intervals to keep the body toned tight with different exercises each time you participate in class.
        </div>
      </div>
    </div>
    <div class="col-md-6">
      <div class="panel panel-default">
        <div class="panel-heading">
          <h3 class="panel-title">E30 Core <a href="#" class="pull-right fa fa-calendar"></a></h3>
        </div>
        <div class="panel-body">
          Will bust the belly blues and tighten core and buns too.
        </div>
      </div>
    </div>
    <div class="col-md-6">
      <div class="panel panel-default">
        <div class="panel-heading">
          <h3 class="panel-title">E30 Max <a href="#" class="pull-right fa fa-calendar"></a></h3>
        </div>
        <div class="panel-body">
          Increases metabolism and muscular functioning while burning fat and calories.        \
        </div>
      </div>
    </div>
    <div class="col-md-6">
      <div class="panel panel-default">
        <div class="panel-heading">
          <h3 class="panel-title">E30 Lite <a href="#" class="pull-right fa fa-calendar"></a></h3>
        </div>
        <div class="panel-body">
          A lighter version of Max for those just beginning or wanting to change their fitness regimen.
        </div>
      </div>
    </div>
    <div class="col-md-6">
      <div class="panel panel-default">
        <div class="panel-heading">
          <h3 class="panel-title">E30 <a href="#" class="pull-right fa fa-calendar"></a></h3>
        </div>
        <div class="panel-body">
          The best of Max and Lite combined. 2 choices of workout allows all fitness levels to participate in a single class.
        </div>
      </div>
    </div>
  </div> -->
{% endblock %}

{% block scripts %}
  <script>
    (function($) {
      $('.panel').matchHeight();
    })(jQuery);
  </script>
{% endblock %}
