<?php
/* Smarty version 3.1.39, created on 2021-07-10 12:37:29
  from '/home/povilasbrilius/.atom-projects/prestashop-amd/admin7969rcygs/themes/default/template/content.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.39',
  'unifunc' => 'content_60e96a595cd120_37745165',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '8d91efb575572201813ae734353fa00308e21d44' => 
    array (
      0 => '/home/povilasbrilius/.atom-projects/prestashop-amd/admin7969rcygs/themes/default/template/content.tpl',
      1 => 1625908990,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_60e96a595cd120_37745165 (Smarty_Internal_Template $_smarty_tpl) {
?><div id="ajax_confirmation" class="alert alert-success hide"></div>
<div id="ajaxBox" style="display:none"></div>

<div class="row">
	<div class="col-lg-12">
		<?php if ((isset($_smarty_tpl->tpl_vars['content']->value))) {?>
			<?php echo $_smarty_tpl->tpl_vars['content']->value;?>

		<?php }?>
	</div>
</div>
<?php }
}
