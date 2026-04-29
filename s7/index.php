<?php 

    $table = [
        [" volvo"," 22"," 18","o"],
            [ " bmw" ,"20", " 13","22"],
              [ " golf", "18"," 2", "2"]];
    $data = "<tr><td>nom</td><td>stock</td><td>sold</td><td>sold</td><tr>";
              for($i=0;$i<count($table);$i++){
                
                $table1=$table[$i][0];
                $table2= $table[$i][1];
                $table3= $table[$i][2];
                      // echo $key . ":" .$vl ."\n";
                     $data = $data . "<tr>
                     <td>$table1</td>
                      <td>$table2</td>
                      <td>$table3</td>
                      </tr>";
    };
        echo "<table border='1' cellpadding='10'> $data </table>";

    

?>