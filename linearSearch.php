<?php 
    $array = array (7 , 6 , 4 , 5 , 8 , 2 , 1);
    $count = 0;
    $searchElement = 5;
    $arrayIndex = 0;

    if (is_int($searchElement)) {
        foreach ($array as $index => $value) {
            if ($searchElement == $value) {
                $count++;
                $arrayIndex = $index;
            } 
        }
    
        if ($count >= 1) {
            echo "Element Found at index[$arrayIndex] == $searchElement ";
        }
    
        else {
            echo "Element Not Found !!";
        }
    }

    else {
        echo "Invalid Entry !!";
    }  
?>
