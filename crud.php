<?php

$conn = mysqli_connect('localhost' , 'n1577759_gloria1', 'latihanphp123', 'n1577759_gloria1');


if(isset($_POST['tambahdata'])) {
    $NamaPenjualan      =$_POST['namapenjualan'];
    $TanggalPenjualan   =$_POST['tanggalpenjualan'];
    $Keterangan         =$_POST['keterangan'];
    $JumlahPenjualan     =$_POST['jumlahpenjualan'];
    
    $sql = "INSERT INTO penjualan (id, namapenjualan, tanggalpenjualan, keterangan, jumlahpenjualan) VALUES ('', '$NamaPenjualan', '$TanggalPenjualan', '$Keterangan ', ' $JumlahPenjualan')";
    mysqli_query($conn, $sql);
    header("localtion: index.php");
}
$AmbilData = mysqli_query($conn, "SELECT * FROM penjualan");

if(isset($_POST['ubahdata'])) {
    $ID                 =$_POST['id'];
    $NamaPenjualan      =$_POST['namapenjualan'];
    $TanggalPenjualan   =$_POST['tanggalpenjualan'];
    $Keterangan         =$_POST['keterangan'];
    $JumlahPenjualan     =$_POST['jumlahpenjualan'];
    $sql = "UPDATE penjualan SET namapenjualan='$NamaPenjualan', tanggalpenjualan='$TanggalPenjualan', keterangan='$Keterangan', jumlahpenjualan='$JumlahPenjualan' WHERE id=$ID";
    mysqli_query($conn, $sql);
    header('localtion: index.php');
}

if (isset($_POST['hapus'])) {
    $ID = $_POST['id'];
    mysqli_query($conn,  "DELETE FROM penjualan WHERE id = '$ID'");
    header('location: index.php');
    
}
?>
