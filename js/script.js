$(document).ready(function(){
	$(".changsexe").click(function(){
		var dataid = $(this).data("id");
		var datasexe = $(this).data("sexe");
		if(datasexe=="h"){
			var sexe = "f";
		}
		if(datasexe=="f"){
			var sexe = "n";
		}
		if(datasexe=="n"){
			var sexe = "h";
		}
		if(datasexe==""){
			var sexe = "h";
		}
		$.post("php/sexe.php", {id: dataid,sexe: sexe}, function(data) {
		    $(this).css("background","url(img/picto/"+sexe+".png) center no-repeat");
		    $(this).css("background-size","18px");
		    $(this).data("sexe",sexe);
	    })
	});
});