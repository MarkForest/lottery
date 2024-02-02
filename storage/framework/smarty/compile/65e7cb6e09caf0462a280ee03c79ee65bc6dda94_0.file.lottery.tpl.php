<?php
/* Smarty version 4.3.4, created on 2024-02-02 19:25:24
  from '/var/www/html/resources/views/lottery/lottery.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.3.4',
  'unifunc' => 'content_65bd41a4aab607_81336612',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '65e7cb6e09caf0462a280ee03c79ee65bc6dda94' => 
    array (
      0 => '/var/www/html/resources/views/lottery/lottery.tpl',
      1 => 1706901311,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_65bd41a4aab607_81336612 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_loadInheritance();
$_smarty_tpl->inheritance->init($_smarty_tpl, true);
?>

<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_140045748565bd41a4a8fe76_10192093', 'title');
?>

<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_201467239265bd41a4a909d0_40821606', 'contents');
?>

<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_58265322865bd41a4aa0b52_86274372', 'scripts');
?>

<?php $_smarty_tpl->inheritance->endChild($_smarty_tpl, '../layouts/main.tpl');
}
/* {block 'title'} */
class Block_140045748565bd41a4a8fe76_10192093 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'title' => 
  array (
    0 => 'Block_140045748565bd41a4a8fe76_10192093',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>
Lottery | Home<?php
}
}
/* {/block 'title'} */
/* {block 'contents'} */
class Block_201467239265bd41a4a909d0_40821606 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'contents' => 
  array (
    0 => 'Block_201467239265bd41a4a909d0_40821606',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

    <div class="container">
        <div class="lottery__content pt-4">
            <div class="col-8 offset-2 mt-4 mb-5">
                <div></div>
                <button type="button" id="startLottery" class="btn btn-info form-control">START LOTTERY</button>
            </div>
            <div class="row">
                <div class="col-5 offset-1 mt-4">
                    <div class="row">
                        <div class="col-12">
                            <table class="table table-borderless table-striped table_custom">
                                <h4 class="table-title text-white">Prizes</h4>
                                <thead>
                                <tr>
                                    <th scope="col">Name</th>
                                    <th scope="col">Prize</th>
                                    <th scope="col">Tickets</th>
                                </tr>
                                </thead>
                                <tbody>
                                <tr>
                                    <td>Main prize</td>
                                    <td>$20000</td>
                                    <td>
                                        <div id="firstPrizes">
                                            <span class="badge badge-lg bg-danger m-2">9999999</span>
                                        </div>
                                    </td>
                                </tr>
                                <tr>
                                    <td>Second prizes</td>
                                    <td>$5000</td>
                                    <td>
                                        <div id="secondPrizes">
                                            <span class="badge badge-lg bg-danger m-2">9999999</span>
                                            <span class="badge badge-lg bg-danger m-2">9999999</span>
                                            <span class="badge badge-lg bg-danger m-2">9999999</span>
                                        </div>
                                    </td>
                                </tr>
                                <tr>
                                    <td>Third prizes</td>
                                    <td>$1000</td>
                                    <td>
                                        <div id="thirdPrizes">
                                            <span class="badge badge-lg bg-danger m-2">9999999</span>
                                            <span class="badge badge-lg bg-danger m-2">9999999</span>
                                            <span class="badge badge-lg bg-danger m-2">9999999</span>
                                            <span class="badge badge-lg bg-danger m-2">9999999</span>
                                            <span class="badge badge-lg bg-danger m-2">9999999</span>
                                        </div>
                                    </td>
                                </tr>
                                <tr>
                                    <td>Other prizes</td>
                                    <td>$500</td>
                                    <td>
                                        <div id="otherPrizes">
                                            <span class="badge badge-lg bg-danger m-2">9999999</span>
                                            <span class="badge badge-lg bg-danger m-2">9999999</span>
                                            <span class="badge badge-lg bg-danger m-2">9999999</span>
                                            <span class="badge badge-lg bg-danger m-2">9999999</span>
                                            <span class="badge badge-lg bg-danger m-2">9999999</span>
                                            <span class="badge badge-lg bg-danger m-2">9999999</span>
                                            <span class="badge badge-lg bg-danger m-2">9999999</span>
                                            <span class="badge badge-lg bg-danger m-2">9999999</span>
                                            <span class="badge badge-lg bg-danger m-2">9999999</span>
                                            <span class="badge badge-lg bg-danger m-2">9999999</span>
                                            <span class="badge badge-lg bg-danger m-2">9999999</span>
                                            <span class="badge badge-lg bg-danger m-2">9999999</span>
                                            <span class="badge badge-lg bg-danger m-2">9999999</span>
                                            <span class="badge badge-lg bg-danger m-2">9999999</span>
                                            <span class="badge badge-lg bg-danger m-2">9999999</span>
                                            <span class="badge badge-lg bg-danger m-2">9999999</span>
                                            <span class="badge badge-lg bg-danger m-2">9999999</span>
                                            <span class="badge badge-lg bg-danger m-2">9999999</span>
                                            <span class="badge badge-lg bg-danger m-2">9999999</span>
                                            <span class="badge badge-lg bg-danger m-2">9999999</span>
                                        </div>
                                    </td>
                                </tr>
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
                <div class="col-6 mt-4">
                    <div class="row">
                        <div class="col-12 mt-4">
                            <table class="table table-borderless table-striped table_custom" id="tableMainWinner">
                                <h4 class="table-title text-white">Main Winner</h4>
                                <thead>
                                <tr>
                                    <th scope="col">Name</th>
                                    <th scope="col">Email</th>
                                    <th scope="col">Tickets</th>
                                </tr>
                                </thead>
                                <tbody>

                                </tbody>
                            </table>
                        </div>
                        <div class="col-12 mt-4">
                            <hr>
                        </div>
                        <div class="col-12 mt-4">
                            <table class="table table-borderless table-striped table_custom" id="tableSecondWinners">
                                <h4 class="table-title text-white">Second Winners</h4>
                                <thead>
                                <tr>
                                    <th scope="col">Name</th>
                                    <th scope="col">Email</th>
                                    <th scope="col">Tickets</th>
                                </tr>
                                </thead>
                                <tbody>

                                </tbody>
                            </table>
                        </div>
                        <div class="col-12 mt-4">
                            <hr>
                        </div>
                        <div class="col-12 mt-4">
                            <table class="table table-borderless table-striped table_custom" id="tableThirdWinners">
                                <h4 class="table-title text-white">Third Winners</h4>
                                <thead>
                                <tr>
                                    <th scope="col">Name</th>
                                    <th scope="col">Email</th>
                                    <th scope="col">Tickets</th>
                                </tr>
                                </thead>
                                <tbody>

                                </tbody>
                            </table>
                        </div>
                        <div class="col-12 mt-4">
                            <hr>
                        </div>
                        <div class="col-12 mt-4">
                            <table class="table table-borderless table-striped table_custom" id="tableOtherWinners">
                                <h4 class="table-title text-white">Other Winners</h4>
                                <thead>
                                <tr>
                                    <th scope="col">Name</th>
                                    <th scope="col">Email</th>
                                    <th scope="col">Tickets</th>
                                </tr>
                                </thead>
                                <tbody>

                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-8 offset-2 mt-4">
                <hr>
            </div>
            <div class="col-8 offset-2 mt-4">
                <table class="table table-borderless table-striped table_custom">

                    <h4 class="table-title text-white">List of users with tickets</h4>
                    <thead>
                    <tr>
                        <th scope="col">Name</th>
                        <th scope="col">Email</th>
                        <th scope="col">Tickets</th>
                    </tr>
                    </thead>
                    <tbody>
                        <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['users']->value, 'user');
$_smarty_tpl->tpl_vars['user']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['user']->value) {
$_smarty_tpl->tpl_vars['user']->do_else = false;
?>
                            <tr>
                                <td><?php ob_start();
echo $_smarty_tpl->tpl_vars['user']->value->name;
$_prefixVariable1 = ob_get_clean();
echo $_prefixVariable1;?>
</td>
                                <td><?php ob_start();
echo $_smarty_tpl->tpl_vars['user']->value->email;
$_prefixVariable2 = ob_get_clean();
echo $_prefixVariable2;?>
</td>
                                <td>
                                    <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['user']->value->tickets, 'ticket');
$_smarty_tpl->tpl_vars['ticket']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['ticket']->value) {
$_smarty_tpl->tpl_vars['ticket']->do_else = false;
?>
                                        <span class="badge bg-success">
                                            <?php ob_start();
echo $_smarty_tpl->tpl_vars['ticket']->value->number;
$_prefixVariable3 = ob_get_clean();
echo $_prefixVariable3;?>

                                        </span>
                                    <?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
                                </td>
                            </tr>
                        <?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
                    </tbody>
                </table>
            </div>
        </div>
    </div>
    <div class="wrap"></div>
<?php
}
}
/* {/block 'contents'} */
/* {block 'scripts'} */
class Block_58265322865bd41a4aa0b52_86274372 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'scripts' => 
  array (
    0 => 'Block_58265322865bd41a4aa0b52_86274372',
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
$_prefixVariable4 = ob_get_clean();
echo $_prefixVariable4;?>
',
                }
                $.ajax({
                    url: '<?php ob_start();
echo route('tickets.generate');
$_prefixVariable5 = ob_get_clean();
echo $_prefixVariable5;?>
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
        $('#startLottery').click(function () {
            let formData = {
                _token: '<?php ob_start();
echo $_smarty_tpl->tpl_vars['csrfToken']->value;
$_prefixVariable6 = ob_get_clean();
echo $_prefixVariable6;?>
',
            }
            $.ajax({
                url: '<?php ob_start();
echo route('lottery.start');
$_prefixVariable7 = ob_get_clean();
echo $_prefixVariable7;?>
',
                type: 'POST',
                data: formData,
                success: function (result) {
                    let html = '';
                    for (let item of result.firstPrizes) {
                        html += '<span class="badge badge-lg bg-danger m-2">' + item + '</span>';
                    }
                    $('#firstPrizes').html(html);

                    html = '';
                    for (let item of result.secondPrizes) {
                        html += '<span class="badge badge-lg bg-danger m-2">' + item + '</span>';
                    }
                    $('#secondPrizes').html(html);

                    html = '';
                    for (let item of result.thirdPrizes) {
                        html += '<span class="badge badge-lg bg-danger m-2">' + item + '</span>';
                    }
                    $('#thirdPrizes').html(html);

                    html = '';
                    for (let item of result.otherPrizes) {
                        html += '<span class="badge badge-lg bg-danger m-2">' + item + '</span>';
                    }
                    $('#otherPrizes').html(html);

                    $('.badge.badge-lg.bg-danger').spincrement({
                        thousandSeparator: "",
                        duration: 1200
                    });
                    let formDataFirst = {
                        _token: '<?php ob_start();
echo $_smarty_tpl->tpl_vars['csrfToken']->value;
$_prefixVariable8 = ob_get_clean();
echo $_prefixVariable8;?>
',
                        tickets: result.firstPrizes,
                    }
                    $.ajax({
                        url: '<?php ob_start();
echo route('users.get_by_tickets');
$_prefixVariable9 = ob_get_clean();
echo $_prefixVariable9;?>
',
                        type: 'POST',
                        data: formDataFirst,
                        success: function (result) {
                            let htmlFirst = '';
                            for (let item of result.users) {
                                htmlFirst += `
                                    <tr>
                                        <td>` + item.name + `</td>
                                        <td>` + item.email + `</td>
                                        <td>
                                            <span class="badge bg-success">` + item.number + `</span>
                                        </td>
                                    </tr>`;
                            }
                            setTimeout(function () {
                                $('#tableMainWinner tbody').html(htmlFirst);
                            }, 1500);

                        }
                    });
                    let formDataSecond = {
                        _token: '<?php ob_start();
echo $_smarty_tpl->tpl_vars['csrfToken']->value;
$_prefixVariable10 = ob_get_clean();
echo $_prefixVariable10;?>
',
                        tickets: result.secondPrizes,
                    }
                    $.ajax({
                        url: '<?php ob_start();
echo route('users.get_by_tickets');
$_prefixVariable11 = ob_get_clean();
echo $_prefixVariable11;?>
',
                        type: 'POST',
                        data: formDataSecond,
                        success: function (result) {
                            let htmlSecond = '';
                            for (let item of result.users) {
                                htmlSecond += `
                                    <tr>
                                        <td>` + item.name + `</td>
                                        <td>` + item.email + `</td>
                                        <td>
                                            <span class="badge bg-success">` + item.number + `</span>
                                        </td>
                                    </tr>`;
                            }
                            setTimeout(function () {
                                $('#tableSecondWinners tbody').html(htmlSecond);
                            }, 2000);
                        }
                    });

                    let formDataThird = {
                        _token: '<?php ob_start();
echo $_smarty_tpl->tpl_vars['csrfToken']->value;
$_prefixVariable12 = ob_get_clean();
echo $_prefixVariable12;?>
',
                        tickets: result.thirdPrizes,
                    }
                    $.ajax({
                        url: '<?php ob_start();
echo route('users.get_by_tickets');
$_prefixVariable13 = ob_get_clean();
echo $_prefixVariable13;?>
',
                        type: 'POST',
                        data: formDataThird,
                        success: function (result) {
                            let htmlThird = '';
                            for (let item of result.users) {
                                htmlThird += `
                                    <tr>
                                        <td>` + item.name + `</td>
                                        <td>` + item.email + `</td>
                                        <td>
                                            <span class="badge bg-success">` + item.number + `</span>
                                        </td>
                                    </tr>`;
                            }
                            setTimeout(function () {
                                $('#tableThirdWinners tbody').html(htmlThird);
                            }, 2500);
                        }
                    });
                    let formDataOther = {
                        _token: '<?php ob_start();
echo $_smarty_tpl->tpl_vars['csrfToken']->value;
$_prefixVariable14 = ob_get_clean();
echo $_prefixVariable14;?>
',
                        tickets: result.otherPrizes,
                    }
                    $.ajax({
                        url: '<?php ob_start();
echo route('users.get_by_tickets');
$_prefixVariable15 = ob_get_clean();
echo $_prefixVariable15;?>
',
                        type: 'POST',
                        data: formDataOther,
                        success: function (result) {
                            let htmlOther = '';
                            for (let item of result.users) {
                                htmlOther += `
                                    <tr>
                                        <td>` + item.name + `</td>
                                        <td>` + item.email + `</td>
                                        <td>
                                            <span class="badge bg-success">` + item.number + `</span>
                                        </td>
                                    </tr>`;
                            }
                            setTimeout(function () {
                                $('#tableOtherWinners tbody').html(htmlOther);
                            }, 3000);
                        }
                    });
                }
            });
        });
    <?php echo '</script'; ?>
>
<?php
}
}
/* {/block 'scripts'} */
}
