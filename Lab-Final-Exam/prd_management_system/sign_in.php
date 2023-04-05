<html>
    <head>
      <title> Sign In </title>
    </head>

    <body>
      <h1 align="center"> PRD Management System </h1>

      <form align="center" menthod="POST" action="sign_in_check.php" enctype="">

      <fieldset>
        <legend><b> Sign In </b></legend>

        <br/>

        <table align="center">

          <tr align="left">
            <th> E-mail: </th>
            <th> <input type="email" name="email" id="email" value=""/> </th>
          </tr>

          <tr align="left">
            <th> Password: </th>
            <th> <input type="password" name="password" id="password" value=""/> </th>
          </tr>

        </table>

        <br/>

        <input type="submit" name="submit" value="Sign In"/>
        
        <br/> <br/>

        <?php

        session_start();
                    
          if(isset($_REQUEST['msg']))
            {
              if($_REQUEST['msg'] == 'nullInputs')
                {
                  echo("Fill all the fields.");
                }

              elseif($_REQUEST['msg'] == 'userNotFound')
                {
                  echo("E-mail or Password is wrong. Try again !");
                }
            }

        ?>
        

      </fieldset>
    </form>
  </body>
</html>