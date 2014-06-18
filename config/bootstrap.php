<?php


# Setup Applictation Directory Structure
define("APP_DOC_ROOT", "/framework");
define("APP_DIR_ROOT", dirname ( dirname ( __FILE__ ) ) );

# These should be fine as is
define("APP_MODEL",      APP_DIR_ROOT . "/model");
define("APP_CONTROLLER", APP_DIR_ROOT . "/controller");
define("APP_VIEW",       APP_DIR_ROOT . '/view');
define("APP_JSCRIPT",    APP_DOC_ROOT . "/js");
define("APP_IMG",        APP_DOC_ROOT . "/img");

# Load PHP Models
include(APP_MODEL . "/classDBLibrary.php");
include(APP_MODEL . "/classInsertLibrary.php");
include(APP_MODEL . "/classQueryLibrary.php");