{% extends 'templates/base.php' %}

{% block title %}{{ title }}{% endblock %}

{% block main %}
  <h1 class="section-title">{{ title }}</h1>
  <p>Childcare is available for all children between the ages of 2 months to 12 years. Let our qualified staff provide a safe and fun environment for your children while you enjoy your workout.</p>
  <p><strong>This program is absolutely free to members!</strong></p>
  <h3 class="section-sub-title">Childcare Hours</h3>
  <div class="row">
    <div class="col-md-4">
      <div class="panel panel-default">
        <div class="panel-heading">Elkhart Hours</div>
        <table class="table">
          <thead>
            <tr>
              <th>Day</th>
              <th>Hours</th>
            </tr>
          </thead>
          <tbody>
            <tr>
              <td>Monday</td>
              <td>8 AM - 1 PM &amp;   4:30 AM -8 PM</td>
            </tr>
            <tr>
              <td>Tuesday</td>
              <td>8 AM - 1 PM &amp;   4:30 AM -8 PM</td>
            </tr>
            <tr>
              <td>Wednesday</td>
              <td>8 AM - 1 PM &amp;   4:30 AM -8 PM</td>
            </tr>
            <tr>
              <td>Thursday</td>
              <td>8 AM - 1 PM &amp;   4:30 AM -8 PM</td>
            </tr>
            <tr>
              <td>Friday</td>
              <td>8 AM - 1 PM &amp;   4:30 AM -8 PM</td>
            </tr>
            <tr>
              <td>Saturday</td>
              <td>8 AM - 1 PM &amp;   4:30 AM -8 PM</td>
            </tr>
          </tbody>
        </table>
      </div>
    </div>
    <div class="col-md-4">
      <div class="panel panel-default">
        <div class="panel-heading">Goshen Hours</div>
        <table class="table">
          <thead>
            <tr>
              <th>Day</th>
              <th>Hours</th>
            </tr>
          </thead>
          <tbody>
            <tr>
              <td>Tuesday</td>
              <td>4 PM - 7 PM</td>
            </tr>
            <tr>
              <td>Wednesday</td>
              <td>4:45 PM - 7 PM</td>
            </tr>
            <tr>
              <td>Thursday</td>
              <td>4 PM - 7 PM</td>
            </tr>
          </tbody>
        </table>
      </div>
    </div>
    <div class="col-md-4">
      <div class="panel panel-default">
        <div class="panel-heading">Middlebury Hours</div>
        <table class="table">
          <thead>
            <tr>
              <th>Day</th>
              <th>Hours</th>
            </tr>
          </thead>
          <tbody>
            <tr>
              <td>Tuesday</td>
              <td>4 PM - 7 PM</td>
            </tr>
            <tr>
              <td>Wednesday</td>
              <td>4:45 PM - 7 PM</td>
            </tr>
            <tr>
              <td>Thursday</td>
              <td>4 PM - 7 PM</td>
            </tr>
          </tbody>
        </table>
      </div>
    </div>
  </div>
{% endblock %}