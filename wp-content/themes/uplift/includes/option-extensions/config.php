<?php

// INCLUDE THIS BEFORE you load your ReduxFramework object config file.


// You may replace $redux_opt_name with a string if you wish. If you do so, change loader.php
// as well as all the instances below.
$redux_opt_name = "sf_uplift_options";


// No real configuration is needed for live search. Simply run the loader with your opt_name set.


// The loader will load all of the extensions automatically based on your $redux_opt_name
require_once( get_template_directory() .'/includes/option-extensions/loader.php');