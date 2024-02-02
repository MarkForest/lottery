<?php
/* Smarty version 4.3.4, created on 2024-02-02 19:25:24
  from '/var/www/html/resources/views/layouts/main.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.3.4',
  'unifunc' => 'content_65bd41a4afae16_56859202',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '9c3408b920528bdff3ee663ac8fde04f05fad5c9' => 
    array (
      0 => '/var/www/html/resources/views/layouts/main.tpl',
      1 => 1706849747,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_65bd41a4afae16_56859202 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_loadInheritance();
$_smarty_tpl->inheritance->init($_smarty_tpl, false);
?>
<!DOCTYPE html>
<html lang="<?php ob_start();
echo App::getLocale();
$_prefixVariable16 = ob_get_clean();
echo $_prefixVariable16;?>
">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title><?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_199874458065bd41a4af8054_27023325', 'title');
?>
</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
    <link rel="stylesheet" href="<?php ob_start();
echo asset('css/app.css');
$_prefixVariable17 = ob_get_clean();
echo $_prefixVariable17;?>
">
</head>
<body>
<div class="content">
    <?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_120755145765bd41a4af9530_92104549', 'contents');
?>

</div>
<?php echo '<script'; ?>
 src="https://ajax.googleapis.com/ajax/libs/jquery/3.7.1/jquery.min.js"><?php echo '</script'; ?>
>
<?php echo '<script'; ?>
 src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous"><?php echo '</script'; ?>
>
<?php echo '<script'; ?>
 src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous"><?php echo '</script'; ?>
>
<?php echo '<script'; ?>
 src="<?php ob_start();
echo asset('js/jquery.spincrement.min.js');
$_prefixVariable18 = ob_get_clean();
echo $_prefixVariable18;?>
"><?php echo '</script'; ?>
>
<?php echo '<script'; ?>
 src="<?php ob_start();
echo asset('js/app.js');
$_prefixVariable19 = ob_get_clean();
echo $_prefixVariable19;?>
"><?php echo '</script'; ?>
>
<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_184485251365bd41a4afa888_71948329', 'scripts');
?>

</body>
</html>
<?php }
/* {block 'title'} */
class Block_199874458065bd41a4af8054_27023325 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'title' => 
  array (
    0 => 'Block_199874458065bd41a4af8054_27023325',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>
default<?php
}
}
/* {/block 'title'} */
/* {block 'contents'} */
class Block_120755145765bd41a4af9530_92104549 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'contents' => 
  array (
    0 => 'Block_120755145765bd41a4af9530_92104549',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
}
}
/* {/block 'contents'} */
/* {block 'scripts'} */
class Block_184485251365bd41a4afa888_71948329 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'scripts' => 
  array (
    0 => 'Block_184485251365bd41a4afa888_71948329',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
}
}
/* {/block 'scripts'} */
}
