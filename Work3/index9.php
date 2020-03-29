<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Document</title>
</head>
<body>
    <h2><?php 
    if(isset($_POST['submit']=='multi')){
    

    if(!empty($_POST['num1'])  && !empty($_POST['num2'])){
    echo multi($_POST['num1'], $_POST['num2']);
}
else
    echo "invalid";

    }

else if(isset($_POST['submit']=='div')){
    

    if(!empty($_POST['num1'])  && !empty($_POST['num2'])){
    echo divi($_POST['num1'], $_POST['num2']);
}
else
    echo "invalid";

    }

    else if(isset($_POST['submit']=='add')){
    

    if(!empty($_POST['num1'])  && !empty($_POST['num2'])){
    echo sum($_POST['num1'], $_POST['num2']);
}
else
    echo "invalid";

    }

    else if(isset($_POST['submit']=='sub')){
    

    if(!empty($_POST['num1'])  && !empty($_POST['num2'])){
    echo minus($_POST['num1'], $_POST['num2']);
}
else
    echo "invalid";

    }
    

    function multi($num1, $num2){
    return $num1 * $num2;
}

function divi($num1, $num2){
    return $num1 / $num2;
}

function sum($num1, $num2){
    return $num1 + $num2;
}

function minus($num1, $num2){
    return $num1 - $num2;
}
    
    ?></h2>
    
    <form method="POST" action="">
        <input type="number" name="num1">
        <input type="number" name="num2">
        <input type="submit" name="submit" value="multi">
        <input type="submit" name="submit" value="div">
        <input type="submit" name="submit" value="add">
        <input type="submit" name="submit" value="sub">
        <br>
        
    </form>
</body>
</html>
