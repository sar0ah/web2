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
$student=array();
$student["Ahmed"]=array("quizzes"=>10, "homework"=>9, "midterm"=>9.5,"project"=>10,"project title"=>"Planets");
$student["Bassam"]=array("quizzes"=>9, "homework"=>8.5, "midterm"=>9,"project"=>8,"project title"=>"Minerls");
$student["Majed"]=array("quizzes"=>9.5, "homework"=>10, "midterm"=>10,"project"=>9.5,"project title"=>"Planets");

        ?>
        <table><tr><th>Name</th>
                <th>Quizzes</th>
                <th>Homework</th>
                <th>Midterm</th>
                <th>Project</th>
                <th>Project title</th>
                <th>Total work</th>
            </tr>
            <?php 
                    foreach ($student as $key => $value) {
                        echo '<tr> <td>'.$key.'</td>';
                        
                        
                        
                        
                        foreach ($value as $k => $val) {
                            echo '<td>'.$val.'</td>';
                            global $total;
                            $total=(int)$total;
                            $val=(int)$val;
                            $total+=$val;
                            
                            
                        }
                        echo '<td>'.$total.'</td>';
                        echo '</tr>';
                    }
            ?>
        </table>
    </body>
</html>
