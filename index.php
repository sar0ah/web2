<!DOCTYPE html>
<!--
To change this license header, choose License Headers in Project Properties.
To change this template file, choose Tools | Templates
and open the template in the editor.
-->
<html>
    <head>
        <meta charset="UTF-8">
        <title></title>
    </head>
    <body>
        
        <?php
        // put your code here
        define("NAME", "Sarah");
        $numberOfToday= rand(1,10);
        echo "<p>hello ".NAME."!</p>";
        echo "<p> your nymber today is </p>".$numberOfToday;
        if($numberOfToday >0 && $numberOfToday<6)
            echo"<p> good luck today ! </p>";
        else
            echo "<p>have a nice day !</p>";
        ?>
    </body>
</html>
