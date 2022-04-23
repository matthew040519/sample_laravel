@extends('welcome')

@section('content')
<div class="container" style="margin: 30px;">
  <nav class="breadcrumb is-right" aria-label="breadcrumbs" style="margin-top: 3%;">
  <ul>
    <li><a href="/mainpage">Home</a></li>
    <li><a href="/product">Product</a></li>
    <li class="is-active"><a href="#" aria-current="page">Update Product</a></li>
  </ul>
</nav>
@if ($errors->any())                    <div class="notification is-danger">
  <button class="delete" onclick="this.parentElement.style.display='none'"></button>
         <ul>
            @foreach ($errors->all() as $error)
                <li>{{ $error }}</li>
            @endforeach
        </ul>
</div>
@endif

@if(session('status'))
                    <div class="notification is-danger">
  <button class="delete" onclick="this.parentElement.style.display='none'"></button>
 {{ session('status') }}
</div>
@endif

<div class="card">
  <header class="card-header">
    <p class="card-header-title">
       Update Product
    </p>
    <!-- <a href="/product/create" class="button is-info"><i class="fa fa-plus"></i> Add Product</a> -->
  </header>
    <div class="card-content">
      <form method="POST" action="{{ route('AddProduct') }}" enctype="multipart/form-data">  
        {{ csrf_field() }}
          <div class="columns">
            <div class="column">
             <div class="field">
              <label class="label">Product Image</label>
            <p class="control has-icons-left has-icons-right">
              <input class="input" type="file" name="image" placeholder="file">
              <span class="icon is-small is-left">
                <i class="fa fa-file"></i>
              </span>
             <!--  <span class="icon is-small is-right">
                <i class="fa fa-check"></i>
              </span> -->
            </p>
          </div>
            </div>
            <div class="column">
             <div class="field">
              <label class="label">Product Name</label>
            <p class="control has-icons-left">
              <input class="input" value="{{ $productData->product_name }}" name="product_name" type="text" placeholder="Product Name">
              <span class="icon is-small is-left">
                <i class="fa fa-sign-out"></i>
              </span>
            </p>
          </div>
        </div>
         </div>
         <div class="columns">
          <div class="column">
           <div class="field">
            <label class="label">Product Price</label>
          <p class="control has-icons-left has-icons-right">
            <input class="input" type="number" value="{{ $productData->product_price }}" name="price" placeholder="Product Price">
            <span class="icon is-small is-left">
              <i class="fa fa-sign-out"></i>
            </span>
            <!-- <span class="icon is-small is-right">
              <i class="fa fa-check"></i>
            </span> -->
          </p>
        </div>
          </div>
          <div class="column">
           <div class="field">
           
        </div>
        </div>
         </div>
             
             <!-- <div class="columns"> -->
                  <div class="field" style="text-align: right;">
                    <p class="control">
                      <button type="submit" class="button is-success">
                        Save
                      </button>
                    </p>
                  </div>
                </form>
    <!-- </div> -->

 
  
</div>

@endsection
