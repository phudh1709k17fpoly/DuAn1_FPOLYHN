<?php
  class validator{
     function validator($name,$email,$username,$password,$password2){
        if (empty($name)) {
            $error['name'] = "Vui lòng nhập lại trường này";
          }else{
            $error['name'] = '';
          }
      
          ///------////
      
          if (empty($email)) {
            $error['email'] = "Vui lòng nhập lại email";
          }else{
            $error['email'] = '';
          }
      
          ///------////
      
          if (empty($username)) {
            $error['username'] = "Vui lòng nhập lại trường này";
          }else{
            $error['username'] ='';
          }
          
          ///------////
          
          if (empty($password)) {
            $error['password'] = "Vui lòng nhập lại mật khẩu";
          }else{
            $error['password'] = '';
          }
          
          ///------////
          if (empty($password2)){
            $error['password2'] = "Vui lòng nhập lại mật khẩu";
          }else{
            $error['password2'] = '';
          }
          return [ $error['name'],$error['email'],$error['username'],$error['password'],$error['password2']];
     }
     
     function encode($password){
      $hash = password_hash($password,PASSWORD_DEFAULT);
      return $hash;
    }
     function login($name,$email,$username,$password,$password2){
      if($password === $password2){
        $password_ed = encode($password);
        $sql = "INSERT INTO `user`(`name`, `username`,`password`,`email`,`password_mahoa`) VALUES
        ('$name','$username','$password_ed','$email','$password2')";
        
         return $sql;
    }
     }
  }



  if($_SERVER['REQUEST_METHOD'] == 'POST'){

            $name = $_POST['name'];

            $email = $_POST['email'];

            $username = $_POST['username'];

            $password = $_POST['password'];

            $password2 = $_POST['password2'];

            $class = new validator;

            list($error['name'],$error['email'],$error['username'],$error['password'],$error['password2'])

            = $class->validator($name,$email,$username,$password,$password2);

          if(empty($error['name']) && empty($error['email']) && empty($error['username']) && empty($error['password']) && empty($error['password2'])){

            if($password == $password2){

              $username1 =  "SELECT * FROM `user` WHERE username LIKE '$username'";
              $checkusername = pdo_query_one($username1);
  
              if(empty($checkusername)){
                $email1 = "SELECT * FROM `user` WHERE email like '$email'";
                $checkemail = pdo_query_one($email1);
                if(empty($checkemail)){
                  $sql = $class->login($name,$email,$username,$password,$password2);
                }{
                  $error['email'] = "Email đã tồn tại";
                }
              }else{
                $error['username'] = "Tên tài khoản đã tồn tại" ;
              }

            }else{
              $error['password2'] = "Mật Khẩu không giống nhau";
            }
          }
}

?>