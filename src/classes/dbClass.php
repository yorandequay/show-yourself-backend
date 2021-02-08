<?php
/**
 * Created by PhpStorm.
 * User: yoran
 * Date: 8-2-2021
 * Time: 10:51
 */

class dbClass
{
    public function connect()
    {
        $dns = 'mysql:host=127.0.0.1;dbname=interns';
        $user = 'root';
        $pass = '';

        return new PDO($dns, $user, $pass);
    }
}