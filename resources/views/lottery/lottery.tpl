{extends file='../layouts/main.tpl'}
{block name=title}Lottery | Home{/block}
{block name=contents}
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
                        {foreach $users as $user}
                            <tr>
                                <td>{{$user->name}}</td>
                                <td>{{$user->email}}</td>
                                <td>
                                    {foreach $user->tickets as $ticket}
                                        <span class="badge bg-success">
                                            {{$ticket->number}}
                                        </span>
                                    {/foreach}
                                </td>
                            </tr>
                        {/foreach}
                    </tbody>
                </table>
            </div>
        </div>
    </div>
    <div class="wrap"></div>
{/block}
{block name=scripts}
    <script>
        $(function () {
            $('#generateTickets').click(function () {
                $('.button__form-group button').each(function () {
                    $(this).css('visibility', 'hidden');
                });
                $('.preloader').css('visibility', 'visible');
                let formData = {
                    _token: '{{$csrfToken}}',
                }
                $.ajax({
                    url: '{{route('tickets.generate')}}',
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
                _token: '{{$csrfToken}}',
            }
            $.ajax({
                url: '{{route('lottery.start')}}',
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
                        _token: '{{$csrfToken}}',
                        tickets: result.firstPrizes,
                    }
                    $.ajax({
                        url: '{{route('users.get_by_tickets')}}',
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
                        _token: '{{$csrfToken}}',
                        tickets: result.secondPrizes,
                    }
                    $.ajax({
                        url: '{{route('users.get_by_tickets')}}',
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
                        _token: '{{$csrfToken}}',
                        tickets: result.thirdPrizes,
                    }
                    $.ajax({
                        url: '{{route('users.get_by_tickets')}}',
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
                        _token: '{{$csrfToken}}',
                        tickets: result.otherPrizes,
                    }
                    $.ajax({
                        url: '{{route('users.get_by_tickets')}}',
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
    </script>
{/block}
