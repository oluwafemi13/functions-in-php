<?PHP

/**range of functions that takes two arguments */
function range($start, $end){
        
    $startToEnd = array($start, $end);
    return $startToEnd;
}

echo range(30, 50);
echo range(10, 70);


/**sum function that takes an array of numbers and returns the sum of these numbers */

function sum($numbers[10]){

    
    $entireSum =($numbers[0]+$numbers[1]+$numbers[2]+$numbers[3]+$numbers[4]+$numbers[5]+$numbers[6]+$numbers[7]+$numbers[8]+$numbers[9]);
    
    return $entireSum;
}

    
    var_dump (sum(3,4,5,6,7,8,9,2,10,20));

?>