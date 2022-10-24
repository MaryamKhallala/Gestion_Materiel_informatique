<!DOCTYPE html>
<?php    
ob_start();
?>
<html lang="en">
<head>
    <!-- Required Meta Tags -->
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">

    <!-- Page Title -->
    <title>Connexion</title>

    <!-- Favicon -->
    <link rel="shortcut icon" href="assets/images/LOGO-2018 noir.jpg" type="image/x-icon">

    <!-- CSS Files -->
    <link rel="stylesheet" href="assets/css/animate-3.7.0.css">
    <link rel="stylesheet" href="assets/css/font-awesome-4.7.0.min.css">
    <link rel="stylesheet" href="assets/css/bootstrap-4.1.3.min.css">
    <link rel="stylesheet" href="assets/css/owl-carousel.min.css">
    <link rel="stylesheet" href="assets/css/jquery.datetimepicker.min.css">
    <link rel="stylesheet" href="assets/css/linearicons.css">
    <link rel="stylesheet" href="assets/css/style.css">
</head>
<body>
    <!-- Preloader Starts -->
    <div class="preloader">
        <div class="spinner"></div>
    </div>
    <!-- Preloader End -->

    <!-- Header Area Starts -->
    <header class="header-area">
       <!-- <div class="header-top">-->
        <div id="logo">
                    
                </div>
            <!--<div class="container">
                <div class="row">
                    <div class="col-lg-9 d-md-flex">
                        <h6 class="mr-3"><span class="mr-2"><i class="fa fa-mobile"></i></span> call us now! +1 305 708 2563</h6>
                        <h6 class="mr-3"><span class="mr-2"><i class="fa fa-envelope-o"></i></span> medical@example.com</h6>
                        <h6><span class="mr-2"><i class="fa fa-map-marker"></i></span> Find our Location</h6>
                    </div>
                    <div class="col-lg-3">
                        <div class="social-links">
                            <ul>
                                <li><a href="#"><i class="fa fa-facebook"></i></a></li>
                                <li><a href="#"><i class="fa fa-linkedin"></i></a></li>
                                <li><a href="#"><i class="fa fa-twitter"></i></a></li>
                                <li><a href="#"><i class="fa fa-instagram"></i></a></li>
                                <li><a href="#"><i class="fa fa-vimeo"></i></a></li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </div>-->
        <div id="header" id="home">
            <div class="container">
                 <style type="text/css">


          .nav-menu {
 
  margin-bottom: 2;
  background:#07243A ;
  border: none;
  border-radius: 0.5;
}

.nav-menu li a {
  font-family: "Source Sans Pro", sans-serif;
  font-size: 17px;
   font-weight: bold;
  color: #070708 ;
  text-transform: uppercase;
  padding: 5px 5px;
  font-style: italic; 
}

.nav-menu li a:hover {
   background: transparent;
   color:#010410   ;
   font-weight: bold;
   font-size: 22px ;
   text-decoration: underline;
}
.banner-area{padding:284px 0 144px ;background-color:#b0b0b0;background-image:url("assets/images/depannage-informatique-slide0.jpg");background-repeat:no-repeat;background-position:center;background-size:cover;position:relative}



        </style>
                <div class="row align-items-center justify-content-between d-flex">
                 <div id="logo">
                    <a href="index.html"><img src="assets/images/LOGO-2018 noir1.png" width="200" height="75"   alt="" title="" /></a>
                </div>
                <nav id="nav-menu-container">
                     <ul class="nav-menu">
                        <li class="menu-active"><a href="index.html"> <i class="fa fa-home" aria-hidden="true"></i> Accueil</a></li>
                        <li><a href="A Propos.html"><i class="fa fa-question-circle-o" aria-hidden="true"></i> A Propos</a></li>
                        

                          <li class="menu-active"><a href="Connexion.php"> <i class="fa fa-sign-in" aria-hidden="true"></i> Admin</a>
                           
                        </li>
                         <li class="menu-active"><a href="ConnexionUtilisateur.php"> <i class="fa fa-sign-in" aria-hidden="true"></i> Agent</a>
                           
                        </li>

                    </ul>
                </nav><!-- #nav-menu-container -->		    		
                </div>
            </div>
        </div>
    </header>
    <!-- Header Area End -->
     
    <!-- Banner Area Starts -->
    <section class="banner-area">
        <div class="container">
            <div class="row">
                <div class="col-lg-5">
                   
                    <h1><strong>Parc Info</strong></h1>
                 <h2> " Vous aide à gérer votre materiels "</h2>
                    <style type="text/css">
                        h1{
                            font-family: italic;
                            margin-top: 190px;
                            margin-right: 0;
                            color:white ;
                        
}
                        h2{
                            font-family: italic;
                            color:black ;
                            line-height: 1em;
                            

}



                        
                    </style>
                </div>
            </div>
        </div>
    </section>
    <!-- Banner Area End -->
     
      <div class="box">
        <center><img src="assets/images/LOGO-2018 bleu.png"></center>
                <h2><strong>Authentification Agent</strong></h2>
               <form method="POST" action="">
                 <div class="inputBox">
                <input  type="texte" name="Login" required=""><label><strong>Login</strong></label></div>
               <div class="inputBox">
                <input  type="password" name="password" required=""> <label><strong>Mot de passe</strong></label></div>
               <center><input type="submit"  name="connexion" value="connexion" ></input></center>
         </form>       
        </div>
<style type="text/css">
    body {

        margin: 50;
        padding: 50;
        font-family: sans-serif;
        /*background: url(assets/images/login1.jpg);
        background-size:cover; */
    }
    .box{
        border-radius: 50px;
        position: absolute;
        top: 55%;
        left:50%;
        transform: translate(-50%,-50%);
        width: 400px;
        padding: 30px;
        background:rgba(255,255,255,.7);
        box-sizing: border-box;
        box-shadow: 0 15px 25px rgba(0,0,0,.5);
    }
    .box img {
        border-radius: 20px;
        width: 250px ;
        height: 100px ;
        margin-top: -10px ;
        margin-right: -10px ;
        text-align: left;
        
    }
    .box h2{
        margin: 0 0 30px;
        padding: 0;
        color: black;
        text-align: center;

    }
    .box .inputBox{
        position: relative;
    }
    .box .inputBox input {
         width: 100%;
          padding: 10px 0;
         font-size: 16px;
         color: black;
         margin-bottom: 30px;
         border: none;
         border-bottom: 1px solid black;
         outline: none;
         background:transparent;
        
    } 
    .box .inputBox label{
        position: absolute;
        top: 0;
        left:0;
        padding: 10px 0;
        font-size: 16px;
        color: black;
        pointer-events: none;
        transition: .5s
    }
    .box .inputBox input:valid ~ label,
    .box .inputBox input:focus ~ label {
        top: -18px;
        left: 0;
        color: blue;
        font-size: 12px;
    }
    .box input[type="submit"]{
        color: #fff;
        border: none;
        outline: none;
        background:transparent;  
        background:  #03a9f4;
        cursor: pointer;
        border-radius: 5px;
        padding:10px 20px;
        
    }

</style>
   

    <!-- Javascript -->
    <script src="assets/js/vendor/jquery-2.2.4.min.js"></script>
	<script src="assets/js/vendor/bootstrap-4.1.3.min.js"></script>
    <script src="assets/js/vendor/wow.min.js"></script>
    <script src="assets/js/vendor/owl-carousel.min.js"></script>
    <script src="assets/js/vendor/jquery.datetimepicker.full.min.js"></script>
    <script src="assets/js/vendor/jquery.nice-select.min.js"></script>
    <script src="assets/js/vendor/superfish.min.js"></script>
    <script src="assets/js/main.js"></script>

</body>
</html>
  <?php
  session_start();
  $_SESSION['login']=$_POST['Login'];
       if (isset($_POST['connexion'])){

        $db =mysqli_connect('localhost','root','','gestion_parkinfo');
        $query="SELECT Login,Passeword,type FROM personne WHERE  Login='".$_POST['Login']."'and Passeword='".$_POST['password']."' and type='Utilisateur'";
            $result=mysqli_query($db,$query);
            if(mysqli_fetch_assoc($result)){
           
              $_SESSION['Login']=$_POST['Login'];
              header("Location:agent.php");
               ob_end_flush();
            $req="SELECT * FROM personne WHERE Login='".$_POST['Login']."'";
            $result=mysqli_query($db,$req);
            $val2 = mysqli_fetch_row($result);
             $_SESSION['UserName']=$val2['0'];
            }
            else{
                echo "<script>alert('login et/ou mot de passe est incorrect')</script>";
            }
       }
       
       ?>


