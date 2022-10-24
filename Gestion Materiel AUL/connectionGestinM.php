<?php
     // Lecture de fichier de confuguration
     
     
     //connexion
    $link = mysqli_connect('localhost','root','','gestion_materiel');



    //verification de connexion
    if (mysqli_connect_errno()) {
    	printf("Echec de la connexion : %s\n", mysqli_connect_error());
    	unset ($_SESSION["fichierconfiguration"]);
    	exit();

    }

    ?>