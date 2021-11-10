<?php

    $em="abir@2";
    $p="12";

    $email=$_POST['email'];
    $pass=$_POST['pass'];

    // setcookie("email",$email,time()+(86400 * 60),'/');
    // setcookie("pass",$pass,time()+(86400 * 60),'/');

    // echo("VALUE FROM POST :<br>");
    // echo("EMAIL :".$email);
    // echo("<br>Password :".$pass);

    // echo("<br><br>VALUE FROM Cookie :<br>");
    // echo("EMAIL :".$_COOKIE['email']);
    // echo("Password :".$_COOKIE['pass']);

    if(isset($_POST['rem']))
    {
        setcookie("email",$email,time()+(86400 * 30),'/');
        setcookie("pass",$pass,time()+(86400 * 30),'/');

    }
    else{
  
        setcookie("email",'',time() - (86400 * 30),'/');
        setcookie("pass",'',time() - (86400 * 30),'/');
    }

    if(isset($_POST["btn"]))
    {
        if($em==$email && $p==$pass)
        {
            echo("login successful");
        }
        else{
            echo("login Un-successful");
        }
    }

?>