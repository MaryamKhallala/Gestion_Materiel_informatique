<?php 
ob_start();
?>

<!DOCTYPE html>

<html>
<head>
  <title>Liste des materiel Imprimante</title>
 <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">

    <!-- Page Title -->
   
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
<div class="wrapper">
  <!-- Sidebar Holder -->
  <nav id="sidebar">
    <div class="sidebar-header">
      <a href="admin.php"><h3><center>Admin</center></h3></a>
    </div>

    <ul class="list-unstyled components">
      
     
      <li>
        <a href="AjouterIM.php"></i><strong> IMPRIMANTES</strong></a>
      </li>
  <li>
        <a href="AouterSC.php"><strong>  Scanners</strong></a>
      </li>

       <li>
        <a href="AjouterON.php"><strong>  Onduleurs</strong></a>
      </li>
    
       <li>
        <a href="ListeRMS.php"><strong>  Routeurs-Modem-Switch Hub</strong></a>
      </li>
     
      <li>
        <a href="listeMicroO.php"> <strong>  Micro Ordinateur </strong></a>
      </li>

      <li>
        <a href="admin.php"><strong><i class="mdi mdi-logout"></i> retourne à la page d'accueil</strong></a>
      </li>
       
    </ul>

      
     
     

   
  </nav>

  <!-- Page Content Holder -->
  <div id="content">

    <nav class="navbar navbar-default">
      <div class="container-fluid">

        <div class="navbar-header">
          <button type="button" id="sidebarCollapse" class="navbar-btn">
                                <span></span>
                                <span></span>
                                <span></span>
                            </button>
        </div>

        <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
          <ul class="nav navbar-nav navbar-right">
            <li><a href="#">Page</a></li>
            <li><a href="#">Page</a></li>
            <li><a href="#">Page</a></li>
            <li><a href="#">Page</a></li>
          </ul>
        </div>
      </div>
    </nav>


<!--<div class="box">
                <h2><strong> Park Info </strong></h2>
               <form method="POST" action="">
                 <div class="inputBox">
                <p> Avec Park Info vous pouvez gérer votre Park Informatique  .</p>
               <div class="inputBox">
                <p>Soyer-le Bienvenue !</p>
         </form>       
        </div>

        <style type="text/css">
          .box{
              position: absolute;
              top: 50%;
              left:50%;
              transform: translate(-40%,-50%);
              width: 900px;
              padding: 40px;
              background:rgba(0,0,0,.2);
              box-sizing: border-box;
              box-shadow: 0 15px 75px rgba(0,0,0,.4);
  }
    .box h2{
      margin: 0 0 30px;
      padding: 0;
      color: #56595A    ;
      text-align: center ;
      font-style: italic;

    }
    .box p {
      font-style: justify;
      color: #01354A  ;
      text-align: center ;
      font-family: italic ;
      font-size: 20px ;
    }
    .box .inputBox{
      position: relative;
    }
    .box .inputBox input {
         width: 100%;
          padding: 10px 0;
         font-size: 16px;
         color: #fff;
         margin-bottom: 30px;
         border: none;
         border-bottom: 1px solid #fff;
         outline: none;
         background:transparent;
        
    } 

        </style>-->
        
 <!-- Javascript -->
     <script src="assets/js/vendor/jquery-2.2.4.min.js"></script>
    <script src="assets/js/vendor/bootstrap-4.1.3.min.js"></script>
    <script src="assets/js/vendor/wow.min.js"></script>
    <script src="assets/js/vendor/owl-carousel.min.js"></script>
    <script src="assets/js/vendor/jquery.datetimepicker.full.min.js"></script>
    <script src="assets/js/vendor/jquery.nice-select.min.js"></script>
    <script src="assets/js/vendor/superfish.min.js"></script>
    <script src="assets/js/main.js"></script>
   
<style type="text/css">
  
/*
    DEMO STYLE
*/
@import "https://fonts.googleapis.com/css?family=Poppins:300,400,500,600,700";


body {
    font-family: 'Poppins', sans-serif;
    background: #EFF4F6;
}

p {
    font-family: 'Poppins', sans-serif;
    font-size: 1.1em;
    font-weight: 300;
    line-height: 1.7em;
    color: #999;
}

a, a:hover, a:focus {
    color: inherit;
    text-decoration: none;
    transition: all 0.3s;
}

.navbar {
    padding: 6px 2px;
    background:#EFF4F6 ;
    border: none;
    border-radius: 0;
    margin-bottom: 5px;
    box-shadow: 1px 1px 3px rgba(0, 0, 0, 0.1);
}

.navbar-btn {
    box-shadow: none;
    outline: none !important;
    border: none;
}

.line {
    width: 100%;
    height: 1px;
    border-bottom: 1px dashed #ddd;
    margin: 40px 0;
}

/* ---------------------------------------------------
    SIDEBAR STYLE
----------------------------------------------------- */
.wrapper {
    display: flex;
    align-items: stretch;
    perspective: 1500px;
}

#sidebar {
    min-width: 250px;
    max-width: 250px;
    background: #A2D7FC;
    box-sizing: border-box;
    
    /*box-shadow: 0 15px 25px rgba(0,0,0,.5);*/
    color: #fff;
    transition: all 0.6s cubic-bezier(0.945, 0.020, 0.270, 0.665);
    transform-origin: bottom left;

}

#sidebar.active {
    margin-left: -250px;
    transform: rotateY(100deg);
}

#sidebar .sidebar-header {
    padding: 20px;
    background: #fff ;
}

#sidebar ul.components {
    padding: 20px 0;
    border-bottom: 1px solid white;
    border: none;
}

#sidebar ul p {
    color: #012D42;
    padding: 10px;
}

#sidebar ul li a {
    padding: 10px;
    font-size: 1.1em;
    display: block;
    color: #012D42 ;
     
}
#sidebar ul li a:hover {
    color: #43A6C1  ;
    background: white;
    font-size: 18px ;
    font-style: italic;
}

#sidebar ul li.active > a, a[aria-expanded="true"] {
    color: #012D42;
    background: #6d7fcc;
}


a[data-toggle="collapse"] {
    position: relative;
}

a[aria-expanded="false"]::before, a[aria-expanded="true"]::before {
    content: '\e259';
    display: block;
    position: absolute;
    right: 20px;
    font-family: 'Glyphicons Halflings';
    font-size: 0.6em;
}
a[aria-expanded="true"]::before {
    content: '\e260';
}


ul ul a {
    font-size: 0.9em !important;
    padding-left: 30px !important;
    background: #012D42;
}

ul.CTAs {
    padding: 20px;
}

ul.CTAs a {
    text-align: center;
    font-size: 0.9em !important;
    display: block;
    border-radius: 5px;
    margin-bottom: 5px;
}

a.download {
    background: #fff;
    color: #7386D5;
}

a.article, a.article:hover {
    background: #6d7fcc !important;
    color: #012D42 !important;
}



/* ---------------------------------------------------
    CONTENT STYLE
----------------------------------------------------- */
#content {
    padding: 20px;
    min-height: 100vh;
    transition: all 0.3s;

}

#sidebarCollapse {
    width: 40px;
    height: 40px;
    background: #EFF4F6;
}

#sidebarCollapse span {
    width: 80%;
    height: 2px;
    margin: 0 auto;
    display: block;
    background: #555;
    transition: all 0.8s cubic-bezier(0.810, -0.330, 0.345, 1.375);
    transition-delay: 0.2s;
}

#sidebarCollapse span:first-of-type {
    transform: rotate(45deg) translate(2px, 2px);
}
#sidebarCollapse span:nth-of-type(2) {
    opacity: 0;
}
#sidebarCollapse span:last-of-type {
    transform: rotate(-45deg) translate(1px, -1px);
}


#sidebarCollapse.active span {
    transform: none;
    opacity: 1;
    margin: 5px auto;
}


/* ---------------------------------------------------
    MEDIAQUERIES
----------------------------------------------------- */
@media (max-width: 768px) {
    #sidebar {
        margin-left: -250px;
        transform: rotateY(90deg);
    }
    #sidebar.active {
        margin-left: 0;
        transform: none;
    }
    #sidebarCollapse span:first-of-type,
    #sidebarCollapse span:nth-of-type(2),
    #sidebarCollapse span:last-of-type {
        transform: none;
        opacity: 1;
        margin: 5px auto;
    }
    #sidebarCollapse.active span {
        margin: 0 auto;
    }
    #sidebarCollapse.active span:first-of-type {
        transform: rotate(45deg) translate(2px, 2px);
    }
    #sidebarCollapse.active span:nth-of-type(2) {
        opacity: 0;
    }
    #sidebarCollapse.active span:last-of-type {
        transform: rotate(-45deg) translate(1px, -1px);
    }

}


</style>


<script type="text/javascript">
  $(document).ready(function() {
  $("#sidebarCollapse").on("click", function() {
    $("#sidebar").toggleClass("active");
    $(this).toggleClass("active");
  });
});


</script>






 <!-- Javascript -->
    
 


</body>
</html>

