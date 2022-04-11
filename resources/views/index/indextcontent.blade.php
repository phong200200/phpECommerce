@section('index.indextcontent')
<div class="agileinfo-ads-display col-md-9 w3l-rightpro">
    <div class="wrapper">
        @foreach ($categories as $type)
        {
        <h3>@type -> name</h3>
        <br />
        <div class="product-sec1">
            @foreach ($products as $item)
            @if ($item -> category_id == $type -> id)

            <div class="col-md-4 col-sm-6">
                <div class="product-grid3" style="margin-bottom:20px;">
                    <div class="product-image3">
                        <a asp-page="QuickviewProduct" asp-route-id="@item.ProductId">
                            <img class="pic-1" src="{{ $item -> linkimg }}" style="height:160px; width:160px;">
                            <img class="pic-2" src="{{ $item -> linkimg }}" style="height:160px; width:160px;">
                        </a>
                        <ul class="social">
                            <li><a asp-page="CartSession" asp-page-handler="buynow" asp-route-id="@item.ProductId"><i class="fa fa-shopping-bag"></i></a></li>
                            <li><a style="cursor:pointer"><i class="fa fa-shopping-cart cart-btn" data-product-id="@item.ProductId"></i></a></li>
                        </ul>
                        <span class="product-new-label">New</span>
                    </div>
                    <div class="product-content">
                        <h3 class="title" style="text-align:center"><a asp-page="QuickviewProduct" asp-route-id="@item.ProductId">@item.ProductName</a></h3>
                        <div style="text-align:center">
                            <span class="item_price" style="text-align:center">{{ money_format('%=*^-14#8.2i', $item -> price )}}</span>
                        </div>
                    </div>
                    <div>
                        <span style="text-align:center"> Is available?: $item -> active</span>
                    </div>
                </div>
            </div>
            @endif
            @endforeach
            <div class="clearfix"></div>
        </div>
        @endforeach
    </div>
</div>
@endsection
