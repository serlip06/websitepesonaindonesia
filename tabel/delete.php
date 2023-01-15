<?php 

    require'../koneksi.php';

    $id = $_GET["id"];

    if( hapus($id) > 0 ) {
        echo
        "<script>
            alert('Data berhasil dihapus');
            windows.location.href = 'index2.php';
        </script>";
    } else {
        echo
        "<script>
            alert('Data gagal dihapus');
            window.localtion.href = 'index2.php';
        </script>";
    }

?>