{% extends 'templates/base.php' %}

{% block title %}{{ title }}{% endblock %}

{% block main %}
  <h1 class="section-title">{{ title }}</h1>
  <div class="row">
    <div class="col-md-8">
      <h3 class="section-sub-title">Multi Sport Field</h3>
      <p>If interested in renting out our multi-sport field, Elkhart and Goshen locations have 6000 sq. ft. of turf for all your sporting needs.</p>
      <h3 class="section-sub-title">Baseball Cage</h3>
      <p>Eastlake Athletic Club - Elkhart has 4 batting cages available for rental.</p>
    </div>
    <div class="col-md-4">
      <div class="sidebar">
        <h3 class="section-sub-title">Prices</h3>
        <table class="table flush-bottom">
          <thead>
            <tr>
              <th>Location</th>
              <th class="text-right">Price</th>
            </tr>
          </thead>
          <tbody>
            <tr>
              <td>Multi Sport Field</td>
              <td class="text-right">$60/hr</td>
            </tr>
            <tr>
              <td>Individual Cage</td>
              <td class="text-right">$25/hr</td>
            </tr>
            <tr>
              <td>Group Cage <br /><small>4 cages/whole field</small></td>
              <td class="text-right">$75/hr</td>
            </tr>
          </tbody>
        </table>
      </div>
    </div>
  </div>
{% endblock %}