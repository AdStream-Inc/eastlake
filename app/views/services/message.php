{% extends 'templates/base.php' %}

{% block title %}{{ title }}{% endblock %}

{% block main %}
  <h1 class="section-title">{{ title }}</h1>
  <div class="row">
    <div class="col-md-8">
      <div class="panel panel-default">
        <div class="panel-heading">
          <h3 class="panel-title">Mission Statement</h3>
        </div>
        <div class="panel-body">
          The massage program at Eastlake prides ourselves on providing individualized treatment to each person we meet by making a treatment plan just for you.  Whether you are an athlete, office worker, factory worker, stay at home mom or you just need to relax;  we can help you.
        </div>
      </div>
      <p>Eastlake massage is the perfect way to relax and unwind. We have a qualified staff that will provide you with a great experience.</p>
      <h3 class="section-sub-title">Our services include:</h3>
      <ul>
        <li>Therapeutic</li>
        <li>Deep tissue</li>
        <li>Swedish</li>
        <li>Trigger point</li>
        <li>Pregnancy</li>
        <li>Arthritis</li>
        <li>Hot rock</li>
        <li>Chronic pain massage</li>
      </ul>
      <h3 class="section-sub-title">Benefits of Massage</h3>
      <ul>
        <li>Helps in releasing muscle tension and restoring balance back to the musculo-skeletal system</li>
        <li>Helps improve range of motion, flexibility, &amp; blood circulation</li>
        <li>Helps reduce heart rate and blood pressure</li>
        <li>Helps alleviate soreness, stiffness, numbness, stress and tension that has built up in the muscles during physical activity</li>
        <li>Enhances elimination of metabolic by-products of exercise by increasing lymph flow</li>
        <li>Individualized treatment based on specific sport or areas of discomfort to improve daily life</li>
      </ul>
    </div>
    <div class="col-md-4">
      <div class="sidebar">
        <h3 class="section-sub-title">Prices</h3>
        <p class="flush-bottom">30 mins - $30</p>
        <p class="flush-bottom">1hr - $50</p>
        <p>1.5 hrs - $75</p>
        <p class="flush-bottom">Schedule your appointment today!</p>
      </div>
    </div>
  </div>
{% endblock %}