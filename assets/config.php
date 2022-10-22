<?php
require ("connection.php");
if (isset($_POST['submit'])) {
    $name=$_POST['nom'];
    $email=$_POST['email'];
    $objet=$_POST['objet'];
    $body =$_POST['body'];
    $sql ="INSERT INTO `listcmd`(nom,email,objet,textarea) values('$name','$email','$objet','$body')";
    $result =mysqli_query($conn ,$sql);
     }
    header("location:index.php");
    if(isset($_POST['submit'])){
        $name=$_POST['nom'];
        $email=$_POST['email'];
        $comp=$_POST['societe'];
        $num=$_POST['num'];
        $adress=$_POST['adresse'];
        $data ="INSERT INTO `partenaire`(nom ,email , company ,numberPhone ,adresse)values('$name','$email','$comp','$num' ,'$adress')";
        $result =mysqli_query($conn ,$data);
        header("location:part.php"); 
    }


