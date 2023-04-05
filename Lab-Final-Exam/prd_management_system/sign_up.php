<html>
    <head>
      <title>Sign Up</title>
    </head>

    <body>
        <h1 align="center"> PRD Management System </h1>

        <form align="center" menthod="POST" action="sign_up_check.php" enctype="">

        <fieldset>
          <legend><b> Sign Up Now </b></legend>

          <table align="center">
            <tr align="left">
              <th> Username: </th>
              <th> <input type="text" name="username" id="username" value=""/> </th>
            </tr>

            <tr align="left">
              <th> E-mail: </th>
              <th> <input type="email" name="email" id="email" value=""/> </th>
            </tr>

            <tr align="left">
              <th> Password: </th>
              <th> <input type="password" name="password" id="password" value=""/> </th>
            </tr>

            <tr align="left">
              <th> Re-type Password: </th>
              <th> <input type="password" name="retypepassword" id="retypepassword" value=""/> </th>
            </tr>
          
          </table>
          
          <br/><br/>
          
          <input type="submit" name="submit" value="Sign Up"/>
          
          <br/> <br/>

        <?php

        if(isset($_REQUEST['msg']))

          {
            if($_REQUEST['msg'] == 'nullInputs')
              {
                echo("Fill all fields.");
              }
            elseif($_REQUEST['msg'] == 'invalidEmail')
              {
                echo("E-mail is incorrect.");
              }
            elseif($_REQUEST['msg'] == 'invalidPassword')
              {
                echo("1. Password must be at least 8 characters.<br/>
                      2. Must be contain at least 1 symbol.<br/>
                      3. Must be contain at least 1 number.<br/>");
              }
            elseif($_REQUEST['msg'] == 'mismatchPass')
              {
                echo(" Wrong Password");
              }
            elseif($_REQUEST['msg'] == 'signupFailed')
              {
                echo("Error to Sign Up");
              }
          }

        ?>

        </fieldset>
      </form>
  </body>
</html>