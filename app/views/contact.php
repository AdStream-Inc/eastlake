{% extends 'templates/base.php' %}

{% block title %}{{ title }}{% endblock %}

{% block main %}
  <h1 class="section-title">{{ title }}</h1>
  <p>Get in touch with us. Just use the form below and we'll get back to you as soon as we can.</p>
  <div class="row">
    <div class="col-sm-6">
      <form method="POST">
        <div class="form-group">
          <label for="name">Name</label>
          <input type="text" id="name" name="name" class="form-control" />
        </div>
        <div class="form-group">
          <label for="email">Email</label>
          <input type="text" id="email" name="email" class="form-control" />
        </div>
        <div class="form-group">
          <label for="phone">Phone</label>
          <input type="text" id="phone" name="phone" class="form-control" />
        </div>
        <div class="form-group">
          <label for="interest">Area of Interest</label>
          <select id="interest" name="interest" class="form-control">
            <option value="General">General</option>
            <option value="Classes">Classes</option>
            <option value="Tennis">Tennis</option>
            <option value="Racquetball">Racquetball</option>
            <option value="Soccer">Soccer</option>
            <option value="Basketball">Basketball</option>
            <option value="Baseball">Baseball</option>
            <option value="Football">Football</option>
          </select>
        </div>
        <div class="form-group">
          <label for="message">Message</label>
          <textarea id="message" name="message" class="form-control" rows="5"></textarea>
        </div>
        <input type="submit" class="btn btn-success pull-right" />
      </form>
    </div>
  </div>
{% endblock %}