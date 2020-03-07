<?php
    include '../config.php';
    session_start();
    
    if(isset($_SESSION['loggedin']) && $_SESSION['loggedin']===true){
        $id = $_SESSION['id'];
        $query = mysqli_query($database, "SELECT * FROM `USER` WHERE `id` = $id");
        if(mysqli_num_rows($query)==0 || time()-$_SESSION['last_activity']>=600){
            session_unset();
            session_destroy();
            header('location: ../');
        }
        $row = mysqli_fetch_array($query);
        if(!$row['admin'])
            header('location: ../home/');
        $_SESSION['last_activity'] = time();
    }
    else
        header('location: ../');
?>
<head>
<title><?php echo $web_name; ?></title>
</head>
<body>
  <h1>POST OFFICE</h1>
</body>
</html>
