<?php
    require_once './views/includes/header.php';
    require_once './autoload.php';
    require_once './controllers/HomeControler.php';
    require_once './controllers/EmplesController.php';

    // spl_autoload_register(function($name){
    //     if (file_exists('./controllers/'.$name.'.php')) {
    //         require_once './controllers/'.$name.'.php';
    //     }else echo 'file not!';
    // });

    $home = new HomeContrller();
    $data=new EmployesController();
    $data->getAllEmployes();

    // $home->index($_GET['page']);
    $pages=['home','add','update','delete'];

if(isset($_SESSION['logged']) && $_SESSION['logged'] === true)
{



    if(isset($_GET['page']))
    {
        if(in_array(($_GET['page']),$pages))
        {
            $page=$_GET['page'];
            $home->index($page);
        }
        else
        {
            include('./views/includes/404.php');
        }
    }
    else
    {
        $home->index('home');
    }


    require_once './views/includes/footer.php';

}else{
    $home->index('login');
}
?>