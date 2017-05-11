<?php
session_start();
include './lib/db/dbconfig.php'; //memasukan database config yang ada di lib/db.dbconfig.php
//include './lib/db/functions.php';
date_default_timezone_set('Asia/Jakarta'); // setting deafult time zone

if (isset($_GET['page'])) {
  $page = $_GET['page'];
} else {
  $page = "home"; // halaman utama yang akan diakses user
}
if (isset($_GET['id'])) {
  $id = $_GET['id'];
} else {
  $id = "id";
}
if (!isset($_SESSION['sw']) AND !isset($_SESSION['pb'])) {
  include 'view/login.php'; 
} else {
  include 'view/media.php';
}
?>
