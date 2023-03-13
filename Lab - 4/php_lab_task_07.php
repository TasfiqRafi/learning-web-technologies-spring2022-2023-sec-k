<html>

  <head>

    <title> php loop </title>

  </head>


  <body>

  <table border="1" align="center" width="400px">

    <tr>
      <td>
        <?php 
          for ($i = 1; $i <= 3; $i++) 
            {
          for ($j = 1; $j <= $i; $j++) 
            {
              echo "*";
            }
              echo "<br/>";
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
                  echo "<br/>";
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
                    echo "<br/>";
              }
        ?>
      </td>


    </tr>


  </table>
  </body>
</html>