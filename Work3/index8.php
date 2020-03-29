<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Document</title>
</head>
<body>
    <h2><?php 
    if(isset($_POST['submit'])){
    
    if(!empty($_POST['username'])  && !empty($_POST['password'])){
    $user = "admin";
    $pass = "12345";
    if($user == $_POST['username'] && $pass == $_POST['password']){
    echo "logged in";
    header("location : profile.php");
    header("location : http://tunerpage.com");
}
        

else{
    echo "invalid";
}
        
if (strlen($_POST['username']) <= 6){
    echo "password must be more than 6 characters";
}

}
    }

    
    
    ?></h2>
    
    <form action="">
        <input type="text" name="username">
        <input type="password" name="password">
       
        <br>
        <input type="submit" name="submit" value="login">
    </form>
</body>
</html>