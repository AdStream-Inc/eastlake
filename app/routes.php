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

$app->get('/contact', function() use($app) {
  $app->render('contact.php',
    array(
      'title' => 'Contact',
    )
  );
});

$app->post('/contact', function() use ($app) {
  date_default_timezone_set('America/Indiana/Indianapolis');

  $view = $app->view();

  $transport = Swift_SmtpTransport::newInstance('smtp.mandrillapp.com', 587)
    ->setUsername('john@stratashops.com')
    ->setPassword('JW5kUt8BRBPZoz4yjxgsTA');

  $mailer = Swift_Mailer::newInstance($transport);

  $html = $view->render('emails/contact-form.php',
    array(
      'title' => 'Contact',
      'name' => $_POST['name'],
      'email' => $_POST['email'],
      'phone' => $_POST['phone'],
      'message' => $_POST['message'],
      'interest' => $_POST['interest']
    )
  );

  $message = Swift_Message::newInstance();
  $message
    ->setSubject($_POST['name'] . ' - Eastlake Contact Form')
    ->setFrom($_POST['email'])
    ->setTo('brandon@adstreaminc.com')
    ->setBody($html, 'text/html');

  $mailer->send($message);

  $app->redirect('thanks');

});

$app->get('/thanks', function() use($app) {
  $app->render('thanks.php',
    array(
      'title' => 'Thanks',
    )
  );
});

$app->get('/test', function() use ($app) {
  $app->render('emails/contact-form.php',
    array(
      'title' => 'Contact'
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

  $app->get('/eastlake-nappanee', function() use($app, $locations) {
    $location = $locations['eastlake-nappanee'];
    $app->render('gyms/eastlake-nappanee.php',
      array(
        'title' => 'Eastlake 24 Nappanee',
        'location' => $location
      )
    );
  });

  $app->get('/eastlake-syracuse', function() use($app, $locations) {
    $location = $locations['eastlake-syracuse'];
    $app->render('gyms/eastlake-syracuse.php',
      array(
        'title' => 'Eastlake 24 Syracuse',
        'location' => $location
      )
    );
  });

  $app->get('/eastlake-middlebury', function() use($app, $locations) {
    $location = $locations['eastlake-middlebury'];
    $app->render('gyms/eastlake-middlebury.php',
      array(
        'title' => 'Eastlake 24 Middlebury',
        'location' => $location
      )
    );
  });

  $app->get('/eastlake-northpointe', function() use($app, $locations) {
    $location = $locations['eastlake-northpointe'];
    $app->render('gyms/eastlake-northpointe.php',
      array(
        'title' => 'Eastlake 24 Northpointe',
        'location' => $location
      )
    );
  });

  $app->get('/eastlake-17', function() use($app, $locations) {
    $location = $locations['eastlake-17'];
    $app->render('gyms/eastlake-17.php',
      array(
        'title' => 'Eastlake 24 CR 17',
        'location' => $location
      )
    );
  });

  $app->get('/eastlake-elkhart', function() use($app, $locations) {
    $location = $locations['eastlake-elkhart'];
    $app->render('gyms/eastlake-elkhart.php',
      array(
        'title' => 'Eastlake Athletic Club - Elkhart',
        'location' => $location
      )
    );
  });
});