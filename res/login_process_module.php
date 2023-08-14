<?php

// ----- Login form processing [Start]
if(isset($_POST['loginBtn'])){
    if(empty($_POST['username'])){
        header('Location:login.php?username=Please+enter+your+username');
    }else if(empty($_POST['password'])){
        header('Location:login.php?password=Please+enter+your+password');
    }else{

    }
}else{
    header('Location:login.php?msg=Please+Login+First');
}

?>