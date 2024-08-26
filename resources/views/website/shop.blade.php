@extends('layouts.main')

@section('main-section')

<section class="hero-wrap hero-wrap-2" style="background-image: url('images/bg-1.jpg');" data-stellar-background-ratio="0.5">
      <div class="overlay"></div>
      <div class="container">
        <div class="row no-gutters slider-text js-fullheight align-items-end justify-content-center">
          <div class="col-md-9 ftco-animate pb-5 text-center">
            <h2 class="mb-0 bread">Shop</h2>
            <p class="breadcrumbs"><span class="mr-2"><a href="/">Home <i class="ion-ios-arrow-round-forward"></i></a></span> <span>Shop <i class="ion-ios-arrow-round-forward"></i></span></p>
          </div>
        </div>
      </div>
    </section>


    <section class="ftco-section ftco-pricing">
			<div class="container">
				<div class="row justify-content-center pb-3">
          <div class="col-md-10 heading-section text-center ftco-animate">
          	<span class="subheading">Products</span>
            <h2 class="mb-4">Beauty Products For Men And Women</h2>
            <p>Far far away, behind the word mountains, far from the countries Vokalia and Consonantia</p>
          </div>
        </div>
        <div class="row">
			@if (session('added'))
			<div class="alert alert-success">{{session('added')}}</div>
			@endif



        @foreach ($products as $p)
        	<div class="col-md-3 ftco-animate">
        		<div class="pricing-entry pb-5 text-center">
                <img src="{{ asset('uploads/product/' . $p->product_image) }}" width="50%"/>
                <h3>{{$p->product_name}}</h3>
                <p>{{$p->product_description}}</p>
                <p>Supplier: {{$p->supplier}}</p>
                <p><span class="price">{{$p->product_price}}</span> <span class="per">/ PKR</span></p>
        			<p class="button text-center"><a href="{{url('/addtocart', $p->id)}}" class="btn btn-primary px-4 py-3">Add To Cart</a></p>
        		</div>
        	</div>
            @endforeach


        	<!-- <div class="col-md-3 ftco-animate">
        		<div class="pricing-entry pb-5 text-center">
        			<div>
	        			<h3 class="mb-4">Manicure Pedicure</h3>
	        			<p><span class="price">$34.50</span> <span class="per">/ session</span></p>
	        		</div>
        			<ul>
        				<li>Manicure</li>
								<li>Pedicure</li>
								<li>Coloring</li>
								<li>Nails</li>
								<li>Nail Cut</li>
        			</ul>
        			<p class="button text-center"><a href="/booknow" class="btn btn-primary px-4 py-3">Book Now</a></p>
        		</div>
        	</div>
        	<div class="col-md-3 ftco-animate">
        		<div class="pricing-entry active pb-5 text-center">
        			<div>
	        			<h3 class="mb-4">Makeup</h3>
	        			<p><span class="price">$54.50</span> <span class="per">/ session</span></p>
	        		</div>
        			<ul>
        				<li>Makeup</li>
								<li>Professional Makeup</li>
								<li>Blush On</li>
								<li>Facial Massage</li>
								<li>Facial Spa</li>
        			</ul>
        			<p class="button text-center"><a href="/booknow" class="btn btn-primary px-4 py-3">Book Now</a></p>
        		</div>
        	</div>
        	<div class="col-md-3 ftco-animate">
        		<div class="pricing-entry pb-5 text-center">
        			<div>
	        			<h3 class="mb-4">Body Treatment</h3>
	        			<p><span class="price">$89.50</span> <span class="per">/ session</span></p>
	        		</div>
        			<ul>
        				<li>Massage</li>
								<li>Spa</li>
								<li>Foot Spa</li>
								<li>Body Spa</li>
								<li>Relaxing</li>
        			</ul>
        			<p class="button text-center"><a href="/booknow" class="btn btn-primary px-4 py-3">Book Now</a></p>
        		</div>
        	</div> -->
        </div>
			</div>
		</section>

@endsection
