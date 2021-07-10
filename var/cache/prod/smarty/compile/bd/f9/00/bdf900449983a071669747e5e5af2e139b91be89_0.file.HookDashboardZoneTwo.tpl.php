<?php
/* Smarty version 3.1.39, created on 2021-07-10 12:37:29
  from '/home/povilasbrilius/.atom-projects/prestashop-amd/modules/ps_metrics/views/templates/hook/HookDashboardZoneTwo.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.39',
  'unifunc' => 'content_60e96a593230d0_51434037',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'bdf900449983a071669747e5e5af2e139b91be89' => 
    array (
      0 => '/home/povilasbrilius/.atom-projects/prestashop-amd/modules/ps_metrics/views/templates/hook/HookDashboardZoneTwo.tpl',
      1 => 1625909651,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_60e96a593230d0_51434037 (Smarty_Internal_Template $_smarty_tpl) {
?>
<link href="<?php echo call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'escape' ][ 0 ], array( $_smarty_tpl->tpl_vars['pathDashboardVendor']->value,'htmlall','UTF-8' ));?>
" rel=preload as=script>
<link href="<?php echo call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'escape' ][ 0 ], array( $_smarty_tpl->tpl_vars['pathDashboardApp']->value,'htmlall','UTF-8' ));?>
" rel=preload as=script>

<div id="dashboardApp"></div>

<?php echo '<script'; ?>
 src="<?php echo call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'escape' ][ 0 ], array( $_smarty_tpl->tpl_vars['pathDashboardVendor']->value,'htmlall','UTF-8' ));?>
"><?php echo '</script'; ?>
>
<?php echo '<script'; ?>
 src="<?php echo call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'escape' ][ 0 ], array( $_smarty_tpl->tpl_vars['pathDashboardApp']->value,'htmlall','UTF-8' ));?>
"><?php echo '</script'; ?>
>
<?php }
}
