<?php
    class DB
    {
        static public function Connect()
        {
            $db=new PDO('mysql:dbname=employes;host=localhost','root','');
            $db->exec("set names utf8");
            $db->setAttribute(PDO::ATTR_ERRMODE,PDO::ERRMODE_WARNING);
            return $db;
        }
    }
?>