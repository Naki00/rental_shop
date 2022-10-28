<?php 
    session_start();
    include('../Data/data.php');

    
    if(isset($_POST['pay'])){
        $Cname = mysqli_real_escape_string($dbcon,$_POST['Cname']);
        $Cnum = mysqli_real_escape_string($dbcon,$_POST['Cnum']);
        $Cdate = mysqli_real_escape_string($dbcon,$_POST['Cdate']);
        $Cyear = mysqli_real_escape_string($dbcon,$_POST['Cyear']);
        $cvv = mysqli_real_escape_string($dbcon,$_POST['cvv']);

        // $id =$_GET['id'];
        $query = mysqli_query($dbcon,"SELECT P.Pid,UD.id FROM user_account UD,product P ");       
        $result = mysqli_fetch_array($query);

        $sql = "INSERT INTO credit_card (Cname,Cnum,Cdate,Cyear,cvv) VALUES ('$Cname','$Cnum','$Cdate','$Cyear','$cvv')";
        mysqli_query($dbcon,$sql);



        header('location: ../index.php');
        
    }


    

?>