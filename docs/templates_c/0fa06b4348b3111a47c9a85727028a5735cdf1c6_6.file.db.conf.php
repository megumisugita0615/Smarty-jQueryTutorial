<?php /* Smarty version 4.3.0, created on 2023-02-12 15:42:04
         compiled from '/Users/megumisugita/Projects/Smarty-jQueryTutorial/smarty/html/config/db.conf' */ ?>
<?php
/* Smarty version 4.3.0, created on 2023-02-12 15:42:04
  from '/Users/megumisugita/Projects/Smarty-jQueryTutorial/smarty/html/config/db.conf' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.3.0',
  'unifunc' => 'content_63e908cce61382_84864570',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '0fa06b4348b3111a47c9a85727028a5735cdf1c6' => 
    array (
      0 => '/Users/megumisugita/Projects/Smarty-jQueryTutorial/smarty/html/config/db.conf',
      1 => 1676215716,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_63e908cce61382_84864570 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->smarty->ext->configLoad->_loadConfigVars($_smarty_tpl, array (
  'sections' => 
  array (
    'mysql' => 
    array (
      'vars' => 
      array (
        'DSN' => 'mysql:dbname=test_db; host=mysql; charset=utf8',
        'USER' => 'smarty',
        'PASS' => 'password',
      ),
    ),
  ),
  'vars' => 
  array (
    'url' => 'localhost',
    'title' => 'Smarty',
  ),
));
}
}
