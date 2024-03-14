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
         <h1> Science Class Quiz </h1>
        <p>  <?php
        global $sum;
        $sum=0;
        foreach($_POST as $key => $val){
            if(isset($val)){
                 if($key=="answer1" && $val=="24 hours")
                     $sum++;
                if($key=="answer2" && $val=="water")
                     $sum++;
                if($key=="answer3" && $val=="Muscles")
                     $sum++;
                if($key=="answer4" && $val=="length")
                     $sum++;
                if($key=="answer5" && $val=="larger than")
                     $sum++;
            }
        }
        echo 'your score is '.$sum.' out of 5';
        ?>
            </p> 
    </body>
</html>
