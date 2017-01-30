<?php

class Chanels extends ActiveRecord
{
    function selectAll()
    {
        $sql = 'SELECT * FROM `chanels`';
        $result = $this->Execute($sql);
        return $result;
    }

    function update($name, $currentGame, $logo, $streamTitle, $status)
    {
        $sql = 'UPDATE `chanels` SET `currentGame` = :currentGame, `logo` = :logo, `streamTitle` = :streamTitle, `status` = :status WHERE `name` = :name';
        $data = [
            'name' => $name,
            'currentGame' => $currentGame,
            'logo' => $logo,
            'streamTitle' => $streamTitle,
            'status' => $status
        ];
        $result = $this->Execute($sql, $data);
    }

    function updateStatus($name, $status)
    {
        $sql = 'UPDATE `chanels` SET `status` = :status WHERE `name` = :name';
        $result = $this->Execute($sql, ['name' => $name, 'status' => $status]);
    }
}