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
<?php include_once ("connection_database.php");?>
<div class="container">
    <div class="row">
        <h1>Головна сторінка</h1>

        <table class="table table-dark">
            <thead>
            <tr>
                <th scope="col">#</th>
                <th scope="col">Email</th>
            </tr>
            </thead>
            <tbody>
            <?php
            $sql = "SELECT u.id, u.email FROM tbl_users AS u";
            $stmt= $dbh->prepare($sql);
            $stmt->execute();
            while($row=$stmt->fetch(PDO::FETCH_ASSOC))
            {
                ?>
                <tr>
                    <td scope="row">1</td>
                    <td> <?php echo $row['email']; ?> </td>
                </tr>
                <?php
            }
            ?>
            </tbody>
        </table>

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
