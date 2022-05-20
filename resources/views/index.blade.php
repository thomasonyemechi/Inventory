
@extends('layout.app')
@section('page_title')
Dashboard
@endsection

@section('page_content')

<div class="container mt-3">
    <div class="row">
        <div class="col-12">
            <div class="card">
                <div class="card-header">
                    <h3 class="card-title m-0">Add Inventory Item</h3>
                </div>
                <div class="card-body">
                    <form class="row" action="{{route('create.inventory')}}" method="post" enctype="multipart/form-data">
                        @csrf
                        <div class="col-md-8 form-group">
                            <label>Product Name</label>
                            <input type="text" name="product_name" value="{{old('product_name')}}" class="form-control">
                        </div>


                        <div class="col-md-4 form-group">
                            <label>SKU Number</label>
                            <input type="text" name="sku_number" value="{{old('sku_number')}}" class="form-control">
                        </div>


                        <div class="col-md-6 mt-2 form-group">
                            <label>Quantity</label>
                            <input type="number" name="quantity" value="{{old('quantity')}}" class="form-control">
                            <label class="mt-2">Price</label>
                            <input type="number" name="price" value="{{old('price')}}" class="form-control">
                        </div>


                        <div class="col-md-6 mt-2 form-group">
                            <label>Description</label>
                            <textarea name="description" rows="4" value="{{old('description')}}" class="form-control"></textarea>
                        </div>

                        <div class="col-12 form-group">
                            <button class="btn btn-primary mt-2" name="addBook" style="float:right">Add Inventory</button>
                        </div>
                    </form>
                </div>
            </div>

            @php
                $inventories = \App\Models\Inventory::orderby('id', 'desc')->paginate(100);
            @endphp

            <div class="card mt-3">
                <div class="card-header">
                    <h3 class="card-title m-0">Recently added Invetories <i class="fas fa-inventory    "></i></h3>
                </div>
                <div class="card-body">
                    <div class="table-responsive">
                        <table class="table table-striped table-hover">
                            <thead>
                                <tr>
                                    <th>#</th>
                                    <th>Product Name</th>
                                    <th>SKU Number</th>
                                    <th>Price</th>
                                    <th>Quantity</th>
                                    <th>Description</th>
                                    <th>Date Added</th>
                                    <th></th>
                                </tr>
                            </thead>
                            <tbody>
                                @foreach ($inventories as $inv)
                                    <tr>
                                        <td>{{$loop->iteration}}</td>
                                        <td>{{$inv->name}}</td>
                                        <td>{{$inv->sku_number}}</td>
                                        <td>{{$inv->price}}</td>
                                        <td>{{$inv->quantity}}</td>
                                        <td>{{$inv->description}}</td>
                                        <td>{{$inv->created_at}}</td>
                                        <td>
                                            <div class="d-flex justify-content-between">
                                                <button class="btn btn-danger btn-xs">Delete</button>
                                                <button class="btn btn-primary btn-xs">Edit</button>
                                            </div>
                                        </td>
                                    </tr>
                                @endforeach
                            </tbody>
                        </table>
                    </div>
                    {{$inventories->links()}}
                </div>
            </div>
        </div>
    </div>
</div>




@endsection
