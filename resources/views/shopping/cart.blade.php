@if($newcart != null)
    <div id="changeable-list-cart"  class="select-items">
        <table>
            <tbody>
                @foreach($newcart -> products as $item)
                <tr>
                    <td class="si-pic"><img src="{{ $item['productInfo'] -> linkimg }}" alt=""></td>
                    <td class="si-text">
                        <div class="product-selected">
                            <p>{{ $item['productInfo'] -> price }} x {{ $item['quantity']}}</p>
                            <h6>{{$item['productInfo'] -> name}}</h6>
                        </div>
                    </td>
                    <td class="si-close">
                        <i class="ti-close"></i>
                    </td>
                </tr>
                @endforeach
            </tbody>
        </table>
    </div>
@else
    <p>There's nothing in your cart :)</p>
@endif
