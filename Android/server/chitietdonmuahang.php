<?php
include"connect.php";
$json =$_POST['json'];
$data = json_decode($json,true);
foreach ($data as $value) {
    $madonhang=$value['madonhang'];
    $masanpham=$value['masanpham'];
    $tensanpham=$value['tensanpham'];
    $giasanpham=$value['giasanpham'];
    $soluongsanpham=$value['soluongsanpham'];
    $query="INSERT INTO chitietdonmuahang(madonhang,masanpham,tensanpham,giasanpham,soluongsanpham) 
        VALUES ('$madonhang','$masanpham','$tensanpham','$giasanpham','$soluongsanpham')";
    $Dta = mysqli_query($conn,$query);
    }                 
    if($Dta){
        echo "1";
    }else{
        echo $madonhang,'  ',$masanpham,'  ',$tensanpham,'  ',$giasanpham,' ',$soluongsanpham;
    }       

?>