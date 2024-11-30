<?php 

$cookie_name = 'user';
$cookie_value = 'joni';

// Set cookie pertama
setcookie($cookie_name, $cookie_value);

// Ganti nilai cookie
$cookie_value = 'tejo';
setcookie($cookie_name, $cookie_value);

// Cek apakah cookie sudah diset
if (isset($_COOKIE[$cookie_name])) {
    echo $_COOKIE[$cookie_name]; // Tampilkan nilai cookie
} else {
    echo "Cookie belum diset!";
}

// Hapus cookie
setcookie($cookie_name, "", time() - 3600);

echo "<br>";

// Tampilkan semua cookie yang ada
var_dump($_COOKIE);

?>
