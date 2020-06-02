<!DOCTYPE html>
<html lang="fr" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title>files explorer</title>
  </head>
  <body>

    <?php

    $files = array();

// Ouverture du répetoire courant
// Pour le changer utiliser chdir() avant opendir()
$handle = opendir(".");

// Parcours des fichiers et dossiers du répertoire courant
while($file = readdir($handle)) {
    if($file != "." && $file != "..") {
        $files[] = $file;
    }
}

// Fermeture du répertoire courant
closedir($handle);

// Tri du tableaunat
sort($files);

// Affichage des fichiers et dossiers triés
foreach($files as $v) {
    echo $v . "<br />";
}
print_r($files)
     ?>
     <!-- liens avec element du tableau afficher grace a l'index-->
     <a href="#"><?php echo $files[0]; ?></a>

  </body>
</html>
