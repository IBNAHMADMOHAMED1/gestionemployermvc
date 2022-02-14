<?php 

class Admin{


    static public function login($dt)
    {
        $id=$dt['email'];

        $stmt=DB::Connect()->prepare('SELECT FROM `admin` WHERE email=:$id');
        $stmt->execute(array(':email' => $id));
        if($stmt->execute())
        {
            return 'ok';
           
        }else{
            echo 'erroe HHHHHHHH';
        }
        
         
    }

    static public function creat($dt)
    {
        $stmt=DB::Connect()->prepare('INSERT INTO `admin`(name,email,password) VALUES (:Username,:email,:password)');
            $stmt->bindParam(':Username', $dt['Username']); // utilise bindParam pour lier la variable
            $stmt->bindParam(':email', $dt['email']);
            $stmt->bindParam(':password', $dt['password']);
           

            if($stmt->execute())
            {
                return 'ok';

            }else{
                return 'erroe HHHHHHHH';
            }
    }
}


?>