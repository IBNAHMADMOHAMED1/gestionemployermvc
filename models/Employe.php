<?php

    class Employe
    {
        static public function getAll()
        {
            $stmt=DB::Connect()->prepare('SELECT * FROM employee');
            $stmt->execute();
            return $stmt->fetchAll();
            // $stmt->close();
            $stmt=null;
        }
        static public function add($dt)
        {
            // $dt['firstNa'];
            $stmt=DB::Connect()->prepare('INSERT INTO employee(FirstName,LastName, Email, AddressLine, City, STATUS) VALUES (:FirstName,:LastName,:Email,:AddressLine,:City,:satut)');
            $stmt->bindParam(':FirstName', $dt['FirstName']); // utilise bindParam pour lier la variable
            $stmt->bindParam(':LastName', $dt['LastName']);
            $stmt->bindParam(':Email', $dt['Email']);
            $stmt->bindParam(':AddressLine', $dt['AddressLine']);
            $stmt->bindParam(':City', $dt['City']);
            $stmt->bindParam(':satut', $dt['STATUS']);

            if($stmt->execute())
            {
                return 'ok';
            }else{
                return 'erroe HHHHHHHH';
            }
            // $stmt->close();
		    
           
        }
 
        public static function get($dt)
        {
            $id=$dt['EmployeeID'];
            
                $res = 'SELECT * FROM employee WHERE EmployeeID=:EmployeeID';
                $stmt = DB:: Connect()->prepare($res);
                $stmt->execute(array(":EmployeeID" => $id));
                $employe = $stmt->fetch(PDO::FETCH_OBJ);
                return $employe;
           

        }
        static public function update($dt)
        {
            // $dt['firstNa'];
            $stmt=DB::Connect()->prepare('UPDATE  employee SET 
            FirstName = :FirstName,LastName = :LastName, Email = :Email, AddressLine = :AddressLine, City = :City, STATUS = :satut WHERE EmployeeID=:EmployeeID');
            $stmt->bindParam(':EmployeeID', $dt['EmployeeID']);
            $stmt->bindParam(':FirstName', $dt['FirstName']); // utilise bindParam pour lier la variable
            $stmt->bindParam(':LastName', $dt['LastName']);
            $stmt->bindParam(':Email', $dt['Email']);
            $stmt->bindParam(':AddressLine', $dt['AddressLine']);
            $stmt->bindParam(':City', $dt['City']);
            $stmt->bindParam(':satut', $dt['STATUS']);
            if($stmt->execute())
            {
                return 'ok';
            }else{
                return 'erroe HHHHHHHH';
            }
            
		    
           
        }
        static public function delete($dt)
        {
            $id=$dt['EmployeeID'];

            $stmt=DB::Connect()->prepare('DELETE  FROM employee WHERE EmployeeID=:EmployeeID');
            $stmt->execute(array(':EmployeeID' => $id));
            if($stmt->execute())
            {
                return 'ok';
               
            }else{
                echo 'erroe HHHHHHHH';
            }
            
        }
    static public function searchEmployee($data)
    {
       
        $search=$data['search'];
        // die(print_r($data));

            $stmt=DB::Connect()->prepare('SELECT * FROM employee WHERE FirstName LIKE ?');
            $stmt->execute(array('%'.$search.'%'));
            return $stmt->fetchAll();
            // return $employes;
           
            // if($stmt->execute())
            // {
            //     return 'ok';
               
            // }else{
            //     echo 'erroe HHHHHHHH';
            // }
         
    }

    }
?>