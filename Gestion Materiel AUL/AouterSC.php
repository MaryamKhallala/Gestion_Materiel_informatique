<?php 
ob_start();
?>

<!DOCTYPE html>

<html>
<head>
  <title>Liste des materiel Onduleurs</title>
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
<form method="POST" action="">
                  
                    
                    <div class="form-group">
                      
                      <input class="form-control" placeholder="Rechercher par Designation" name="search" required="" type="text"  >
                    </div>
                                
                                
                  <input type="submit" value="Rechercher"  name="sr"  style="color: #fff;
                  
        border: none;
        outline: none;
        background:transparent;  
        background:  #03a9f4;
        cursor: pointer;
        border-radius: 5px;
        padding:10px 20px;
        font-family: italic;
        font-size: 20px;
         margin-left: 1860px;">
                  </form>
<br>
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
<?php

if (isset($_POST['sr'])) {
  $con=mysqli_connect("localhost",'root','','gestion_parkinfo');


$Search=$_POST['search'];
$sql="select * from materiel join composante where type='Scanners' and materiel.Serie=composante.Serie and   Designation= '".$_POST['search']."' ";

  $res=mysqli_query($con,$sql);
  
echo "<table style='width:2000px'><tr class='tbl'><td>Serie</td><td>type materiel</td><td>Username</td><td>reference</td><td>etat</td><td>Designation</td><td>debut_affec</td><td>fin_affec</td><td>Id_composant</td><td>type_C</td><td>Detail</td><td>Date_installer</td><td>Editer</td>
 <div class='card-block'
 <br>
                                <h1 style=' text-decoration:underline;color=#73A5F1;'>resultat de recherche</h1>
                                </div>";
  while($val2 = mysqli_fetch_row($res))
  {
    /*$id=$val2['9'];
    listeU.php?id=$id*/
   echo"<tr class='var'><td>".$val2['0']."</td><td>".$val2['1']."</td><td>".$val2['2']."</td><td>".$val2['3']."</td><td>".$val2['4']."</td><td>".$val2['5']."</td><td>".$val2['6']."</td><td>".$val2['7']."<td>".$val2['8']."</td><td>".$val2['10']."</td><td>".$val2['11']."</td><td>".$val2['12']."
   <td>
                    
                       <a href='supprimer.php'><svg xmlns='http://www.w3.org/2000/svg' x='0px' y='0px
width='30' height='30'
viewBox='0 0 192 192'
style='' fill:#000000;'><g fill='none' fill-rule='nonzero' stroke='none' stroke-width='1' stroke-linecap='butt' stroke-linejoin='miter' stroke-miterlimit='10' stroke-dasharray='' stroke-dashoffset='0' font-family='none' font-weight='none' font-size='none' text-anchor='none' style='mix-blend-mode: normal'><path d='M0,192v-192h192v192z' fill='none'></path><g fill='#f5100d'><path d='M80.8125,12c-2.682,0 -5.20106,1.18223 -6.91406,3.24023c-0.174,0.207 -0.31673,0.43669 -0.42773,0.67969l-6.39844,14.08008h-34.07227c-4.962,0 -9,4.038 -9,9v18c0,4.962 4.038,9 9,9h6v105c0,4.962 4.038,9 9,9h96c4.962,0 9,-4.038 9,-9v-105h6c4.962,0 9,-4.038 9,-9v-18c0,-4.962 -4.038,-9 -9,-9h-34.06641l-6.39844,-14.08008c-0.111,-0.243 -0.25673,-0.47569 -0.42773,-0.67969c-1.716,-2.058 -4.23506,-3.24023 -6.91406,-3.24023zM80.8125,18h30.375c0.78,0 1.52222,0.30103 2.07422,0.83203l5.08008,11.16797h-44.6836l5.08008,-11.16797c0.555,-0.531 1.29422,-0.83203 2.07422,-0.83203zM33,36h126c1.653,0 3,1.344 3,3v18c0,1.656 -1.347,3 -3,3h-126c-1.653,0 -3,-1.344 -3,-3v-18c0,-1.656 1.347,-3 3,-3zM42,42c-1.656,0 -3,1.341 -3,3v6c0,1.659 1.344,3 3,3c1.656,0 3,-1.341 3,-3v-6c0,-1.659 -1.344,-3 -3,-3zM57,42c-1.656,0 -3,1.341 -3,3v6c0,1.659 1.344,3 3,3c1.656,0 3,-1.341 3,-3v-6c0,-1.659 -1.344,-3 -3,-3zM72,42c-1.656,0 -3,1.341 -3,3v6c0,1.659 1.344,3 3,3c1.656,0 3,-1.341 3,-3v-6c0,-1.659 -1.344,-3 -3,-3zM87,42c-1.656,0 -3,1.341 -3,3v6c0,1.659 1.344,3 3,3c1.656,0 3,-1.341 3,-3v-6c0,-1.659 -1.344,-3 -3,-3zM105,42c-1.656,0 -3,1.341 -3,3v6c0,1.659 1.344,3 3,3c1.656,0 3,-1.341 3,-3v-6c0,-1.659 -1.344,-3 -3,-3zM120,42c-1.656,0 -3,1.341 -3,3v6c0,1.659 1.344,3 3,3c1.656,0 3,-1.341 3,-3v-6c0,-1.659 -1.344,-3 -3,-3zM135,42c-1.656,0 -3,1.341 -3,3v6c0,1.659 1.344,3 3,3c1.656,0 3,-1.341 3,-3v-6c0,-1.659 -1.344,-3 -3,-3zM150,42c-1.656,0 -3,1.341 -3,3v6c0,1.659 1.344,3 3,3c1.656,0 3,-1.341 3,-3v-6c0,-1.659 -1.344,-3 -3,-3zM45,66h102v105c0,1.656 -1.347,3 -3,3h-96c-1.653,0 -3,-1.344 -3,-3v-3h69c1.656,0 3,-1.341 3,-3c0,-1.659 -1.344,-3 -3,-3h-69zM60,84c-1.656,0 -3,1.341 -3,3v36c0,1.659 1.344,3 3,3c1.656,0 3,-1.341 3,-3v-36c0,-1.659 -1.344,-3 -3,-3zM84,84c-1.656,0 -3,1.341 -3,3v60c0,1.659 1.344,3 3,3c1.656,0 3,-1.341 3,-3v-60c0,-1.659 -1.344,-3 -3,-3zM108,84c-1.656,0 -3,1.341 -3,3v60c0,1.659 1.344,3 3,3c1.656,0 3,-1.341 3,-3v-60c0,-1.659 -1.344,-3 -3,-3zM132,84c-1.656,0 -3,1.341 -3,3v12c0,1.659 1.344,3 3,3c1.656,0 3,-1.341 3,-3v-12c0,-1.659 -1.344,-3 -3,-3zM132,108c-1.656,0 -3,1.341 -3,3v36c0,1.659 1.344,3 3,3c1.656,0 3,-1.341 3,-3v-36c0,-1.659 -1.344,-3 -3,-3zM60,132c-1.656,0 -3,1.341 -3,3v12c0,1.659 1.344,3 3,3c1.656,0 3,-1.341 3,-3v-12c0,-1.659 -1.344,-3 -3,-3zM126,162c-1.656,0 -3,1.341 -3,3c0,1.659 1.344,3 3,3h12c1.656,0 3,-1.341 3,-3c0,-1.659 -1.344,-3 -3,-3z'></path></g></g></svg>
                       
                            
                         </a>
                          
                   
                </td></td></tr>";
 
 
}
 
}

ob_end_flush();

?>


<?php
  $con=mysqli_connect("localhost",'root','','gestion_parkinfo');
 
  $r2="select * from materiel join composante where type='Scanners' and materiel.Serie=composante.Serie ";
  $req2=mysqli_query($con,$r2);
  echo "<table style='width:2000px'><tr class='tbl'><td>Serie</td><td>type materiel</td><td>Username</td><td>reference</td><td>etat</td><td>Designation</td><td>debut_affec</td><td>fin_affec</td><td>Id_composant</td><td>type_C</td><td>Detail</td><td>Date_installer</td><td>Editer</td>
  <div class='card-block'
 <br>
 <br>
                                <h1 style=' text-decoration:underline;color=#73A5F1;'>liste des Scanners </h1>
                                </div>";
  while($val2 = mysqli_fetch_row($req2))
  {
    /*$id=$val2['9'];
    listeU.php?id=$id*/
    echo"<tr class='var'><td>".$val2['0']."</td><td>".$val2['1']."</td><td>".$val2['2']."</td><td>".$val2['3']."</td><td>".$val2['4']."</td><td>".$val2['5']."</td><td>".$val2['6']."</td><td>".$val2['7']."<td>".$val2['8']."</td><td>".$val2['10']."</td><td>".$val2['11']."</td><td>".$val2['12']."</td>
    
                    <td>
                       <a href='supprimerm.php'><svg xmlns='http://www.w3.org/2000/svg' x='0px' y='0px
width='30' height='30'
viewBox='0 0 192 192'
style='' fill:#000000;'><g fill='none' fill-rule='nonzero' stroke='none' stroke-width='1' stroke-linecap='butt' stroke-linejoin='miter' stroke-miterlimit='10' stroke-dasharray='' stroke-dashoffset='0' font-family='none' font-weight='none' font-size='none' text-anchor='none' style='mix-blend-mode: normal'><path d='M0,192v-192h192v192z' fill='none'></path><g fill='#f5100d'><path d='M80.8125,12c-2.682,0 -5.20106,1.18223 -6.91406,3.24023c-0.174,0.207 -0.31673,0.43669 -0.42773,0.67969l-6.39844,14.08008h-34.07227c-4.962,0 -9,4.038 -9,9v18c0,4.962 4.038,9 9,9h6v105c0,4.962 4.038,9 9,9h96c4.962,0 9,-4.038 9,-9v-105h6c4.962,0 9,-4.038 9,-9v-18c0,-4.962 -4.038,-9 -9,-9h-34.06641l-6.39844,-14.08008c-0.111,-0.243 -0.25673,-0.47569 -0.42773,-0.67969c-1.716,-2.058 -4.23506,-3.24023 -6.91406,-3.24023zM80.8125,18h30.375c0.78,0 1.52222,0.30103 2.07422,0.83203l5.08008,11.16797h-44.6836l5.08008,-11.16797c0.555,-0.531 1.29422,-0.83203 2.07422,-0.83203zM33,36h126c1.653,0 3,1.344 3,3v18c0,1.656 -1.347,3 -3,3h-126c-1.653,0 -3,-1.344 -3,-3v-18c0,-1.656 1.347,-3 3,-3zM42,42c-1.656,0 -3,1.341 -3,3v6c0,1.659 1.344,3 3,3c1.656,0 3,-1.341 3,-3v-6c0,-1.659 -1.344,-3 -3,-3zM57,42c-1.656,0 -3,1.341 -3,3v6c0,1.659 1.344,3 3,3c1.656,0 3,-1.341 3,-3v-6c0,-1.659 -1.344,-3 -3,-3zM72,42c-1.656,0 -3,1.341 -3,3v6c0,1.659 1.344,3 3,3c1.656,0 3,-1.341 3,-3v-6c0,-1.659 -1.344,-3 -3,-3zM87,42c-1.656,0 -3,1.341 -3,3v6c0,1.659 1.344,3 3,3c1.656,0 3,-1.341 3,-3v-6c0,-1.659 -1.344,-3 -3,-3zM105,42c-1.656,0 -3,1.341 -3,3v6c0,1.659 1.344,3 3,3c1.656,0 3,-1.341 3,-3v-6c0,-1.659 -1.344,-3 -3,-3zM120,42c-1.656,0 -3,1.341 -3,3v6c0,1.659 1.344,3 3,3c1.656,0 3,-1.341 3,-3v-6c0,-1.659 -1.344,-3 -3,-3zM135,42c-1.656,0 -3,1.341 -3,3v6c0,1.659 1.344,3 3,3c1.656,0 3,-1.341 3,-3v-6c0,-1.659 -1.344,-3 -3,-3zM150,42c-1.656,0 -3,1.341 -3,3v6c0,1.659 1.344,3 3,3c1.656,0 3,-1.341 3,-3v-6c0,-1.659 -1.344,-3 -3,-3zM45,66h102v105c0,1.656 -1.347,3 -3,3h-96c-1.653,0 -3,-1.344 -3,-3v-3h69c1.656,0 3,-1.341 3,-3c0,-1.659 -1.344,-3 -3,-3h-69zM60,84c-1.656,0 -3,1.341 -3,3v36c0,1.659 1.344,3 3,3c1.656,0 3,-1.341 3,-3v-36c0,-1.659 -1.344,-3 -3,-3zM84,84c-1.656,0 -3,1.341 -3,3v60c0,1.659 1.344,3 3,3c1.656,0 3,-1.341 3,-3v-60c0,-1.659 -1.344,-3 -3,-3zM108,84c-1.656,0 -3,1.341 -3,3v60c0,1.659 1.344,3 3,3c1.656,0 3,-1.341 3,-3v-60c0,-1.659 -1.344,-3 -3,-3zM132,84c-1.656,0 -3,1.341 -3,3v12c0,1.659 1.344,3 3,3c1.656,0 3,-1.341 3,-3v-12c0,-1.659 -1.344,-3 -3,-3zM132,108c-1.656,0 -3,1.341 -3,3v36c0,1.659 1.344,3 3,3c1.656,0 3,-1.341 3,-3v-36c0,-1.659 -1.344,-3 -3,-3zM60,132c-1.656,0 -3,1.341 -3,3v12c0,1.659 1.344,3 3,3c1.656,0 3,-1.341 3,-3v-12c0,-1.659 -1.344,-3 -3,-3zM126,162c-1.656,0 -3,1.341 -3,3c0,1.659 1.344,3 3,3h12c1.656,0 3,-1.341 3,-3c0,-1.659 -1.344,-3 -3,-3z'></path></g></g></svg>
                       
                            
                         </a></td></tr>
                         ";
    /*echo "<style> table {
  border-collapse: collapse;
}

table, th, td {
  border: 1px solid black;
}
  table-layout: fixed;
  width: 400px;

              }</style>";*/
  }
  echo "</table>";
  echo "<style> 
  table {
  border: 1px solid black;
  border-collapse: collapse;

}
 td {
    
  text-align: left;

    
    padding: 15px;
    border-bottom: 1px solid #ddd;
}
tr:nth-child(even) {background-color: #f2f2f2;}
table, th, td {
  table-layout: fixed;
  width: 140px;
}


 .tbl{
  background: #0786F2;
  font-family: oplique;
  color: white;
  font-size : 20px ;
  
  font-style: gras;
 }            
  .var{
  background: white  ;
  font-family: italic;
  font-size : 20px ;
  font-style : oplique ;
 }   

              </style>";
?>
 
 
