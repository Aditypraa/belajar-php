<?php
include 'function/helper.php'; // include : jika file tidak ditemukan, maka akan tetap melanjutkan eksekusi
require 'function/helper.php'; // require : jika file tidak ditemukan, maka akan berhenti eksekusi

echo sentence('Hello World', 'red');

?>