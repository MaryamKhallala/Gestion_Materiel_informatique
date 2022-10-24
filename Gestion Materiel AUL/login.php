<?php 

include("connectionGestinM.php");

if(isset($_POST['Login']) && ($_POST['password']) ){
    echo $_POST['password'];
    
   $uname=$_POST['Login'];
   $password=$_POST['password'];
    

   $result=mysql_query("select * from personne where type='admin' AND Login='".$uname."'AND password='".$password."' limit 1") or die("failed to query database".mysql_error());
    
$row = mysql_fetch_array($result);
if ($row["Login"]==$uname && $row["password"]==$password) {
     echo " You Have Successfully Logged in";
        exit();
    }
    else{
        echo " You Have Entered Incorrect Password";
        exit();
}





    /*if(mysql_num_rows($result)==1){
        echo " You Have Successfully Logged in";
        exit();
    }
    else{
        echo " You Have Entered Incorrect Password";
        exit();
    }*/
        
}




?>