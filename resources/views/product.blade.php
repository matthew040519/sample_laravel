@extends('welcome')

@section('content')
<div class="container">
  <nav class="breadcrumb is-right" aria-label="breadcrumbs" style="margin-top: 3%;">
  <ul>
    <li><a href="/mainpage">Home</a></li>
    <li class="is-active"><a href="#" aria-current="page">Product</a></li>
  </ul>
</nav>
<div class="card">
  <header class="card-header">
    <p class="card-header-title">
      Product List
    </p>
    <a href="/product/create" class="button is-info"><i class="fa fa-plus"></i> Add Product</a>
  </header>
</div>

<div class="columns is-multiline">
  @foreach ($products as $product)
    <div class="column is-one-quarter">
      <div class="box">
        <article class="media">
          <div class="media-left">
            <figure class="image is-64x64">
              <img src="{{ asset('image/'.$product->product_image) }}" alt="Image">
            </figure>
          </div>
          <div class="media-content">
            <div class="content">
              <p>
                <strong>{{ $product->product_name }}</strong> 
                <!-- <br> -->
                <strong>&#8369</strong> <strong>{{ $product->product_price }}</strong>
               <!--  Lorem ipsum dolor sit amet, consectetur adipiscing elit. Aenean efficitur sit amet massa fringilla egestas. Nullam condimentum luctus turpis. -->
              </p>
              <a href="/product/id/{{$product->product_id}}">Add to Cart.</a>
            </div>
           <!--  <nav class="level is-mobile">
              <div class="level-left">
                <a class="level-item" aria-label="reply">
                  <span class="icon is-small">
                    <i class="fa fa-reply" aria-hidden="true"></i>
                  </span>
                </a>
                <a class="level-item" aria-label="retweet">
                  <span class="icon is-small">
                    <i class="fa fa-retweet" aria-hidden="true"></i>
                  </span>
                </a>
                <a class="level-item" aria-label="like">
                  <span class="icon is-small">
                    <i class="fa fa-heart" aria-hidden="true"></i>
                  </span>
                </a>
              </div>
            </nav> -->
          </div>
        </article>
      </div>
    </div>
    @endforeach

</div>
 {{ $products->links() }}


@endsection
