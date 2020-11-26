 
  <div class="cart_wrapper" data-url="{{route('deleteCart')}}" >   
    @php
    $carts = session()->get('cart');
    $total = 0;
@endphp
@if (!empty($carts))    
    <table class="table update_cart_url" data-url="{{route('updateCart')}}">
      <thead>
        <tr>
          <th>#</th>
          <th>Ảnh sản phẩm</th>
          <th>Tên</th>
          <th>Giá</th>
          <th>Số lượng</th>
          <th>Subtotal</th>


          <th>Action</th>

        </tr>
      </thead>
      <tbody>
        
        @foreach ($carts as $id=>$cart)
        @php
            $total += $cart['price'] * $cart['quantity'];
        @endphp

        <tr >
            <td >{{$id}}</td>
        <td ><img width="80px" src="{{config('app.base_url').$cart['image']}}" alt=""></td>

            <td >{{$cart['name']}}</td>

        <td  >{{number_format($cart['price'])}} vnđ</td>
        <td style="width:30px">
            <input type="number" value="{{$cart['quantity']}}" min="1" class="form-control quantity"> 
            
        </td>
        <td >{{number_format($cart['price'] * $cart['quantity'])}} vnđ</td>

        <td >
            <a  href="" data-id = "{{$id}}" class="btn cart_update"><i class="fas fa-pen-fancy" style="font-size: 28px;" ></i></a>
            <a  href="" data-id = "{{$id}}" class="btn cart_delete" style="color:rgb(224, 37, 37)"><i class="far fa-trash-alt" style="font-size: 28px;" ></i></a>

        </td>
          </tr>
        @endforeach
        @else
          <h2>Chưa có sản phẩm</h2>
        @endif
      
     

      </tbody>
    </table>
    <div class="col-md-12" style="margin-top: 50px">
        <h2>Total: {{number_format($total)}} <sup>vnđ</sup></h2>
    </div>
  </div>
