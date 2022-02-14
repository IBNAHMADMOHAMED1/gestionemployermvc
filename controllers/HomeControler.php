<?php


class HomeContrller
{
    public function index($page)
    {
        include('Views/'.$page.'.php');
        
    }
}



?>