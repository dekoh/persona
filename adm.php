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
        ?>
		<div id="container">
        	<div id="content" class="adm">

                <div class="col">
                	<h1>Prénom</h1>
                    <form action="adm" method="post">
                    	<input type="text" name="prenom" placeholder="Prénom"/>
                    	<button>Enregistrer</button>
                    </form>
                    <ul class="listnom">
	                    <li>2.Jason</li>
	                    <li>1.Jack</li>
                    </ul>
                 </div>
                 <div class="col">
                	<h1>Nom</h1>
                
                    <form action="adm" method="post">
                    	<input type="text" name="nom" placeholder="Nom"/>
                    	<button>Enregistrer</button>
                    </form>
                 </div>
                 <div class="col">
                	<h1>Rue</h1>
                
                    <form action="adm" method="post">
                    	<input type="text" name="rue" placeholder="Rue"/>
                    	<button>Enregistrer</button>
                    </form>
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