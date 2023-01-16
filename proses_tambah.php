<?php
include("koneksi.php");
if(isset($_POST['kirim_bayar'])){
    $Nama=$_POST['nama'];
    $Kelas=$_POST['kelas'];
    $Jurusan=$_POST['jurusan'];
    $Tahun=$_POST['tahun'];
    $Nominal=$_POST['nominal'];

    $sql="INSERT INTO tb_siswa(nama, kelas) VALUES ('$Nama','$Kelas' )";
    $query=mysqli_query($conn, $sql);
    $sql="INSERT INTO tb_jurusan( nama_jurusan) VALUES ('$Jurusan' )";
    $query=mysqli_query($conn, $sql);
    $sql="INSERT INTO tb_spp( tahun, nominal) VALUES ('$Tahun', '$Nominal' )";
    $query=mysqli_query($conn, $sql);

    if($query){
        header('location:join-table.php?status:sukses');
    }else{
        header('location:join-table.php?status:gagal'); 
    }
}
?>