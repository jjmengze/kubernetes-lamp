<?php
$host = getenv("DB_HOST");
$db = getenv("DB_NAME");
$user = getenv("DB_USER");
$pwd = getenv("DB_PWD");
$hostname = getenv("DB_HOST");
$username = getenv("DB_USER");
$password = getenv("DB_PWD");
$db_name = getenv("DB_NAME");
echo "start....";
try{
    $db=new PDO("mysql:host=".$hostname.";
                dbname=".$db_name, $username, $password,
                array(PDO::MYSQL_ATTR_INIT_COMMAND => "SET NAMES utf8"));
    echo 'success........';
    $db->setAttribute(PDO::ATTR_ERRMODE,PDO::ERRMODE_EXCEPTION);
    $db=null;
}
catch(PDOException $e){
    echo $e->getMessage();
    echo "error........";
}
echo "finish.....";
?>
