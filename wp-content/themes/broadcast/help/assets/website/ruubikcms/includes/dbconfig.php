<?php
// error reporting, exclude notices
error_reporting(E_ALL ^ E_NOTICE);

// ruubikcms base folder
define("RUUBIKCMS_FOLDER", "ruubikcms");

// database settings
define("PDO_DB_FOLDER", "sqlite");
define("PDO_DB_DRIVER", "sqlite");
define("PDO_DB_NAME", "ruubikcms.sqlite");

// general settings
define("VERNUM", "1.1.0 Beta");

// which cms main menu tabs are visible for administrator (TRUE/FALSE)
define("SHOW_SITESETUP", TRUE);
define("SHOW_NEWS", TRUE);
define("SHOW_SNIPPETS", TRUE);
define("SHOW_USERS", TRUE);
define("SHOW_EXTRANET", TRUE);
define("SHOW_EXTRAUSERS", FALSE);
define("SHOW_CMSOPTIONS", TRUE);

// set default timezone (requires >= 5.1.0)
@date_default_timezone_set(@date_default_timezone_get());

// multiple installations for different languages
define("SHOW_MULTILANG", FALSE);
$multilang_links = array('en' => 'English', 'fi' => 'Finnish', 'sv' => 'Swedish');

?>