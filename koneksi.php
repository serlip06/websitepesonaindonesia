<?php
//koneksi ke data base
$connect = mysqli_connect("localhost","root","","pesona_indonesia");

function query($query) {
    global $connect;
    $result = mysqli_query($connect, $query);
    $row = [];
    while ($row = mysqli_fetch_assoc($result)){
        $rows[] = $row;
    }
    return $rows;
}
//tambah data pada tabel
function tempatwisata($data){
    global $connect;

    
    $gambar = $data ["gambar"];
    $nama_tempat = $data ["nama_tempat"];
    $keterangan = $data ["keterangan"];

    //query insert
    $query = "INSERT INTO tempat_wisata VALUES('','$gambar','$nama_tempat','$keterangan')";
    mysqli_query($connect,$query);

    return mysqli_affected_rows($connect);

}

//edit data vote
function ubah($data) {
    global $connect;

    $id = $data["id"];
    $gambar = $data["gambar"];
    $nama_tempat = $data["nama_tempat"];
    $keterangan = $data["keterangan"];

    //query insert
    $query = "UPDATE tempat_wisata SET
    gambar = '$gambar',
    nama_tempat = '$nama_tempat',
    keterangan = '$keterangan'

    WHERE id = $id

    ";
    mysqli_query($connect,$query);

    return mysqli_affected_rows($connect);
}

// Hapus data 
function hapus($id) {
    global $connect;
    mysqli_query($connect,"DELETE FROM tempat_wisata WHERE id = $id");

    return mysqli_affected_rows($connect);

}

?>