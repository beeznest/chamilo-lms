<?php 

require_once '../../../main/inc/conf/configuration.dist.php';

// Setting connection to Chamilo database
$capsule = new Illuminate\Database\Capsule\Manager;
$capsule->addConnection(array(
    'driver'    => 'mysql',
    'host'      => $_configuration['db_host'],
    'database'  => $_configuration['main_database'],
    'username'  => $_configuration['db_user'],
    'password'  => $_configuration['db_password'],
    'charset'   => 'utf8',
    'collation' => 'utf8_unicode_ci',
    'prefix'    => $_configuration['db_prefix'],
));
// Make this Capsule instance available globally via static methods
$capsule->setAsGlobal();
// Setup the Eloquent ORM
$capsule->bootEloquent();

/* End of file database.php */
/* Location: dev/chamilo/conf/database.php */