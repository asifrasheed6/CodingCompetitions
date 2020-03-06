<?php
    include '../config.php';
    session_start();
    
    if(isset($_SESSION['loggedin']) && $_SESSION['loggedin'] === true){
        $id = $_SESSION['id'];
        $query = mysqli_query($database, "SELECT * FROM `USER` WHERE `id` = $id");
        if(mysqli_num_rows($query)==0 || time()-$_SESSION['last_activity']>=600){
            session_unset();
            session_destroy();
            header('location: ../');
        }
        if(mysqli_num_rows(mysqli_query($database, "SELECT * FROM `Verify` WHERE `id` = $id"))>0){
            $row = mysqli_fetch_array($query);
            header('location: ../submit.php?email='.$row['email'].'&status=true');
        }
        $_SESSION['last_activity'] = time();
    }
    else
        header('location: ../');
?>
<head>
  <title>HOME - A Work in Progress</title>
</head>
<body>
  <h1>HOME</h1>
</body>
</html>
