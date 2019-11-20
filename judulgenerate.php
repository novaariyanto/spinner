<?php 
// include ('koneksi.php');

if(!empty($_GET['judul'])){
    $judul = $_GET['judul'];
    $awal = getawal($judul);
    $akhir = getakhir($judul);
    echo $awal.$judul.$akhir;
}
function getawal($judul){
    $judul = explode(" ",$judul);
    // print_r($judul);
    $work = false;
    foreach($judul as $d){
        // echo $d;
        // echo "<br>";
        if($d == 'Cara' || $d == 'cara' || $d == 'Download' || $d == 'download'){
            $work = true;
        }
        if($d == 'Work' || $d == 'Mudah'){
            $work = false;
        }
    }
    if($work == true){
        $result = "√ Work, ";
    }else{
        $result = "";
    }
    
    return $result;
}
function getakhir($judul){
    return " Dengan Mudah";
}
?>