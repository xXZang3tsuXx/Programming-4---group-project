@extends('admin.a_shared.a_layout')
@section('title', 'Products')
@section('content')
	<div class="content">
		<div class="col-md-12">
                        <div class="card card-plain">
                            <div class="header">
                                <h4 class="title">List of Products in the Store</h4>                                
                            </div>
                            <div class="content table-responsive table-full-width">
                                <table class="table table-hover">
                                    <thead>
                                        <th>Product Id</th>
                                    	<th>Product Name</th>
                                    	<th>Product Model</th>
                                    	<th>Product Price</th>
                                    	<th>Product Image</th>
                                        <th>3D View URL</th>
                                    	<th>Product Insert Date</th>
                                    	<th></th>
                                    </thead>
                                    <tbody>
                                        @foreach ($product_data as $product)
                                            <tr>
                                                <td>{{ $product->id }}</td>
                                                <td>{{ $product->product_name }}</td>
                                                <td>{{ $product->product_model }}</td>
                                                <td>{{ $product->product_price }}</td>
                                                <td><a href="{{ $product->product_img_url }}">Link</a></td>
                                                <td><a href="{{ $product->product_3D_url }}">Link</a></td>
                                                <td>{{ $product->created_at }}</td>
                                                <td><a href="#">Edit</a></td>
                                            </tr>
                                        @endforeach                                       
                                    </tbody>
                                </table>

                            </div>
                        </div>
                    </div>
	</div>
@endsection