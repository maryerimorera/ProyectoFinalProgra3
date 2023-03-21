<?php
/* Smarty version 4.3.0, created on 2023-02-21 02:36:01
  from 'C:\xampp\htdocs\progra3\lunes\semana6\view\templates\test.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.3.0',
  'unifunc' => 'content_63f42001775f17_97538324',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '21c772a049286dcdc890d03e65294805cf7f367e' => 
    array (
      0 => 'C:\\xampp\\htdocs\\progra3\\lunes\\semana6\\view\\templates\\test.tpl',
      1 => 1676943358,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_63f42001775f17_97538324 (Smarty_Internal_Template $_smarty_tpl) {
?><html>
<head>
<title><?php echo $_smarty_tpl->tpl_vars['nombre']->value;?>
</title>
</head>
<body>
<center><h1>Programaci&oacute;n 3</h1></center>



<?php
$_smarty_tpl->tpl_vars['__smarty_section_foo'] = new Smarty_Variable(array());
if (true) {
for ($__section_foo_0_iteration = 1, $_smarty_tpl->tpl_vars['__smarty_section_foo']->value['index'] = 0; $__section_foo_0_iteration <= 10; $__section_foo_0_iteration++, $_smarty_tpl->tpl_vars['__smarty_section_foo']->value['index'] += 2){
?>
 <h1>Hola</h1>
<?php
}
}
?>


<?php
$__section_indice_1_loop = (is_array(@$_loop=$_smarty_tpl->tpl_vars['colores']->value) ? count($_loop) : max(0, (int) $_loop));
$__section_indice_1_total = $__section_indice_1_loop;
$_smarty_tpl->tpl_vars['__smarty_section_indice'] = new Smarty_Variable(array());
if ($__section_indice_1_total !== 0) {
for ($__section_indice_1_iteration = 1, $_smarty_tpl->tpl_vars['__smarty_section_indice']->value['index'] = 0; $__section_indice_1_iteration <= $__section_indice_1_total; $__section_indice_1_iteration++, $_smarty_tpl->tpl_vars['__smarty_section_indice']->value['index']++){
?>
  colores: <?php echo $_smarty_tpl->tpl_vars['colores']->value[(isset($_smarty_tpl->tpl_vars['__smarty_section_indice']->value['index']) ? $_smarty_tpl->tpl_vars['__smarty_section_indice']->value['index'] : null)];?>
<br />
<?php
}
}
?>

<hr>

<?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['colores']->value, 'col');
$_smarty_tpl->tpl_vars['col']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['col']->value) {
$_smarty_tpl->tpl_vars['col']->do_else = false;
?>
  Color: <?php echo $_smarty_tpl->tpl_vars['col']->value;?>
<br />
<?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>

<hr>


<?php if ($_smarty_tpl->tpl_vars['perfil']->value == "1") {?>
	Menu A
<?php } else { ?>
	Menu B
<?php }?>



</body>
</html>
<?php }
}
