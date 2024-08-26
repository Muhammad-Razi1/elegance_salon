@extends('layouts.main')

@section('main-section')

<section class="hero-wrap hero-wrap-2" style="background-image: url('images/bg-1.jpg');" data-stellar-background-ratio="0.5">
    <div class="overlay"></div>
    <div class="container">
      <div class="row no-gutters slider-text js-fullheight align-items-end justify-content-center">
        <div class="col-md-9 ftco-animate pb-5 text-center">
          <h2 class="mb-0 bread">Cart</h2>
          <p class="breadcrumbs"><span class="mr-2"><a href="/">Home <i class="ion-ios-arrow-round-forward"></i></a></span> <span>Shop <i class="ion-ios-arrow-round-forward"></i></span></p>
        </div>
      </div>
    </div>
  </section>

<div class="container mt-5">
<table id="cart" class="table table-bordered">
    <thead>
        <tr>
            <th>Product</th>
            <th>Product Description</th>
            <th>Price</th>
            <th>Total</th>
            <th></th>
        </tr>
        </thead>
        <tbody>
            @if (session('cart'))
            @foreach (session('cart') as $id => $details)

            <tr rowId="{{$id}}">
                <td data-th="Product">
                    <div class="row">
                        <div class="col-sm-3 hidden-xs"><img src="{{ asset('uploads/product/' . $details['product_image']) }}" class="card-img-top"></div>
                        <div class="col-sm-9">
                            <h4 class="nomargin">{{$details['product_name']}}</h4>
                        </div>
                    </div>
                    </td>
                    <td data-th="Description">{{$details['product_description']}}</td>
                    <td data-th="Price">PKR {{$details['product_price']}}</td>
                    <td data-th="Subtotal" class="text-center"></td>
                    <td class="actions delete-product">
                        <a href="" class="btn btn-outline-danger btn-sm"><i class="fa fa-trash-o"></i></a>
                    </td>
            </tr>

            @endforeach
            @endif
        </tbody>
    <tfoot>
        <tr>
            <td colspan="5" class="text-right">
                <a href="{{url('/shop')}}" class="btn btn-primary"><i class="fa fa-angle-left"></i> Continue Shopping</a>
                <button class="btn btn-danger">Checkout</button>
            </td>
        </tr>
    </tfoot>
</table>
</div>

@endsection

@section('scripts')

<script type="text/javascript">

    $('.delete-product').click(function (e) {
        e.preventDefault();

        var ele = $(this);
        if(confirm("Are you sure you want to delete this product?")) {
            $.ajax({
                url: 'deleteproduct',
                method: 'DELETE',
                data: {
                    _token: '{{csrf_token()}}',
                    id: ele.parent('tr').attr("rowId")
                },
                success: function(response){
                    window.location.reload();
                }
            });
        }
    });

</script>

@endsection
