@extends('welcome')

@section('content')
<div class="container" style="margin: 30px;">
  <nav class="breadcrumb is-right" aria-label="breadcrumbs" style="margin-top: 3%;">
  <ul>
    <li><a href="/mainpage">Home</a></li>
    <li><a href="/supplier">Supplier</a></li>
    <li class="is-active"><a href="#" aria-current="page">Create Supplier</a></li>
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
      Supplier Add
    </p>
    <!-- <a href="/product/create" class="button is-info"><i class="fa fa-plus"></i> Add Product</a> -->
  </header>
    <div class="card-content">
      <form method="POST" action="{{ route('addSupplier') }}">  
        {{ csrf_field() }}
          <div class="columns">
           
            <div class="column">
             <div class="field">
              <label class="label">Supplier Name</label>
            <p class="control has-icons-left">
              <input class="input" name="supplier_name" type="text" placeholder="Supplier Name">
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
            <label class="label">Supplier Address</label>
          <p class="control has-icons-left has-icons-right">
            <input class="input" name="supplier_address" type="text" placeholder="Supplier Address">
            <span class="icon is-small is-left">
              <i class="fa fa-sign-out"></i>
            </span>
            <!-- <span class="icon is-small is-right">
              <i class="fa fa-check"></i>
            </span> -->
          </p>
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
