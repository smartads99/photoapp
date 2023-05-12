<?php
   
function load_templates($name)
{
    include __DIR__."/../_templates/$name.php";
}
function pass($username,$passworld){
    if ($username == "boobesh@gmail.com" and $passworld =="1234"){
        return true;
    }
    else{
        return false;
    }
}
?>