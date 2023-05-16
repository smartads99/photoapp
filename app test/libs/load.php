<?php
include_once 'include/Database.class.php';
include_once 'include/User.class.php';
function load_templates($name)
{
    include __DIR__."/../_templates/$name.php";
}
///function pass($username,$passworld){
///    if ($username == "boobesh@gmail.com" and $passworld =="1234"){
///        return true;
///    }
///    else{
///        return false;
///    }///
///}

function signup($s_username, $s_password, $email, $phone)
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

    $conn->close();
    return $error;
}
    
?>