<?php
function ScanDirectory($pDir, $pData) {

    if (!empty($pData)) {
        $pDir = $pDir.'/'.$pData;
    }

    if ($dir = opendir($pDir)) {
        $listDir = array();
        $i = 0;

        while($file = readdir($dir)) {
            if($file != '.' && $file != '..') {
                if (!empty($pData)) {
                    $listDir[$i] = $pData.'/'.$file;
                } else {
                   $listDir[$i] = $file;
                }
                $i = $i + 1;
            }
        }
    closedir($dir);
    }
    return $listDir;
}



$defaultDir = ".";

if (empty($_GET['dir']))  {
    $list = ScanDirectory($defaultDir, "");
} else {
    $dir = $_GET['dir'];
    $list = ScanDirectory($defaultDir, $dir);
}
$here = current($list);
$prev = prev($list);


// <?php
//     foreach ($list as $value) {
//         if (is_dir("$value")) {
//         echo ("<a href='index.php?dir=$value'>$value</a><br>");
//         }
//         else {
//            echo("$value <br>");
//           }
//     }
//
