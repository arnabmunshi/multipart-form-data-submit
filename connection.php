<?php
$dbhost = 'localhost';
$dbusername = 'root';
$dbpassword = '';
$dbname = 'interview_db';
$dbcon = mysqli_connect($dbhost, $dbusername, $dbpassword, $dbname) or die('Could not connect to MySQL');