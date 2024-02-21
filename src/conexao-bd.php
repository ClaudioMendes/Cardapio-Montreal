<?php 
#conecxão com o banco de dados 
$pdo = new PDO(dsn:'mysql:host=localhost;dbname=montreal', username:'root', password:'');