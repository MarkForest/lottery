{extends file='../layouts/main.tpl'}
{block name=title}Lottery | Home{/block}
{block name=contents}
    <div class="main__block">
        <div class="button__block">
            <div class="title__block">
                <p class="text-white">Users: {{$userCount}}</p>
                <p class="text-white">Tickets: <span id="ticketCount">{{$lotteryCount}}</span></p>
            </div>
            <div class="form-group button__form-group mb-3">
                {if $lotteryCount}
                    <a href="{{route('lottery.lottery')}}" type="button" class="btn btn-lg btn-info form-control mb-3">START NEW LOTTERY</a>
                {/if}
                <button type="button" id="generateTickets" class="btn btn-lg btn-primary form-control">ADD NEW LOTTERY TICKETS</button>

            </div>
            <div class="preloader" style="visibility: hidden">
                <img src="{{asset('/images/ZKZg.gif')}}" width="70" alt="preloader">
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
    </script>
{/block}
