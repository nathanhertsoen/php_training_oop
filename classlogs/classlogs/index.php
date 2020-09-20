<?php


// Je n'ai pas compris pourquoi il fallait donner le chemin du dossier dans le constructeur ET dans un GETTER et un SETTER,
// mais c'est ce qui, d'après mes notes, était à faire.



//J'invoque un portail vers ma classe mère et sa classe fille
require_once('LogsEditor.php');
require_once('LogsLegacy.php');

$filepath = '/var/www/classlogs/logs/';
$filename = 'mylogs.txt';

// $writelogs = new LogsEditor($filepath, $filename);
// $writelogs->startLogs('Début des logs' . "\n\r");
// $writelogs->addLogs('Un utilisateur a rechargé la page le ' . date("d.m.Y") . ' à ' . date("H:i:s") . "\n\r");
// $writelogs->endLogs('Fin des logs' . "\n\r" . '---------------------------------------------------------'. "\n\r");
//
//Instanciation ma classe


$surchargelogs = new LogsLegacy($filepath, $filename);
$surchargelogs->startLogs('Début des logs' . "\n\r");
$surchargelogs->addLogs('Un utilisateur a rechargé la page le ' . date("d.m.Y") . ' à ' . date("H:i:s") . "\n\r");
$surchargelogs->endLogs('Fin des logs' . "\n\r" . '---------------------------------------------------------'. "\n\r");


//J'envoie le chemin du répertoir au setter
//$writelogs->setPath($filepath);

//Je demande au getter de me le renvoyer et je l'affiche
// echo $gimmefilepath = $writelogs->getFilePath();


//J'envoie une ligne de log dans mylogs.txt






 ?>
