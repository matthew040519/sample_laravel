@extends('welcome')

@section('content')
<div class="container" style="margin: 30px;">
  <nav class="breadcrumb is-right" aria-label="breadcrumbs" style="margin-top: 3%;">
  <ul>
    <li><a href="/mainpage">Home</a></li>
    <li class="is-active"><a href="#" aria-current="page">Supplier</a></li>
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
          Supplier List
        </p>
        <a style="margin-top: 5px;" href="/supplier/create" class="button is-info"><i class="fa fa-plus"></i> Add Supplier</a>
      </header>
      <div class="card-content">
        <div class="b-table has-pagination">
          <div class="table-wrapper has-mobile-cards">
            <table class="table is-fullwidth is-striped is-hoverable is-sortable is-fullwidth">
              <thead>
              <tr>
                <th>Supplier</th>
                <th>Address</th>
                <th></th>
              </tr>
              </thead>
              <tbody>
                 @foreach ($suppliers as $supplier)
              <tr>
               
                <td data-label="Name">{{ $supplier->supplier_name }}</td>
                <td data-label="Company">{{ $supplier->address }}</td>
                
                <td class="is-actions-cell">
                  <div class="buttons is-right">
                    <a href="/supplier/id/{{ $supplier->supplier_id }}" class="button is-small is-primary" type="button">
                      <span class="icon"><i class="mdi mdi-eye"></i></span>
                    </a>
                    <a class="button is-small is-danger jb-modal" data-target="sample-modal" type="button">
                      <span class="icon"><i class="mdi mdi-trash-can"></i></span>
                    </a>
                  </div>
                </td>
              </tr>
               @endforeach
              </tbody>
            </table>
          </div>
          {{ $suppliers->links() }}
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
