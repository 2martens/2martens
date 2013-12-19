<?php
// index file for personal website
namespace martens;

/**
 * Handles the index page.
 */
class Index
{
	private $languageCode;

	public function __construct()
	{
		$this->languageCode = $this->getLanguageCode();
	}

	public function show()
	{
		include('variables.'.$this->languageCode.'.php');
		include('index.html.php');
	}

	private function getLanguageCode()
	{
		$lang = substr($_SERVER['HTTP_ACCEPT_LANGUAGE'], 0, 2);
		if (isset($_REQUEST['l'])) {
			$lang = trim($_REQUEST['l']);
		}
		if ($lang == 'de') {
			return 'de';
		}
		else {
			return 'en';
		}
	}
}

$index = new \martens\Index();
$index->show();