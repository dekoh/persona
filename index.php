<!DOCTYPE html>
<html lang="fr">
	<head>
		<title>Persona</title>
		<meta charset="UTF-8" />
		<meta name="author" content="Denis Kohlman">
		<meta name="description" content="Création aléatoire d'un persona.">
		<meta name="keywords" content="persona,utilisateur,aleatoire,random,user,users,aléatoire,utilisateurs">
        <link rel="stylesheet" type="text/css" href="css/reset.css" /> 
        <link rel="stylesheet" type="text/css" href="css/style.css" /> 
		<link rel="shortcut icon" type="image/png" href="favicon.png" />
  	    <link rel="icon" type="image/png" href="favicon.png" />
	</head>
	<body>
    	<?php
            include('inc/config.inc.php');
            include('inc/lib.php');
            $maxmen = 78;
            $maxgirl = 54;
            $sex = rand(1,2);
            if($sex == 1){
                $sexe = "h";
                $max = $maxmen;
            }
            elseif($sex == 2){
                $sexe = "f";
                $max = $maxgirl;
            }
            $sx = recupsexe($sexe);
            $upnom = $bdd->query("SELECT * FROM prenom WHERE sexe='$sexe' or sexe='n'");
            $npnom = $upnom->rowCount();
            $npnom = $npnom - 1;
            $idpnom = rand(0,$npnom);
            $pnom = $upnom->fetchAll();
            $prenom = $pnom[$idpnom]['prenom'];
            $unom = $bdd->query("SELECT * FROM nom");
            $nnom = $unom->rowCount();
            $nnom = $nnom - 1;
            $idnom = rand(0,$nnom);
            $nom = $unom->fetchAll();
            $nom = $nom[$idnom]['nom'];
        ?>
		<div id="container">
        	<div id="content">

        	<div id="logo"><h1><a href="f/..">Persona</a></h1></div>
                <div id="inner">
                    <div id="avatar">

                        <img src="img/<?php echo $sx . "/" .rand(1,$max); ?>.jpg" alt="avatar"/>
                    </div>
                    <h1 class="nom"><?php echo ucfirst($prenom)." ".ucfirst($nom); ?></h1>

                    <ul class="infos">
                        <li class="email ele"><?php echo  strtolower(stripAccents($prenom)).".". strtolower(stripAccents($nom))."@email.com"; ?></li>
                        <li class="sexe ele"><?php echo $sx; ?></li>
                        <li class="tel ele"><?php echo "0".rand(6,7)." ".rand(0,9).rand(0,9)." ".rand(0,9).rand(0,9)." ".rand(0,9).rand(0,9)." ".rand(0,9).rand(0,9); ?></li>
                        <li class="adr ele"><?php echo rand(1,200); ?> Rue du puits</li>
                    <ul>
                    <a href="f/.." id="rafraich">raf</a>
                 </div>
            </div>
        </div>

        <footer>
        	<div id="footer">
            	<div id="copyright">Réalisé par <a href="http://www.dekoh.eu">Dekoh</a> - Photo de <a href="http://uifaces.com/">UiFaces</a></div>
            </div>
        </footer>
        
	</body>
</html>