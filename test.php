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


// <nav aria-label="breadcrumb bg-dark">
//     <ol class="breadcrumb">
// <?php
//
//       $path = "C:'\'wamp64'\'www'\'yabran'\'files-explorer'\'";
//       $names = explode("/", $path);
//       $trimnames = array_slice($names, 1, -1);
//       $length = count($trimnames)-1;
//       $url = "";
//           for ($i = 0; $i <= $length;$i++){
//           $url .= $trimnames[$i].'/';
//               if($i>0 && $i!=$length){
//                 echo "<li class='breadcrumb-item'><a href=''/'.$url.''>$trimnames[$i]</a></li>";
//                }
//                 elseif ($i == $length){
//               echo"<li class='breadcrumb-item'>$trimnames[$i]</li>";
//                 }
//                 else {
//                 echo  "<li class='breadcrumb-item'><a href='index.php'>'Home'</a></li>";
//                 }}
//
 //     </ol>
// </nav>
