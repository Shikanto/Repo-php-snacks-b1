<pre>
<?php

    $arrayArray = [
        
        '26-08-2020' => [
            [
                'event' => 'nasce Gabriele',
                'type' =>'Oddio divento papà',
                'comment' => 'Gabriele sei stupendo'
            ]
        ],
        '04-03-2021' => [
            [
                'event' => 'è il mio Compleanno',
                'type' => 'Faccio 30 anni',
                'comment' => 'Porca miseria il tempo vola'
            ]
        ],
        '29-11-2021' => [
            [
                'event' => 'esercio PHP',
                'type' => 'snack2',
                'comment' => 'Peggio delle matriosche'
            ]
        ],
    ];

   $arrayKeys = array_keys($arrayArray);


    for ($i = 0; $i < count($arrayKeys); $i ++) {
        
        $key = $arrayKeys[$i];
        $singleArray = $arrayArray[$key];

        //var_dump($singleArray);

        //echo $key . '<br>'; 

        for ($x=0; $x < count($singleArray); $x++) { 
            $datesArray = $singleArray[$x];
            $event = $datesArray['event'];
            $type = $datesArray['type'];
            $comment = $datesArray['comment'];

            echo $key . '<br>'
                . 'Evento: ' . $event . '<br>'
                . 'Tipo di Evento: ' . $type . '<br>'
                . 'Commento: ' . $comment . '<br>';
        }
    }; 

    //var_dump($arrayKeys);



?>
</pre>