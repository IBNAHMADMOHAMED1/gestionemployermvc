<?php


class HomeContrller
{
    public function index($page)
    {
        include('./views/'.$page.'.php');
        
    }
}



?>