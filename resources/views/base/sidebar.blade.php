<div id="sidebar" class="span3">
            <div class="well well-small">
                <ul class="nav nav-list">
                    @if($thisCate === null)
                    <span>All Categories</span>
                    @foreach($categories as $cate)
                    <li><a class="icon-chevron-right" href="/cate/{{$cate -> id}}">{{$cate -> name}}</a></li>
                    @endforeach
                    @else
                    <span>Current Category: {{$thisCate -> name}}</span>
                    <li><a class="icon-chevron-right" href="/">All</a></li>
                    @foreach($categories as $cate)
                    <li><a href="/cate/{{$cate -> id}}"><span class="icon-chevron-right"></span>{{$cate -> name}}</a>
                    </li>
                    @endforeach
                    @endif

                    <li style="border:1"> &nbsp;</li>
                </ul>
            </div>

            <div class="well well-small alert alert-warning cntr">
                <h2>50% Discount</h2>
                <p>
                    only valid for online order. <br><br><a class="defaultBtn" href="#">Click here </a>
                </p>
            </div>
            <div class="well well-small"><a href="#"><img src="assets/img/paypal.jpg" alt="payment method paypal"></a>
            </div>

            <a class="shopBtn btn-block" href="#">Upcoming products <br><small>Click to view</small></a>
            <br>
            <br>
            <br>
            <br>

        </div>