<?php

Abstract Class baseController {

/*
 * @registry object
 */
protected $registry;
	protected $session;
public function __construct($registry) {
	$this->registry = $registry;
	$this->session = $registry->session;
}

/**
 * @all controllers must contain an index method
 */
public abstract function index();
}

?>
