<?php
setcookie('npm', '23753102', time() + 120); 
setcookie('nama', 'Khairunnisa', time() + 120); 

if(isset($_COOKIE['npm']) && isset($_COOKIE['nama'])) {
    echo "NPM: " . $_COOKIE['npm'] . "<br>";
    echo "Nama: " . $_COOKIE['nama'];
} else {
    echo "Cookie belum diset atau sudah kadaluarsa.";
}
?>