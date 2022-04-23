@extends('welcome')

@section('content')
<div class="container" style="margin: 30px;">
  <nav class="breadcrumb is-right" aria-label="breadcrumbs" style="margin-top: 3%;">
  <ul>
    <li><a href="/mainpage">Home</a></li>
    <li class="is-active"><a href="#" aria-current="page">Product</a></li>
  </ul>
</nav>
<!-- <div class="card">
  <header class="card-header">
    <p class="card-header-title">
      Product List
    </p>
    <a href="/product/create" class="button is-info"><i class="fa fa-plus"></i> Add Product</a>
  </header>
</div> -->

<div class="card has-table has-mobile-sort-spaced">
      <header class="card-header">
        <p class="card-header-title">
          <span class="icon"><i class="mdi mdi-bottle-soda"></i></span>
          Product List
        </p>
        <a style="margin-top: 5px;" href="/product/create" class="button is-info"><i class="fa fa-plus"></i> Add Product</a>
      </header>
      <div class="card-content">
        <div class="b-table has-pagination">
          <div class="table-wrapper has-mobile-cards">
            <table class="table is-fullwidth is-striped is-hoverable is-sortable is-fullwidth">
              <thead>
              <tr>
                <th style="text-align: center;">Image</th>
                <th>Product</th>
                <th>Price</th>
                <th></th>
              </tr>
              </thead>
              <tbody>
                 @foreach ($products as $product)
              <tr>
                <td class="is-image-cell">
                  <div class="image">
                    <img src="{{ asset('image/'.$product->product_image) }}" class="is-rounded">
                  </div>
                </td>
                <td data-label="Name">{{ $product->product_name }}</td>
                <td data-label="Company">&#8369; {{ number_format($product->product_price, 2, '.', '') }}</td>
                
                <td class="is-actions-cell">
                  <div class="buttons is-right">
                    <button class="button is-small is-primary" type="button">
                      <span class="icon"><i class="mdi mdi-eye"></i></span>
                    </button>
                    <button class="button is-small is-danger jb-modal" data-target="sample-modal" type="button">
                      <span class="icon"><i class="mdi mdi-trash-can"></i></span>
                    </button>
                  </div>
                </td>
              </tr>
               @endforeach
              </tbody>
            </table>
          </div>
          {{ $products->links() }}
         <!--  <div class="notification">
            <div class="level">
              <div class="level-left">
                <div class="level-item">
                  <div class="buttons has-addons">
                    <button type="button" class="button is-active">1</button>
                    <button type="button" class="button">2</button>
                    <button type="button" class="button">3</button>
                  </div>
                </div>
              </div>
              <div class="level-right">
                <div class="level-item">
                  <small>Page 1 of 3</small>
                </div>
              </div>
            </div>
          </div> -->
        </div>
      </div>
    </div>
 


@endsection
