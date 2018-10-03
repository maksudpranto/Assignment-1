<?php

$user='root';
$pas = '';
$db = 'phplogin';

$db = new mysqli('localhost',$user,$pas,$db) or die("Unable to connect");
echo "Good Job";
?>