<?php  // Moodle configuration file

unset($CFG);
global $CFG;
$CFG = new stdClass();

/*

// unistra

$CFG->dbtype    = 'mysqli';
$CFG->dblibrary = 'native';
$CFG->dbhost    = 'flashculture.mysql.db';
$CFG->dbname    = 'flashculture';
$CFG->dbuser    = 'flashculture';
$CFG->dbpass    = 'emriHy22o';
$CFG->prefix    = 'mdl_';
$CFG->dboptions = array (
  'dbpersist' => 0,
  'dbport' => '',
  'dbsocket' => '',
  'dbcollation' => 'utf8mb4_0900_ai_ci',
  
*/

// local 
$CFG->dbtype    = 'mysqli';
$CFG->dblibrary = 'native';
$CFG->dbhost    = 'localhost';
$CFG->dbname    = 'flashculture';
$CFG->dbuser    = 'admin';
$CFG->dbpass    = 'emriHy22%';
$CFG->prefix    = 'mdl_';
$CFG->dboptions = array (
  'dbpersist' => 0,
  'dbport' => '',
  'dbsocket' => '',
  'dbcollation' => 'utf8mb4_0900_ai_ci',
);

/*

// unistra

$CFG->wwwroot   = 'https://bia-facile.fr';
$CFG->dataroot  = '/home/flashcul/moodledata';
$CFG->admin     = 'admin';

*/

// local

$CFG->wwwroot   = 'http://127.0.0.1/BIA/bia-caea';
$CFG->dataroot  = '/var/www/html/BIA/moodledata';
$CFG->admin     = 'admin';

// $CFG->theme = 'boost';

$CFG->directorypermissions = 0777;

require_once(__DIR__ . '/lib/setup.php');

// There is no php closing tag in this file,
// it is intentional because it prevents trailing whitespace problems!
