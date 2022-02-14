<?php
    if(isset($_POST['submit'])){
    $Nemploye= new EmployesController();
    $Nemploye->addEmploye ( );
    }
    // include_once './controllers/EmplesController.php';
   
    // print_r($employes); 
?>
<div class="container">
    <div class="row my-4">
        <div class="col-md-8 mx-auto">
            
            <div class="card">
                <div class="card-header">Add employee</div>
                <div class="card-body bg-lghit">
                    <a href="<?php echo BASE_URL;?>" class="btn btn-sm btn-primary mr-2 my-2">
                        <i class="fas fa-home"></i></a>
                        <form action="" method="post">
                            <div class="form-group"></div>
                            <label for="Nom">FirstName*</label>
                            <input type="text" name="nom" class="form-control" placeholder="FirstName">

                            <div class="form-group"></div>
                            <label for="LastName">LastName*</label>
                            <input type="text" name="LastName" class="form-control" placeholder="LastName">

                            <div class="form-group"></div>
                            <label for="Email">Email*</label>
                            <input type="Email" name="Email" class="form-control" placeholder="Email">

                            <div class="form-group"></div>
                            <label for="Adderssline">Adderssline*</label>
                            <input type="text" name="AddressLine" class="form-control" placeholder="Adderssline">

                        
                            <div class="form-group"></div>
                            <label for="City">City*</label>
                            <input type="text" name="City" class="form-control" placeholder="City">
                        <div class="form-group"><br>
                            <select name="satut" id="" class="form-control">
                                <option value="1">Active</option>
                                <option value="0">Terminated</option>
                            </select>
                        </div><br>
                        <div class="form-group">
                            <button type="submit" class="btn btn-primary " name="submit">valid</button>
                        </div>
                        </form>
                </div>
            </div>
        </div>
    </div>
</div>
*
                        