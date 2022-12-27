<?php
$nama = '';
$email = '';
date_default_timezone_set('Asia/Jakarta');
$date = date('d-m-Y H:i:s');
if (isset($_POST['submit'])) {
    $name = $_POST['name'];
    $email = $_POST['email'];
}
?>