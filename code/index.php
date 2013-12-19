<?php
// index file for personal website
namespace martens;

/**
 * Handles the index page.
 */
class Index
{
	private $languageID;

	public function __construct()
	{
		$this->languageID = 0;
	}

	public function show()
	{
		include('variables.'.$this->languageID.'.php');
		include('index.html.php');
	}
}

$index = new \martens\Index();
$index->show();