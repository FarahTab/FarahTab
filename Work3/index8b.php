<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Document</title>
</head>
<body>
        <h2><?php 
    if(isset($_POST['submit'])){
    
    $pass = $_POST ['password'];
        if($pass <= 6) {
            echo "password min 6";
        }
        else {
            echo "logged in";
        }
}
        


    
    
    ?></h2>
    <form action="" method="POST">
        <input type="text" name="uname">
    <input type="password" name="password">
    <input type="submit" name="submit" value="login">
    </form>
    
</body>
</html>