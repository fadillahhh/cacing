<?php 
$nama_user = $_POST['nama_user'];
$nilai_user = $_POST['nilai_user'];

if ($nilai_user <=49){
    $nilai_akhir = 'E';
}elseif ($nilai_user <= 59){
    $nilai_akhir = 'D';
}elseif ($nilai_user <=69){
    $nilai_akhir = 'C';
}elseif ($nilai_user <= 79){
    $nilai_akhir = 'B';
}elseif ($nilai_user <=100){
    $nilai_akhir = 'A';
}
echo "nama : $nama_user <br>";
echo "nilai : $nilai_user <br>";
echo "hasil : $nilai_akhir <br>";

?>