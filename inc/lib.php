<?php
	function recupsexe($sexe){
		if($sexe=="h"){
			$sx = "homme";
		}
		elseif($sexe=="f"){
			$sx = "femme";
		}
		return $sx;
	}
	function stripAccents($string){
		return strtr($string,'àáâãäçèéêëìíîïñòóôõöùúûüýÿÀÁÂÃÄÇÈÉÊËÌÍÎÏÑÒÓÔÕÖÙÚÛÜÝ',
	'aaaaaceeeeiiiinooooouuuuyyAAAAACEEEEIIIINOOOOOUUUUY');
	}
?>