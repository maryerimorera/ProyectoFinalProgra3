<html>
  <head>
    <title></title>
  </head>
  <body>

    <h1>Login</h1>

      <form action="index.php" method="post">
         <input type="hidden"  name="accion" value="validar_login">
          <table>
            <tr>
              <td>Usuario</td>
              <td><input type="text" name='txt_usuario'></td>
            </tr>
            <tr>
              <td>Password</td>
              <td><input type="password" name='pwd_password'></td>
            </tr>
            <tr>
              <td colspan="2"><input type="submit" value='Entrar'></td>
            </tr>
          </table>
      </form>
  </body>
</html>
