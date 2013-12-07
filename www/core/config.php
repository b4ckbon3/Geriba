<?php
	include('inc/class.user.php');
	
	//Instantiate the uFlex object
	$user = new user(false);
	
	//Add database credentials and information 
	$user->db['host'] = "localhost";
	$user->db['user'] = "root";
	$user->db['pass'] = "Maconha13;";
	$user->db['name'] = "projectdb"; //Database name
	
	/*
	 * Instead of editing the class.uFlex.php file directly you may make
	 * the changes in this space before running the ->start() command.
	 * For example: if want to to change the default username from "Guess"
	 * to "Stranger" you do this:
	 * 
	 * 		$user->opt["default_user"]["username"] = "Stranger";
	 * 
	 * You may change and customize all the options and configurations like
	 * this, even the error messages. By exporting your customizations outside
	 * the class file it will be easier to maintain your application configuration
	 * and update the class core itself in the future. Just remember to start
	 * the object with the first parameter 'false', new uFlex(false), to halt
	 * the object construction.
	 */
	 
	 $user->opt['table_name'] = "user";
		
	//Starts the object by triggering the constructor
	$user->start();	
	
	
	
	
	// Turn on all error reporting
	error_reporting(E_ALL);
	/*
	Default language
	*/
	$DEFAULT_LANGUAGE = 'en';
	/*
	Languages directory
	*/
	$LANGUAGE_DIR = 'core/languages';
	require_once 'inc/class.Language.php';
	
	//Instantiate the language object
	$language = new Language();
	$lang = $language->getLanguage(@$_POST['lang']);
	
	
	include('inc/functions.php');
?>
