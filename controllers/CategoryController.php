<?php
class Category extends BaseController {


public function index()
	{

	$this->ReturnView('index', true);


	}

public function create()
	{

	$this->ReturnView('create', true);

	}

public function store()
	{

	$this->ReturnView('index', true);

	}


public function delete()
	{

	$this->ReturnView('index', true);

	}
}
?>