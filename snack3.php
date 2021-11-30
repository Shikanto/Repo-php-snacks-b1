<pre>
<?php

    $randomNumbers = [];

    for ($i = 0; $i <= 15; $i ++) {
	
        $number = rand(0, 100);
        if ( !in_array($number, $randomNumbers)){
            array_push($randomNumbers, $number);
        } else {
           $i--;
        };

        
    };

    //var_dump($randomNumbers);
    //print_r($randomNumbers);

    for ($i=0; $i < count($randomNumbers) ; $i++) { 
        echo $randomNumbers[$i] . '<br>';
    };
?>
</pre>