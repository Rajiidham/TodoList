<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css">
    <script src="https://kit.fontawesome.com/e81773e2de.js" crossorigin="anonymous"></script>
    <title>To Do List</title>
</head>
<body class="bg-secondary">
    

<form action="insert.php" method="POST">
<div class="container">
    <div class="row justify-content-center bg-white m-auto shadow mt-3 py-3 col-md-6">
        <h3 class="text-center text-warning font-monospace"><i class="fa-solid fa-table-list"></i></h3>
        <div class="col-8">
            <input type="text" name="list" class="form-control shadow">
        </div>
        <div class="col-2">
            <button class="btn btn-primary"><i class="fa-solid fa-plus"></i></button>
        </div>
    </div>
</div>
</form>

<!--get data-->

<?php
include "config.php";
$sql = mysqli_query($con,"SELECT * FROM `tabeltodo`");
?>

<div class="container">
    <div class="col-8 bg-white m-auto mt-3">
        <table class="table">
            <tbody>
                <?php
                while($row = mysqli_fetch_array($sql)){
                ?>
                <tr>
                    <td><?php echo $row['Id']?></td>
                    <td><?php echo $row['list']?></td>
                    <td style="width: 10%"> <a href="update.php? ID= <?php echo $row['Id']?>" class="btn btn-outline-success"><i class="fa-solid fa-pen"></i></a></td>
                    <td style="width: 10%"> <a href="delete.php? ID= <?php echo $row['Id']?>" class="btn btn-outline-danger"><i class="fa-solid fa-trash"></i></a></td>
                </tr>
                <?php
                }
                ?>
            </tbody>
        </table>
    </div>
</div>

</body>
</html>