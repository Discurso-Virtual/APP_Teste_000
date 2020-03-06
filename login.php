<?php
    session_start();

    include_once './common/connectDB.php';
    $database = new Connection();
    $db = $database->openConnection();

if(isset($_POST['submit'])){

    $username=trim($_POST['userN']);
    $password=trim($_POST['pass']);

   
    if($username != "" && $password != ""){

        try{

        
        $stmt = $db->prepare("select * from utilizador where username = '". $username."' && password ='".$password."'");

        $stmt -> execute();
        
        $count= $stmt-> rowCount() ;
        $row = $stmt-> fetch();

        if($count == 1 && !empty($row)){
            $_SESSION['userID'] = $row['codUtil'];
            $_SESSION['username'] = $row['username'];
            $_SESSION['password']= $row['password'];
        } else{
            //header('location:index.php?msg=$msg')
        }
    }
    catch (PDOException $e){
        echo "Error: ".$e->getMessage();
    }
    }
    else{
        echo "Ambos os campos são obrigatórios";
        //header('location:index.php?msg=$msg')
    }
}
header ('location:home.php');


?>