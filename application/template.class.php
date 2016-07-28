<?php

Class Template {

/*
 * @the registry
 * @access private
 */
private $registry;
	private $session;
/*
 * @Variables array
 * @access private
 */
private $vars = array();

/**
 *
 * @constructor
 *
 * @access public
 *
 * @return void
 *
 */
public function __construct($registry) {

	$this->registry = $registry;
	$this->session = $registry->session;

}


 /**
 *
 * @set undefined vars
 *
 * @param string $index
 *
 * @param mixed $value
 *
 * @return void
 *
 */
 public function __set($index, $value)
 {
        $this->vars[$index] = $value;
 }


public function show($name) {
	$path = __SITE_PATH . '/views' . '/' . $name . '.php';

	if (file_exists($path) == false)
	{
		throw new Exception('Template not found in '. $path);
		return false;
	}

	// Load variables
	foreach ($this->vars as $key => $value)
	{
		$$key = $value;
	}
	include __SITE_PATH . '/views/header.php';
	include __SITE_PATH . '/application/navigation.php';
	include ($path);
}


}

?>
