<?php

    $player = [0=>[],1=>[],2=>[],3=>[]];
    $poker = range(0,51);
    
    shuffle($poker);

    $flag = 0;
    foreach($poker as $k=>$v){
        /*if($k%4 === 0){
            $flag = 0;
        }
        array_push($player[$flag],$v);
        $flag++;*/
        $player[$k%4][(int)$k/4] = $v;
    }


    echo "<table border='1' width='100%'>";
    $suits = ["&spades;","&hearts;","&diams;","&clubs;"];
    $values = ['A',2,3,4,5,6,7,8,9,10,'J','Q','K'];
        for($i=0;$i<4;$i++){
            sort($player[$i]);
            echo "<tr><td>p".($i+1)."</td>";
            foreach($player[$i] as $k=>$v){
            echo "<td>{$suits[(int)($v/13)]}{$values[$v%13]}</td>";
            }
            echo "</tr>";
        }
    echo "</table>";
    ?>