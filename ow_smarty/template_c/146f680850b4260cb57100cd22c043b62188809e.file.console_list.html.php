<?php /* Smarty version Smarty-3.1.12, created on 2015-09-14 10:06:50
         compiled from "E:\wamp\www\loov\ow_system_plugins\base\views\components\console_list.html" */ ?>
<?php /*%%SmartyHeaderCode:619855f6d47a2878b6-08802984%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '146f680850b4260cb57100cd22c043b62188809e' => 
    array (
      0 => 'E:\\wamp\\www\\loov\\ow_system_plugins\\base\\views\\components\\console_list.html',
      1 => 1437323480,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '619855f6d47a2878b6-08802984',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'viewAll' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.12',
  'unifunc' => 'content_55f6d47a2cddc4_82258634',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_55f6d47a2cddc4_82258634')) {function content_55f6d47a2cddc4_82258634($_smarty_tpl) {?><?php if (!is_callable('smarty_function_text')) include 'E:\\wamp\\www\\loov\\ow_smarty\\plugin\\function.text.php';
?><div class="ow_console_list_wrapper OW_ConsoleListContainer">
    <div class="ow_nocontent OW_ConsoleListNoContent"><?php echo smarty_function_text(array('key'=>'base+no_items'),$_smarty_tpl);?>
</div>
    <ul class="ow_console_list OW_ConsoleList">

    </ul>
    <div class="ow_preloader_content ow_console_list_preloader OW_ConsoleListPreloader" style="visibility: hidden"></div>
</div>

<?php if (!empty($_smarty_tpl->tpl_vars['viewAll']->value)){?>
    <div class="ow_console_view_all_btn_wrap"><a href="<?php echo $_smarty_tpl->tpl_vars['viewAll']->value['url'];?>
" class="ow_console_view_all_btn"><?php echo $_smarty_tpl->tpl_vars['viewAll']->value['label'];?>
</a></div>
<?php }?>
<?php }} ?>