<?php
class Application
{
	function run()
	{
		$check = new Check();
		$arr = $this->GetRequest();
		if ($check->Exists($arr))
		{
			$Controller = '';
			$Action = '';
			if ($check->Exists($arr['Controller']))
			{
				$Controller = $arr['Controller'];
			}
			if ($check->Exists($arr['Action']))
			{
				$Action = $arr['Action'];
			}
			$Controller = $this->FindController($Controller);
			if ($check->Exists($Controller))
			{
				$found = $this->FindAction($Controller, $Action);
				if ($check->Exists($found))
				{
					$run = "
						\$controller = new {$Controller}();
						if (in_array('{$Action}', \$controller->allowed))
						{
							\$controller->{$Action}();
						}
					";
					eval($run);
					return;
				}
			}
		}
		$controller = new SiteController();
		$controller->index();
	}
	function GetRequest()
	{
		$check = new Check();
		if ($check->Exists($_GET))
		{
			$get = $check->SecureVar($_GET);
			if ($check->Exists($get['r']))
			{
				$r = $get['r'];
				$r = mb_split('/', $r);
				if ($check->Exists($r[0]))
				{
					if ($check->Exists($r[1]))
					{
						return ['Controller' => $r[0], 'Action' => $r[1]];
					}
				}
			}
		}
		return false;
	}
	function FindController($controller)
	{
		$controller = ucfirst($controller);
		$controller .= 'Controller';
		if ($this->FindFile('./controllers', "{$controller}.php"))
		{
			if (class_exists($controller))
			{
				return $controller;
			}
		}
		return false;
	}
	function FindAction($controller, $action)
	{
		return method_exists($controller, $action);
	}
	function FindFile($path, $name)
	{
		$name = mb_strtolower($name);
		$mass = scandir($path);
		foreach ($mass as $v)
		{
			$v = mb_strtolower($v);
			if ($v == $name)
			{
				return true;
			}
		}
		return false;
	}
}