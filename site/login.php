<?php
$username = $_POST['username'];
$password = $_POST['password'];

if ($username == 'admin' && $password == '12345') {
  header("Location: dashboard.html");
  exit();
} else {
  header("Location: error.html");
  exit();
}

