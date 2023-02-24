<?php
/* Smarty version 4.3.0, created on 2023-02-13 15:38:57
  from '/var/www/html/templates/designers/var.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.3.0',
  'unifunc' => 'content_63e9db0109d529_90885451',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'd3c21a6f009e3de0564c4ecc48f51eed57b1f3a8' => 
    array (
      0 => '/var/www/html/templates/designers/var.tpl',
      1 => 1676270335,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_63e9db0109d529_90885451 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_assignInScope('simple', 'simple, non array/object');
$_smarty_tpl->_assignInScope('array', array('item1','item2','item3','item4'));
$_smarty_tpl->_assignInScope('ass_array', array('y'=>'yellow','b'=>'blue','r'=>'red','w'=>'white'));?>


<h2><?php echo $_smarty_tpl->tpl_vars['var']->value;?>
</h2>
<div>
    <h3>Basic</h3>
    <ul>
        <li>{ $simple } = <?php echo $_smarty_tpl->tpl_vars['simple']->value;?>
</li>
        <li>{ $array[2] } = <?php echo $_smarty_tpl->tpl_vars['array']->value[2];?>
</li>
        <li>{ $ass_array.y] } = <?php echo $_smarty_tpl->tpl_vars['ass_array']->value['y'];?>
</li>
    </ul>
</div><?php }
}
