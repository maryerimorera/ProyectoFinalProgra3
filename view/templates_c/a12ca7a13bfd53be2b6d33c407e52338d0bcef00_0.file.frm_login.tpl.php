<?php
/* Smarty version 4.3.0, created on 2023-03-17 02:13:48
  from 'C:\xampp\htdocs\progra3\proyectofinal\view\templates\frm_login.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.3.0',
  'unifunc' => 'content_6413beccb1ea69_32600031',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'a12ca7a13bfd53be2b6d33c407e52338d0bcef00' => 
    array (
      0 => 'C:\\xampp\\htdocs\\progra3\\proyectofinal\\view\\templates\\frm_login.tpl',
      1 => 1676946912,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_6413beccb1ea69_32600031 (Smarty_Internal_Template $_smarty_tpl) {
?><html>
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
<?php }
}
