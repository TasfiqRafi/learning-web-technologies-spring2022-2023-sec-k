<html>

  <head>

    <title> PHP Array </title>
    
  </head>

  <body>
    <table border="1" align="center" width="400px">
      
      <tr>

        <td>
          The array to declare
        </td>


        <td colspan="2">
          Shapes to print
        </td>
        
      </tr>

      
      <tr>

        <td> 
          <?php
            $array = 
              [
                [1, 2, 3, 'A'],
                [1, 2, 'B', 'C'],
                [1, 'D', 'E', 'F']
              ];

            
              for($i = 0; $i < count($array); $i++)

                {
                  for($j = 0; $j < count($array[$i]); $j++)
                    {
                      echo($array[$i][$j]."   ");
                    }
                      echo("<br/>");
                }

          ?>     
        </td>



        <td> 
          <?php
            for ($i = 1; $i <= 3; $i++) 
              {
                for ($j = 1; $j <= $i; $j++) 
                  {
                    echo $j;
                  }

                    echo("<br>");
              }
          ?>
        </td>



        <td>
          <?php
            $counter = 65;
              for ($i = 1; $i <= 3; $i++)
                {
                  for ($j = 1; $j <= $i; $j++) 
                    {
                      echo chr($counter);
                      $counter++;
                    }
                      echo "<br>";
                }
          ?>
        </td>
      </tr>


      </table>
    </body>
</html>