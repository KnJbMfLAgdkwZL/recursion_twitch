<?php
class Check
{
	public function Exists(&$var)
	{
		if (isset($var))
		{
			if (!empty($var))
			{
				return true;
			}
		}
		return false;
	}
	public function SecureVar($var)
	{
		if (is_array($var))
		{
			foreach ($var as $k => &$v)
			{
				$v = strip_tags($v);
				$v = htmlspecialchars($v, ENT_QUOTES);
				$v = stripslashes($v);
				$v = trim($v);
			}
		}
		else
		{
			$v = &$var;
			$v = strip_tags($v);
			$v = htmlspecialchars($v, ENT_QUOTES);
			$v = stripslashes($v);
			$v = trim($v);
		}
		return $var;
	}
}