<!DOCTYPE html>

   <head> 
     
  <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">

    <!-- Page Title -->
   <title>Modifier utilisateur</title>
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

<div class="panel">
                  <form method="POST" action="">
                   <h2><strong><center> Modifier Utilisateur :</center></strong></h2>
                    
                    <div class="form-group">
                      <label><strong> Username :</strong></label>
                      <input class="form-control" placeholder="Enter l'Username de l'utilisateur que vous voulez modifier" name="Username" required="" pattern="[a-zA-Z0-9 -]+"  type="text"  >
                    </div>
                    <div class="form-group">
                      <label><strong> Nouveau Username :</strong></label>
                      <input class="form-control" placeholder="Enter le nouveau Username" pattern="[a-zA-Z0-9 -]+"   required="" name="User" type="text"  >
                    </div>
                    <div class="form-group">
                      <label><strong> Nom :</strong></label>
                      <input class="form-control" placeholder="Enter le nom" name="Nom" pattern="[a-zA-Z -]+" required="" type="text"  >
                    </div>
                    <div class="form-group">
                      <label><strong> Prénom :</strong></label>
                      <input class="form-control" placeholder="Enter le prénom" required="" pattern="[a-zA-Z -]+" name="Prénom" type="text" >
                    </div>
                    <div class="form-group">
                      <label><strong> Service :</strong></label>
                      <input class="form-control" placeholder="Enter le Service" required=""pattern="[a-zA-Z .]+" name="Service" type="text"  >
                    </div>
                    <div class="form-group">
                      <label><strong> N_etage :</strong></label>
                      <input class="form-control" placeholder="Enter le N_etage" required="" name="N_etage" type="number" >
                    </div>
                     <div class="form-group">
                   <label for="bieres"><strong> Département :</strong></label> 
                     </div> 
                   <input class="form-control"  list="bieres" placeholder="Enter le Département" pattern="[a-zA-Z .]+"required="" name="Département" required="" >
                   <datalist id="bieres">
                            <option value="D.G">D.G</option>
                            <option value="S.I">S.I</option>
                            <option value="D.E">D.E</option>
                            <option value="D.A.F">D.A.F</option>
                            <option value="D.A.J.F">D.A.J.F</option>
                            <option value="D.G.U">D.G.U</option>
                   </datalist>
                     
                    <div class="form-group">
                      <label><strong></s> Login :</strong></label>
                      <input class="form-control" placeholder="Enter le Login" required="" name="Login" type="text"  pattern="[a-zA-Z0-9 -]+"  >
                    </div>
                    <div class="form-group">
                      <label><strong> Password :</strong></label>
                      <input class="form-control" placeholder="Enter le Password" required="" name="Password" type="Password"   >
                    </div>
                   <div class="form-group" >
                  <center><input type="submit" value="Modifier" style="color: #fff;
        border: none;
        outline: none;
        background:transparent;  
        background:  #03a9f4;
        cursor: pointer;
        border-radius: 5px;
        padding:10px 20px;
        font-family: italic;
        font-size: 20px;
        margin-left: 690px;
        " name="Modifier"></center>
                  </div>
                  <!--<div class="btn btn-primary">
                      <i class="fa fa-save"></i>
                      Ajouter
                    </div>-->
                </form>
                </div>

<style type="text/css">
  .panel{
       
        top: 50%;
        left:50%;
        
        width: 900px;
        padding: 40px;
       
     
       
    }
    .panel .form-group label{
      text-decoration:underline;
    }
.panel h2 {
  text-decoration:underline;
      font-style: justify;
      color: #01354A  ;
      text-align: center ;
      font-family: italic ;
    }
    .panel.form-group input[type="submit"]{
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
    background: #E0F0F8;
    box-sizing: border-box;
    
    box-shadow: 0 15px 25px rgba(0,0,0,.5);
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
    border-bottom: 1px solid #09F7EF;
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
    background: #ABE9FA;
    font-size: 16px ;
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

<?php

  if ((isset($_POST['Modifier']))) {
    $con=mysqli_connect("localhost",'root','','gestion_parkinfo');
     if ($con) { 
     $sql = "update personne set UserName= '".$_POST['User']."', Nom ='".$_POST['Nom']."' , Prenom ='".$_POST['Prénom']."' , Passeword='".$_POST['Password']."',Passeword='".$_POST['Password']."',Login='".$_POST['Login']."',Service='".$_POST['Service']."',N_etage='".$_POST['N_etage']."' , Departement='".$_POST['Département']."' where UserName ='".$_POST['Username']."' "; 
     $resultat = mysqli_query($con, $sql); 
     if ($resultat ) { 
      echo "<script>alert('La modification a été effectuée avec succée !!')</script>"; 
       
       $req="insert into historique values ('personne',CURDATE(),'Admin','Modifier','".$_POST['Username']."','".$_POST['User']."')";

         $sol= mysqli_query($con,$req);

     
   
    
  
   // Exécution de la requête 
   
   } 

  }
  }
    
?>