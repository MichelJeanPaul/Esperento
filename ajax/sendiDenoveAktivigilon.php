<?php
include "../util.php";
$identigilo=isset($_GET['identigilo'])?$_GET['identigilo']:"";

// On vérifie si l'utilisateur n'a pas "changé" son identifiant après avoir cliqué sur le lien
$query = "select id,aktivigita,pasvorto_md5,aktivigo,retadreso from personoj where enirnomo='".$identigilo."'";
$result = $bdd->query($query);
if (!$row = $result->fetch()) { // aucune ligne retournée
	$respondo["mesagxo"]="Arrêtez de faire l'andouille, ça va pas nous aider !";
	$respondo["type"]="identigilo";
	echo json_encode($respondo);
	exit(0);
}
else {
	// on récupère quelques valeurs de la base
	$aktivigo=$row["aktivigo"];
	$retadreso=$row["retadreso"];
	$persono_id = $row["id"];
	// on envoit le mail d'activation (quasiment comme à l'inscription)
	$lien = $urlracine."aktivigi.php?retadreso=".$retadreso."&aktivigo=".$aktivigo;
	$filename = "../mails/aktivigi.html";
	$fd = fopen($filename, "r");
	$contents = fread($fd, filesize ($filename));
	fclose($fd);
	$contents=str_replace("##LIEN_ACTIVATION##",$lien,$contents);
	$mesagxkapo="MIME-Version: 1.0\n";
	$mesagxkapo.="Content-type:text/html;charset=utf-8\n";			
	$mesagxkapo.="From: ikurso <ikurso@esperanto-france.org>\n";
	$mesagxkapo.="Return-Path: <ikurso@esperanto-france.org>\n";
	$mesagxkapo.="Date: ".date("D, j M Y H:i:s").chr(13);
	// envoyer le mail eleve pour l'inviter a attendre un correcteur.
	$objekto="Nouvelle activation de votre compte pour apprendre gratuitement l'espéranto";
	mail($retadreso,$objekto,$contents,$mesagxkapo);
	protokolo($persono_id,"RENVOIE ACTIVATION COMPTE",$retadreso." a reçu une clef d'activation");

	$respondo["mesagxo"] = "ok";
	echo json_encode($respondo);
}

?>