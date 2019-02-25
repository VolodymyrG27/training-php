<?php
    if(isset($_POST['done'])) {
    if($_POST["name"] == ""){
    echo "Write name <a href='/'>Edit name</a>";
    } 
    else {
    header("Location:index.php");
    }
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Document</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css">
    <style>
        body {
            background: silver;
        }

        .col-md-6{
            text-align: center;
            margin-top: 15%;
        }

        .col-md-12{
            text-align: center;
            margin-top: 20px;
        }
    </style>
</head>
<body>
<form name="test" action="" method="post">
    <div class="container">
    <div class="row">
        <div class="col-md-6">
            <label>Name: </label>
            <input type = "text" name = "name" placeholder = "Name" />
        </div>
        <div class="col-md-6">
            <label>Email: </label>
            <input type = "text" name = "email" placeholder = "nowak@gmail.com" />
        </div>
        <div class="col-md-12">
            <label>Message: </label>
            <textarea name = "message" cols = "60" rows = "5" placeholder = "Message"></textarea>
            <br />
            <input type = "submit" name = "done" value = "submit" />
        </div>
    </div>
</form>
</div>
</div>
</body>
</html>