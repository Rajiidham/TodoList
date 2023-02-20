<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css">
    <script src="https://kit.fontawesome.com/e81773e2de.js" crossorigin="anonymous"></script>
    <title>Update</title>
</head>

<?php
$id = $_GET['ID'];
include "config.php";
$sql = mysqli_query($con,"SELECT * FROM `tabeltodo` WHERE Id = '$id'"); 
$data = mysqli_fetch_array($sql);

?>

<body class="bg-primary">
<form action="update1.php" method="POST">
<div class="container">
    <div class="row justify-content-center bg-white m-auto shadow mt-3 py-3 col-md-6">
        <h3 class="text-center text-warning font-monospace"><i class="fa-solid fa-pen"></i></h3>
        <div class="col-8">
            <input type="text" value="<?php echo $data['list'] ?>"name="list" class="form-control shadow">
        </div>
        <div class="col-2">
            <button class="btn btn-primary"><i class="fa-solid fa-pen"></i></button>
            <input type="hidden" name="id" value="<?php echo $data['Id'] ?>">
        </div>
    </div>
</div>
</form>
</body>
</html>