<?php

class Settings extends ActiveRecord
{
    function getData($name)
    {
        $sql = "SELECT * FROM `settings` WHERE `name` = :name";
        $result = $this->Execute($sql, [':name' => $name]);
        return $result;
    }

    function setData($name, $val)
    {
        $sql = "UPDATE `settings` SET `val` = :val WHERE `name` = :name";
        $result = $this->Execute($sql, [':val' => $val, ':name' => $name]);
        return $result;
    }
}