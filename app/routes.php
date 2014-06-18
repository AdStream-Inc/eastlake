<?php

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

$app->get('/franchise', function() use($app) {
  $app->render('franchise.php',
    array(
      'title' => 'Franchise',
    )
  );
});

$app->get('/membership', function() use($app) {
  $app->render('membership.php',
    array(
      'title' => 'Membership',
    )
  );
});

$app->group('/sports', function() use($app) {
  $app->get('/tennis', function() use($app) {
    $app->render('sports/tennis.php',
      array(
        'title' => 'Tennis',
      )
    );
  });

  $app->get('/racquetball', function() use($app) {
    $app->render('sports/racquetball.php',
      array(
        'title' => 'Racquetball',
      )
    );
  });

  $app->get('/soccer', function() use($app) {
    $app->render('sports/soccer.php',
      array(
        'title' => 'Soccer',
      )
    );
  });

  $app->get('/football', function() use($app) {
    $app->render('sports/football.php',
      array(
        'title' => 'Football',
      )
    );
  });
});

$app->group('/services', function() use($app) {
  $app->get('/group-fitness', function() use($app) {
    $app->render('services/group-fitness.php',
      array(
        'title' => 'Group Fitness'
      )
    );
  });

  $app->get('/message', function() use($app) {
    $app->render('services/message.php',
      array(
        'title' => 'Message'
      )
    );
  });

  $app->get('/child-care', function() use($app) {
    $app->render('services/child-care.php',
      array(
        'title' => 'Child Care'
      )
    );
  });

  $app->get('/facility-rental', function() use($app) {
    $app->render('services/facility-rental.php',
      array(
        'title' => 'Facility Rental'
      )
    );
  });

  $app->get('/brazilian-jiu-jitsu', function() use($app) {
    $app->render('services/brazilian-jiu-jitsu.php',
      array(
        'title' => 'Brazilian Jiu Jitsu'
      )
    );
  });

  $app->get('/strength-and-conditioning', function() use($app) {
    $app->render('services/strength-and-conditioning.php',
      array(
        'title' => 'Strength & Conditioning'
      )
    );
  });

  $app->get('/fitness-training', function() use($app) {
    $app->render('services/fitness-training.php',
      array(
        'title' => 'Fitness Training'
      )
    );
  });
});

function ApiRequest(){
  $app = \Slim\Slim::getInstance();
  $app->view(new \JsonApiView());
  $app->add(new \JsonApiMiddleware());
}

$locations = require_once('locations.php');

$app->group('/api', function() use($app, $locations) {
  $app->get('/locations', 'ApiRequest', function() use($app, $locations) {
    $app->render(200, array(
      'locations' => $locations
    ));
  });
});

$app->group('/locations', function() use($app, $locations) {
  $app->get('/', function() use($app, $locations) {
    $app->render('find-a-gym.php',
      array(
        'title' => 'Find A Club',
        'locations' => $locations
      )
    );
  });

  $app->get('/eastlake-goshen', function() use($app, $locations) {
    $location = $locations['eastlake-goshen'];
    $app->render('gyms/eastlake-goshen.php',
      array(
        'title' => 'Eastlake Athletic Club - Goshen',
        'location' => $location
      )
    );
  });

  $app->get('/eastlake-nappanee', function() use($app) {
    $app->render('gyms/eastlake-nappanee.php',
      array(
        'title' => 'Eastlake 24 Nappanee'
      )
    );
  });

  $app->get('/eastlake-syracuse', function() use($app) {
    $app->render('gyms/eastlake-syracuse.php',
      array(
        'title' => 'Eastlake 24 Syracuse'
      )
    );
  });

  $app->get('/eastlake-middlebury', function() use($app) {
    $app->render('gyms/eastlake-middlebury.php',
      array(
        'title' => 'Eastlake 24 Middlebury'
      )
    );
  });

  $app->get('/eastlake-northpointe', function() use($app) {
    $app->render('gyms/eastlake-northpointe.php',
      array(
        'title' => 'Eastlake 24 Northpointe'
      )
    );
  });

  $app->get('/eastlake-17', function() use($app) {
    $app->render('gyms/eastlake-17.php',
      array(
        'title' => 'Eastlake 24 CR 17'
      )
    );
  });

  $app->get('/eastlake-elkhart', function() use($app) {
    $app->render('gyms/eastlake-elkhart.php',
      array(
        'title' => 'Eastlake Athletic Club - Elkhart'
      )
    );
  });
});