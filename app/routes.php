<?php

function ApiRequest(){
  $app = \Slim\Slim::getInstance();
  $app->view(new \JsonApiView());
  $app->add(new \JsonApiMiddleware());
}

$app->get('/', function() use($app) {
  $app->render('home.php',
    array(
      'title' => 'Home',
    )
  );
});

$app->get('/about', function() use($app) {
  $app->render('about.php',
    array(
      'title' => 'About',
    )
  );
});

$locations = array(
  array(
    'title' => 'Eastlake Athletic Club Goshen',
    'street' => '1400 Fairfield Ave.',
    'city' => 'Goshen',
    'state' => 'IN',
    'zip' => '46526',
    'phone' => '574-533-2498',
    'latitude' => '41.572844',
    'longitude' => '-85.81538499999999'
  ),
  array(
    'title' => 'Eastlake Athletic Club Elkhart',
    'street' => '3400 Henke Rd.',
    'city' => 'Elkhart',
    'state' => 'IN',
    'zip' => '46514',
    'phone' => '574-264-0611',
    'latitude' => '41.716977',
    'longitude' => '-85.94020710000001'
  ),
  array(
    'title' => 'Eastlake 24 Elkhart C.R. 7',
    'street' => '5150 Verdant Dr.',
    'city' => 'Elkhart',
    'state' => 'IN',
    'zip' => '46517',
    'phone' => '574-293-6899',
    'latitude' => '41.678301',
    'longitude' => '-85.705308'
  ),
  array(
    'title' => 'Eastlake 24 Middlebury',
    'street' => '304 N. Main',
    'city' => 'Middlebury',
    'state' => 'IN',
    'zip' => '46540',
    'phone' => '574-821-1560',
    'latitude' => '41.6745949',
    'longitude' => '-85.88951500000002'
  ),
  // array(),
  // array(),
);

$app->get('/api/locations', 'ApiRequest', function() use($app, $locations) {
  $app->render(200, array(
    'locations' => $locations
  ));
});

$app->get('/locations', function() use($app, $locations) {
  $app->render('find-a-gym.php',
    array(
      'title' => 'Find A Gym',
      'locations' => $locations
    )
  );
});

$app->get('/sports/tennis', function() use($app) {
  $app->render('sports/tennis.php',
    array(
      'title' => 'Tennis',
    )
  );
});

$app->get('/sports/racquetball', function() use($app) {
  $app->render('sports/racquetball.php',
    array(
      'title' => 'Racquetball',
    )
  );
});

$app->get('/sports/soccer', function() use($app) {
  $app->render('sports/soccer.php',
    array(
      'title' => 'Soccer',
    )
  );
});

$app->get('/sports/football', function() use($app) {
  $app->render('sports/football.php',
    array(
      'title' => 'Football',
    )
  );
});