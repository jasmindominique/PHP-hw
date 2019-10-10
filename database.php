<?php

// server
// user
// password
// database name

$db= mysqli_connect('localhost', 'root', 'root', 'testdatabase1');

if (mysqli_connect_error($db) ){
	echo 'Database connection failed' . mysqli_connect_error();
}