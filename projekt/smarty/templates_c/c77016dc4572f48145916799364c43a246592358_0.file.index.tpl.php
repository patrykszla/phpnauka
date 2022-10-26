<?php
/* Smarty version 4.2.1, created on 2022-10-26 21:23:02
  from 'C:\xampp_php8\htdocs\phpnauka\projekt\smarty\templates\index.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.2.1',
  'unifunc' => 'content_63598916938607_81313198',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'c77016dc4572f48145916799364c43a246592358' => 
    array (
      0 => 'C:\\xampp_php8\\htdocs\\phpnauka\\projekt\\smarty\\templates\\index.tpl',
      1 => 1666812180,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_63598916938607_81313198 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_checkPlugins(array(0=>array('file'=>'C:\\xampp_php8\\htdocs\\phpnauka\\projekt\\libs\\vendor\\smarty\\smarty\\libs\\plugins\\function.math.php','function'=>'smarty_function_math',),));
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title><?php echo $_smarty_tpl->tpl_vars['title']->value;?>
</title>
</head>
<body>
    <p>Cześć <strong><?php echo $_smarty_tpl->tpl_vars['name']->value;?>
</strong>!</p>
    <p>Witaj na mojej stronie</p>
    <p>Zmienna <strong>$x</strong> = <?php echo $_smarty_tpl->tpl_vars['x']->value;?>
, a <strong>$y</strong> = <?php echo $_smarty_tpl->tpl_vars['y']->value;?>
</p>
    <p><?php echo $_smarty_tpl->tpl_vars['x']->value;?>
 * <?php echo $_smarty_tpl->tpl_vars['y']->value;?>
 = <?php echo smarty_function_math(array('equation'=>"x * y",'x'=>$_smarty_tpl->tpl_vars['x']->value,'y'=>$_smarty_tpl->tpl_vars['y']->value),$_smarty_tpl);?>
</p>

    <p>
                <?php if ($_smarty_tpl->tpl_vars['x']->value > 100) {?>
            Wartosc zmiennej <strong>$x</strong> jest wieksza od 1000!
        <?php }?>
    </p>
    <p>
        Początkowe liczby pierwsze to:
        <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['liczby']->value, 'liczba');
$_smarty_tpl->tpl_vars['liczba']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['liczba']->value) {
$_smarty_tpl->tpl_vars['liczba']->do_else = false;
?>
            <?php echo $_smarty_tpl->tpl_vars['liczba']->value;?>
,
        <?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
    </p>
</body>
</html><?php }
}
