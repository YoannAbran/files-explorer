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

$fichiers = array();
$dh = opendir(".");

  while($fichier = readdir($dh)) {
 if($fichier != "." && $fichier != "..") {
     $fichiers[] = $fichier;
 }
 }





closedir($dh);
sort($fichiers);




// fonction pour naviguer dans les dossier grace au liens

// si c'est un dossier "opendir ?"

// sinon si c'est un fichier txt "file_get_contents ?"

// sinon pour les autres fichiers "fopen ?"



foreach($files as $v)  {
  ?> <a href="cible.php?var=handle"><?php echo $v . "<br />";
} ?></a>


  </body>
</html>
