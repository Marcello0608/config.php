<?php  // Moodle configuration file

// where there is a comment on the freight and I need to edit it for your data

unset($CFG);
global $CFG;
$CFG = new stdClass();

// Example config.php — replace with your real database info

$CFG->dbtype    = 'mariadb';
$CFG->dblibrary = 'native';
$CFG->dbhost    = 'sqlXXX.infinityfree.com';  // hostname 
$CFG->dbname    = 'your_database_name'; // name BD
$CFG->dbuser    = 'your_username'; // user BD
$CFG->dbpass    = 'your_password'; // password BD (password used to create an account on infityfree)
$CFG->prefix    = 'mdl_';
$CFG->dboptions = array (
  'dbpersist' => 0,
  'dbport' => '',
  'dbsocket' => '',
  'dbcollation' => 'utf8mb4_unicode_ci',
);

$CFG->wwwroot   = 'https://yourdomain'; // wwwroot (domain you chose)
$CFG->dataroot  = '/home/vol17_1/infinityfree.com/yourBDuser/htdocs/moodledata'; // your moodledata location
$CFG->admin     = 'admin';

$CFG->directorypermissions = 0777;

// Force to continue even if dataroot is insecure - don´t edit
@error_reporting(E_ALL | E_STRICT);
@ini_set('display_errors', '1');
$CFG->debug = (E_ALL | E_STRICT);
$CFG->debugdisplay = 1;

require_once(__DIR__ . '/lib/setup.php');
