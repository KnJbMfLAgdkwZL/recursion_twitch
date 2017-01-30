<?php
class ActiveRecord
{
	protected $host = 'localhost';
	protected $db_name = '_mymaintest';
	protected $username = 'root';
	protected $password = '';
	protected static $DBH;
	function Connect()
	{
		$check = new Check();
		if (!$check->Exists(self::$DBH))
		{
			$connection = 'mysql:host=' . $this->host . ';dbname=' . $this->db_name . ';charset=utf8';
			self::$DBH = new PDO($connection, $this->username, $this->password);
		}
	}
	static function Disconnect()
	{
		$check = new Check();
		if ($check->Exists(self::$DBH))
		{
			self::$DBH = null;
		}
	}
	function Execute($sql, $params = null)
	{
		$this->Connect();
		$stm = self::$DBH->prepare($sql);
		$stm->execute($params);
		$result = $stm->fetchAll(PDO::FETCH_ASSOC);
		return $result;
	}
}