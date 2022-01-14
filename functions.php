<?php
function bd():PDO{

$dsn = 'mysql:dbname=tpdb;host=127.0.0.1:3306';
$user = 'root';
$password = '';

try {
    $pdo = new PDO($dsn, $user, $password);
    $pdo->exec('SET NAMES utf8');
    $pdo->setAttribute(
        PDO::ATTR_DEFAULT_FETCH_MODE,
        PDO::FETCH_ASSOC
    );

    return $pdo;
    } catch (Exception $e) {
        die('Erreur : ' . $e->getMessage());
    }
}

function userList(){
    $pdo=bd();
    $sql="SELECT *  FROM tpdb.user";
    $stmt = $pdo->prepare($sql);
    $stmt->execute();
    return $stmt->fetchAll();
}
function nbUser(){
    
}

function articleList(){
    $pdo = bd();
    $sql ="SELECT * FROM tpdb.article";
    $stmt = $pdo->prepare($sql);
    $stmt->execute();
    return $stmt->fetchAll();
}

function nbarticle(){
    $pdo = bd();
    $sql ="SELECT count(*) as nb FROM tpdb.article";
    $stmt = $pdo->prepare($sql);
    $stmt->execute();
    $results=$stmt->fetchAll();
    $nb="";
    foreach($results as $row){
        $nb = $row['nb'];
    }
    return $nb;

}

function artUser(){
    $pdo = bd();
    $sql ="SELECT count(*) as nbArt, nom as Nom FROM article A 
    LEFT JOIN user U on U.iduser = A.user_iduser 
    GROUP By user_iduser";
    $stmt = $pdo->prepare($sql);
    $stmt->execute();
    $results=$stmt->fetchAll();
    foreach($results as $row){
        echo $row['Nom']." : ".$row['nbArt']."<br />";
    }

}

function mostArticle(){

}