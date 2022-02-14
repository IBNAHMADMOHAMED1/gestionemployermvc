<?php 



class  AdminController
{

    public function auth(){

        if(isset($_POST['login'])){
            $dt['email']=$_POST['email'];
             $res = Admin::login($dt);
             if ($res->email === $_POST['email'] && password_verify($_POST['password'],$res->password))
             {
                $_SESSION['logged']=true;
                $_SESSION['email']=$res->email;
                Redirect::to('home');
             }
             }else{
                 echo 'errr';
             }
         }
        
    
  
    public function register()
    {  
            if(isset($_POST['singup']))
         {
            
                $options=['cost' =>12 ];
                $password = password_hash($_POST['password'],PASSWORD_BCRYPT,$options);
                $dt = array(
                    
                    'Username' => $_POST['Username'],
                    'email' => $_POST['email'],
                    
                    'password' => $password,
                    
                );
                $result = Admin::Creat($dt);
                if($result === 'ok'){
                    Session::set('Success','compte cree');
                    Redirect::to('login');

                }else{
                    echo $result;
                }
           }
        
          
        }
        
}

?>