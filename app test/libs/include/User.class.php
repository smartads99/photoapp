<?php
class User
{
   public static function signup($s_username, $s_password, $email, $phone)
   {
       $conn =Database::getConnection();
       $sql = "INSERT INTO `auth` (`username`, `password`, `email`, `phone`, `blocked`, `active`)
   VALUES ('$s_username','$s_password', '$email','$phone', '0', '1');";
       $error=false;
       if ($conn->query($sql) === true) {
           $error=false;
       } else {
           //echo "Error: " . $sql . "<br>" . $conn->error;
           $error=$conn->error;
       }
   
      // $conn->close();
       return $error;
   }
}