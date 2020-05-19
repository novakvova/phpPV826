<?php
if($_SERVER["REQUEST_METHOD"]=="POST") {
    $email = $_POST["txt_email"];
    $password = $_POST["txt_password"];
    //echo "<script>alert('".$password."');</script>";
    if(!empty($email) && !empty($password)) {
       include_once("connection_database.php");

        $sql = "INSERT INTO `tbl_users` (`email`, `password`, `image`) VALUES (?, ?, 'nophoto');";
        $stmt= $dbh->prepare($sql);
        $stmt->execute([$email, $password]);

        header("Location: index.php");
        exit();
    }
}
?>

<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <?php include("style.php"); ?>
    <title>Document</title>
</head>
<body>

<?php include("navbar.php") ?>

<div class="container">
    <div class="row">
        <h1 class="col-12 text-center">Реєстрація</h1>

        <form method="post" class="offset-3 col-6">
            <div class="form-group">
                <label for="exampleInputEmail1">Email address</label>
                <input type="email" class="form-control"
                       id="exampleInputEmail1"
                       aria-describedby="emailHelp"
                       name="txt_email"
                       placeholder="Enter email">

            </div>
            <div class="form-group">
                <label for="exampleInputPassword1">Password</label>
                <input type="password" class="form-control"
                       name="txt_password"
                       id="exampleInputPassword1" placeholder="Password">
            </div>
            <div class="form-check">
                <input type="checkbox" class="form-check-input" id="exampleCheck1">
                <label class="form-check-label" for="exampleCheck1">Check me out</label>
            </div>
            <button type="submit" class="btn btn-primary">Submit</button>
        </form>


    </div>
</div>

<?php
//$a=2;
//$b="23";
//$c=$a+$b;
//echo "<h1>Hello php ".$c."</h1>";
//echo "<h1>".$semen."</h1>";
//if(isset($ivan)) {
//    echo "<h1>" . $ivan . "</h1>";
//}
?>

<?php include("scripts.php"); ?>
</body>
</html>
