{% extends 'templates/base.php' %}

{% block title %}{{ title }}{% endblock %}

{% block main %}
  <h1 class="section-title">{{ title }}</h1>
  <p>Brazilian Jiu Jitsu is a martial art system that focuses on throws and ground fighting techniques that utilize joint locks and submission holds in order to control and defeat an opponent or assailant.</p>
  <p>Made famous by the Gracie family of Brazil in MMA or Mixed Martial Arts competitions. Brazilian Jiu Jitsu is one of the fastest growing sports in America!</p>
  <h3 class="section-sub-title">Eastlake Goshen Schedule</h3>
  <div class="row">
    <div class="col-md-6">
      <div class="panel panel-default">
        <div class="panel-heading">Youth</div>
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
              <td>5:45 - 6:30 PM</td>
            </tr>
            <tr>
              <td>Thursday</td>
              <td>5:45 - 6:30 PM</td>
            </tr>
          </tbody>
        </table>
      </div>
    </div>
    <div class="col-md-6">
      <div class="panel panel-default">
        <div class="panel-heading">Adult</div>
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
              <td>6:30-7:30 PM</td>
            </tr>
            <tr>
              <td>Thursday</td>
              <td>6:30-7:30 PM</td>
            </tr>
            <tr>
              <td>Saturday</td>
              <td>9:15-10:15 AM</td>
            </tr>
          </tbody>
        </table>
      </div>
    </div>
  </div>
{% endblock %}