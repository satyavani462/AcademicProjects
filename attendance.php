<?php
$success=false;
if($_SERVER['REQUEST_METHOD']=='POST')
{
    $server="localhost";
    $username="root";
    $password="";
    $database="project2";
    $con=mysqli_connect($server,$username,$password,$database);
    $name=$_POST['name'];
    $id=$_POST['id'];
    $jan=$_POST['jan'];
    $feb=$_POST['feb'];
    $march=$_POST['march'];
    $april=$_POST['april'];
    $sql="INSERT INTO `attendance` (`username`, `id`, `jan`, `feb`, `march`, `april`) VALUES ('$name', '$id', '$jan', '$feb', '$march', '$april');";
    $res=mysqli_query($con,$sql);
    if($res){
        $success=true;
    }
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="shortcut icon" href="homelogo.png" type="image/x-icon">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <link rel="stylesheet" href="attendance.css">
    <script src="attendance.js"></script>
    <title>Attendance Form</title>
    <style>
        .div{
    height:100vh;
}

        .div{
    display: flex;
    justify-content: center;
    align-items: center;
    flex-direction: column;
        }
.a{
    font-size: 18px;
    margin: 8px;
}
    </style>
</head>
<body>
    <a href="home.php" target="_blank"><i class="fa fa-home" id="home" aria-hidden="true" style="font-size:40px;color:white" ></i></a>
    <?php
    if(!$success){
    echo '<div class="container ">
        <p>Attendance Form</p>
    <form action="attendance.php" method="post">
        <div class="smallcont">
        <label for="name">Username</label>
        <input type="text" id="name" name="name" required>
        <label for="id">ID</label>
        <input type="number" id="id" name="id" required>
        <label for="jan">January</label>
        <input type="number" name="jan" id="jan">
        <label for="feb">Febrauary</label>
        <input type="number" name="feb" id="feb">
        <label for="march">March</label>
        <input type="number" name="march" id="march">
        <label for="april">April</label>
        <input type="number" name="april" id="april">
        <input type="submit" value="SUBMIT">
        </div>
    </form>
    </div>';
    }
    ?>
    <?php
    if($success){
    echo '   <div class="div">
    <h1 class="h1">Inserted Successfully</h1>
    <a class="a" href="attendance.php">Go Back</a>
 <a class="a" href="attendanceedit.php">Manage Attendance</a>
</div>';
    }
    ?>
</body>
</html>