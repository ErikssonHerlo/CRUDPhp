<?php
session_start();

$conn = mysqli_connect(
  'localhost',
  'root',
  '',
  'phpcrud'
) or die(mysqli_erro($mysqli));
 
?>