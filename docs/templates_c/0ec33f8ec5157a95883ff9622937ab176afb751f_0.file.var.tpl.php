<?php
/* Smarty version 4.3.0, created on 2023-02-13 13:02:44
  from '/var/www/html/templates/examples/var.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.3.0',
  'unifunc' => 'content_63e9b664323510_15673430',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '0ec33f8ec5157a95883ff9622937ab176afb751f' => 
    array (
      0 => '/var/www/html/templates/examples/var.tpl',
      1 => 1676260962,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_63e9b664323510_15673430 (Smarty_Internal_Template $_smarty_tpl) {
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
        <li>{ $ass_array['y'] } = <?php echo $_smarty_tpl->tpl_vars['ass_array']->value['y'];?>
</li>
    </ul>
</div><?php }
}
