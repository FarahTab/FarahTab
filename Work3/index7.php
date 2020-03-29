
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Document</title>
</head>
<body>
    <h2><?php 
    if(isset($_GET['submit'])){
    

    if(!empty($_GET['num1'])  && !empty($_GET['num2']) && !empty($_GET['num3'])){
    echo sum($_GET['num1'], $_GET['num2'], $_GET['num3']);
}
else{
    echo "invalid";
}
    }

    function sum($num1, $num2, $num3){
        return $num1 + $num2 + $num3;
    }
    
    ?></h2>
    
    <form action="">
        <input type="number" name="num1">
        <input type="number" name="num2">
         <input type="number" name="num3">
       
        <br>
        <input type="submit" name="submit" value="save">
    </form>
</body>
</html>
