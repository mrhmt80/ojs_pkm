<?php
/* Smarty version 3.1.33, created on 2020-06-24 01:58:43
  from 'app:controllersgridgridRowSel' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.33',
  'unifunc' => 'content_5ef29733305f22_59957348',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '9dd405d6cbf63d430a9e4f383c94fd3592a082aa' => 
    array (
      0 => 'app:controllersgridgridRowSel',
      1 => 1575681981,
      2 => 'app',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5ef29733305f22_59957348 (Smarty_Internal_Template $_smarty_tpl) {
?><input type="checkbox" id="select-<?php echo call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'escape' ][ 0 ], array( $_smarty_tpl->tpl_vars['elementId']->value ));?>
" name="<?php echo call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'escape' ][ 0 ], array( $_smarty_tpl->tpl_vars['selectName']->value ));?>
[]" style="height: 15px; width: 15px;" value="<?php echo call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'escape' ][ 0 ], array( $_smarty_tpl->tpl_vars['elementId']->value ));?>
" <?php if ($_smarty_tpl->tpl_vars['selected']->value) {?>checked="checked"<?php }?> />
<?php }
}
