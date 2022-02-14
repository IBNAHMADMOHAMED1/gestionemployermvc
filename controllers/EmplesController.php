<?php

       //  require_once '../models/Employe.php';

    // class EmployesController 
    // {
    //     public function getAllEmployes()
    //     {
    //         $employes =Employe::getAll();
    //         require_once './views/home.php'; 
    //     }
    // }

    class EmployesController
    {

        public function getAllEmployes(){
            $employes = Employe::getAll();
            return $employes;
        }
        public function addEmploye()
        {
                if(isset($_POST['submit']))
                {
                    $dt = array(
                        'EmployeeID'=>$_POST['id'],
                        'FirstName' => $_POST['nom'],
                        'LastName' => $_POST['LastName'],
                        'Email' => $_POST['Email'],
                        'AddressLine' => $_POST['AddressLine'],
                        'City' => $_POST['City'],
                        'satut' => $_POST['satut']

                    );
                    $result = Employe::add($dt);
                    if($result === 'ok'){
                        Session::set('Success','Employee add');
                        Redirect::to('home');
    
                    }else{
                        echo $result;
                    }
                
                  
                }
        }

        public function getEm()
        {
            if(isset($_POST['id']))
            {
                $dt = array(
                    'EmployeeID' => $_POST['id']
                );
            }

            $employe = Employe::get($dt);
            return $employe;
        }

        public function apdateEmploye()
        {
                if(isset($_POST['submit']))
                {
                    $dt = array(
                        'EmployeeID' => $_POST['id'],
                        'FirstName' => $_POST['nom'],
                        'LastName' => $_POST['LastName'],
                        'Email' => $_POST['Email'],
                        'AddressLine' => $_POST['AddressLine'],
                        'City' => $_POST['City'],
                        'STATUS' => $_POST['satut']

                    );
                    
                    // die(print_r($dt));
                    $result = Employe::update($dt);
                    if($result === 'ok'){
                        Session::set('Success','Employee edit');
                        Redirect::to('home');
    
                    }else{
                        echo $result;
                    }
                
                  
                }
        }
        public function deletem()

        {
            if(isset($_POST['id'])){
               $dt['EmployeeID']=$_POST['id'];
                $result = Employe::delete($dt);
                if($result === 'ok'){
                    Session::set('Success','Employee deletes');
                    Redirect::to('home');

                }else{
                    echo $result;
                }
            }
            
            
        }

        public function search()
        {
            if(isset($_POST['search'])){

                $data=array('search' => $_POST['search']);
            }
            $employes = Employe::searchEmployee($data);
            return $employes;
        }
    }
  

?>