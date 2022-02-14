<?php
    // include_once './controllers/EmplesController.php';
    // $data=new EmployesController();
    // $employes=$data->getAllEmployes();
    // print_r($employes); 
    if(isset($_POST['find']))
    {
        $data=new EmployesController();
        $employes=$data->search();
        // die(print_r($employes));
    }else{
    $data=new EmployesController();
    $employes=$data->getAllEmployes();
    // die(print_r($employes));
    }
?>
<div class="container">
    <div class="row my-4">
        <div class="col-md-10 mx-auto">
            <?php include('./views/includes/alerts.php'); ?>
            <div class="card">
                <div class="card-body bg-lghit">
                    <a href="<?php echo BASE_URL;?>add" class="btn btn-sm btn-primary mr-2 my-2">
                        <i class="fas fa-plus"></i></a>
                        <a href="<?php echo BASE_URL;?>" class="btn btn-sm btn-primary mr-2 my-2">
                        <i class="fas fa-home"></i></a>
                        <form method="post"action="" class="float-right mb-2 d-flex flex-row">
                            <input type="text" name="search" placeholder="search"class="form-control">
                            <button class="btn btn-info btn-sm" name="find" type="submit"><i class="fas fa-search"></i></button>
                        </form>
                    <table class="table table-hover">
                        <thead>
                            <tr>
                                <th scope="col">Id</th>
                                <th scope="col">FirstName</th>
                                <th scope="col">LastName</th>
                                <th scope="col">Email</th>
                                <th scope="col">Adderssline</th>
                                <th scope="col">City</th>
                                <th scope="col">satatu</th>

                            </tr>
                        </thead>
                        <tbody>
                            <?php foreach($employes as $employe):?>
                            <tr>
                                <th scope="row"> <?=$employe['EmployeeID']; ?></th>
                                <td><?=$employe['FirstName']; ?></td>
                                <td><?=$employe['LastName']; ?></td>
                                <td><?=$employe['Email']; ?></td>
                                <td><?=$employe['AddressLine']?></td>
                                <td><?=$employe['City']; ?></td>
                                <td>
                                    <?php echo $employe['STATUS']
                                                    ?
                                                    '<span class="badge text-success bg-red">Active</span>':
                                                    '<span class="badge text-danger">Resilk<span>';
                                        ?>
                                </td>
                                <td>
                                    <form action="update" method="POST" class="mr-1">
                                        <input type="hidden" name="id" value="<?php echo $employe['EmployeeID']?>">
                                        <button class="btn btn-sm btn btn-warning"><i class="fa fa-edit"></i></button>
                                    </form>
                                </td>
                                <td>
                                    <form action="delete" method="POST" class="mr-1">
                                        <input type="hidden" name="id" value="<?php echo $employe['EmployeeID']?>">
                                        <button class="btn btn-sm btn btn-danger"><i class="fa fa-trash"></i></button>
                                    </form>
                                </td>
                            </tr>
                            <?php endforeach; ?>

                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
</div>