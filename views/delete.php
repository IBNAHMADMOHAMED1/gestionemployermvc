
<?php
if (isset($_POST['id'])) {
    $exitEmploye = new EmployesController();
    $exitEmploye->deletem();
}

// include_once './controllers/EmplesController.php';
$er=$_POST['id'];
?>