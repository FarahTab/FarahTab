
<?php
function multiply($number) { 
 
    if ($number < 2) { 
        return 1; 
    } else { 
        return ($number * multiply($number-1)); 
    } 
}
 
echo multiply(5);
?>