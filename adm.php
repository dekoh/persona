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
	  	<link href='http://fonts.googleapis.com/css?family=Oswald:400,300,700' rel='stylesheet' type='text/css'>
		<script type="text/javascript" src="js/jquery.js"></script>
		<script type="text/javascript" src="js/script.js"></script>
	</head>
	<body>
    	<?php
            include('inc/config.inc.php');
            include('inc/lib.php');
            if(isset($_POST['type'])){
	          
	            if($_POST['type']=="newpre"){
		            $prenom = addslashes($_POST['prenom']);
		            $req = $bdd->query("INSERT INTO prenom(prenom) VALUES ('$prenom')");
	            }
	            if($_POST['type']=="modpre"){
		            $prenom = addslashes($_POST['prenom']);
		            $id = $_POST['id'];
		            $requ = $bdd->prepare("UPDATE prenom SET prenom='$prenom' WHERE id='$id'");
		            $requ->execute();

	            }
	              
            }
        ?>
		<div id="container">
        	<div id="content" class="adm">

                <div class="col">
                	<h1>Prénom</h1>
                    <form action="adm.php" method="post">
                    	<input type="text" name="prenom" placeholder="Prénom"/>
                    	<input type="hidden" name="type" value="newpre"/>
                    	<button>go</button>
                    </form>
                    <?php
	                    $pre = $bdd->query("SELECT * FROM prenom order by id desc");
                    ?>
                    <ul class="listnom">
                    	<?php
	                    while($prenom=$pre->fetch()){
		                    echo '<li>
		                    <form action="adm.php" class="formhid" method="post">
		                    	<label>'.$prenom['id'].'. </label><input type="text" name="prenom" placeholder="Prénom" value="'.ucfirst($prenom['prenom']).'"/>
		                    	<input type="hidden" name="id" value="'.$prenom['id'].'" />
		                    	<input type="hidden" name="type" value="modpre"/>
		                    	<button>go</button>
		                    </form>
		                    <formaction="adm.php" class="formsup" method="post">
		                    	<input type="hidden" name="id" value="'.$prenom['id'].'" />
		                    	<input type="hidden" name="type" value="suppre"/>
			                    <button>go</button>
		                    </form>';
		                    if($prenom['sexe']=="h"){
			                    echo '<div class="changsexe" style="background: url(img/picto/h.png) center no-repeat; background-size: 18px;" data-id="'.$prenom['id'].'" data-sexe="'.$prenom['sexe'].'"></div>';
		                    }
		                    elseif($prenom['sexe']=="f"){
			                    echo '<div class="changsexe" style="background: url(img/picto/f.png) center no-repeat; background-size: 18px;" data-id="'.$prenom['id'].'" data-sexe="'.$prenom['sexe'].'"></div>';
		                    }
		                    elseif($prenom['sexe']=="n"){
			                    echo '<div class="changsexe" style="background: url(img/picto/n.png) center no-repeat; background-size: 18px;" data-id="'.$prenom['id'].'" data-sexe="'.$prenom['sexe'].'"></div>';
		                    }
		                    else{
			                    echo '<div class="changsexe" style="background: url(img/picto/nn.png) center no-repeat; background-size: 18px;" data-id="'.$prenom['id'].'" data-sexe="'.$prenom['sexe'].'"></div>';
		                    }
		                    echo '</li>';
	                    }
	                    
	                    ?>
	                   
                    </ul>
                 </div>
                 <div class="col">
                	<h1>Nom</h1>
                
                    <form action="adm" method="post">
                    	<input type="text" name="nom" placeholder="Nom"/>
                    	<button>go</button>
                    </form>
                    <ul class="listnom">
	                    <li>2.Jason</li>
	                    <li>1.Jack</li>
                    </ul>
                 </div>
                 <div class="col">
                	<h1>Rue</h1>
                
                    <form action="adm" method="post">
                    	<input type="text" name="rue" placeholder="Rue"/>
                    	<button>go</button>
                    </form>
                    <ul class="listnom">
	                    <li>2.Jason</li>
	                    <li>1.Jack</li>
                    </ul>
                 </div>
            </div>
        </div>
        
	</body>
</html>