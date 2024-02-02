<?php
/* Smarty version 4.3.4, created on 2024-02-02 19:25:19
  from '/var/www/html/resources/views/lottery/index.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.3.4',
  'unifunc' => 'content_65bd419f6856c6_76477674',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '9658889f77875e33f5beb9637913a16920830a17' => 
    array (
      0 => '/var/www/html/resources/views/lottery/index.tpl',
      1 => 1706845165,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_65bd419f6856c6_76477674 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_loadInheritance();
$_smarty_tpl->inheritance->init($_smarty_tpl, true);
?>

<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_43877847465bd419f680e56_91664426', 'title');
?>

<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_25610121665bd419f6819d9_73618768', 'contents');
?>

<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_90378524765bd419f683ad2_21460006', 'scripts');
?>

<?php $_smarty_tpl->inheritance->endChild($_smarty_tpl, '../layouts/main.tpl');
}
/* {block 'title'} */
class Block_43877847465bd419f680e56_91664426 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'title' => 
  array (
    0 => 'Block_43877847465bd419f680e56_91664426',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>
Lottery | Home<?php
}
}
/* {/block 'title'} */
/* {block 'contents'} */
class Block_25610121665bd419f6819d9_73618768 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'contents' => 
  array (
    0 => 'Block_25610121665bd419f6819d9_73618768',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

    <div class="main__block">
        <div class="button__block">
            <div class="title__block">
                <p class="text-white">Users: <?php ob_start();
echo $_smarty_tpl->tpl_vars['userCount']->value;
$_prefixVariable1 = ob_get_clean();
echo $_prefixVariable1;?>
</p>
                <p class="text-white">Tickets: <span id="ticketCount"><?php ob_start();
echo $_smarty_tpl->tpl_vars['lotteryCount']->value;
$_prefixVariable2 = ob_get_clean();
echo $_prefixVariable2;?>
</span></p>
            </div>
            <div class="form-group button__form-group mb-3">
                <?php if ($_smarty_tpl->tpl_vars['lotteryCount']->value) {?>
                    <a href="<?php ob_start();
echo route('lottery.lottery');
$_prefixVariable3 = ob_get_clean();
echo $_prefixVariable3;?>
" type="button" class="btn btn-lg btn-info form-control mb-3">START NEW LOTTERY</a>
                <?php }?>
                <button type="button" id="generateTickets" class="btn btn-lg btn-primary form-control">ADD NEW LOTTERY TICKETS</button>

            </div>
            <div class="preloader" style="visibility: hidden">
                <img src="<?php ob_start();
echo asset('/images/ZKZg.gif');
$_prefixVariable4 = ob_get_clean();
echo $_prefixVariable4;?>
" width="70" alt="preloader">
            </div>
        </div>
    </div>
    <div class="wrap"></div>
<?php
}
}
/* {/block 'contents'} */
/* {block 'scripts'} */
class Block_90378524765bd419f683ad2_21460006 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'scripts' => 
  array (
    0 => 'Block_90378524765bd419f683ad2_21460006',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

    <?php echo '<script'; ?>
>
        $(function () {
            $('#generateTickets').click(function () {
                $('.button__form-group button').each(function () {
                    $(this).css('visibility', 'hidden');
                });
                $('.preloader').css('visibility', 'visible');
                let formData = {
                    _token: '<?php ob_start();
echo $_smarty_tpl->tpl_vars['csrfToken']->value;
$_prefixVariable5 = ob_get_clean();
echo $_prefixVariable5;?>
',
                }
                $.ajax({
                    url: '<?php ob_start();
echo route('tickets.generate');
$_prefixVariable6 = ob_get_clean();
echo $_prefixVariable6;?>
',
                    type: 'POST',
                    data: formData,
                    success: function (result) {
                        $('#ticketCount').text(result.count);
                        $('.button__form-group button').each(function () {
                            $(this).css('visibility', 'visible');
                        });
                        $('.preloader').css('visibility', 'hidden');
                    }
                });
            });
        });
    <?php echo '</script'; ?>
>
<?php
}
}
/* {/block 'scripts'} */
}
