<?php 
if(empty($_POST['name'])){
    echo 'Name is required <br>';
    echo '<a href="/forms/reg.ph" >go back</a>';
    exit;
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    Welcome <?php echo $_POST['name']; ?>!<br>
    Your email address is <?php echo $_POST['email']; ?>.
</body>
</html>