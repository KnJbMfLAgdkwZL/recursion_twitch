<?php
class Controller
{
	public function render($file, $var = [])
	{
		$clasname = get_class($this);
		$clasname = str_replace(__CLASS__, "", $clasname);
		$clasname = mb_strtolower($clasname);
		ob_start();
		extract($var);
		include_once($clasname . '/' . "{$file}.php");
		$content = ob_get_contents();
		ob_end_clean();
		include_once('layouts/main.php');
		ActiveRecord::Disconnect();
	}
}