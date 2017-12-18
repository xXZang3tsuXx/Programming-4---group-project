@extends('admin.a_shared.a_layout')
@section('title', 'Add Product')
@section('content')
	<div class="content">
            <div class="container-fluid">
                <div class="row">
                    <div class="col-md-8">
                        <div class="card">
                            <div class="header">
                                <h4 class="title">Add A New Product</h4>
                            </div>
                            <div class="content">
                                <form method="POST" action="{{ route('makeProduct') }}" role="form" enctype="multipart/form-data">     
                                {{csrf_field()}}                               
                                    <div class="row">
                                        <div class="col-md-6">
                                            <div class="form-group">
                                                <label>Product Name</label>
                                                <input type="text" class="form-control" name="prod_name" id="prod_name" placeholder="Product Name" required="true">
                                            </div>
                                        </div>
                                        <div class="col-md-6">
                                            <div class="form-group">
                                                <label>Product Model</label>
                                                <input type="text" name="prod_model" id="prod_model" class="form-control" placeholder="Product Model" required="true">
                                            </div>
                                        </div>
                                    </div>

                                    <div class="row">
                                        <div class="col-md-6">
                                        	<div class="form-group{{ $errors->has('name') ? ' has-error' : '' }}">
	                                        	<label for="image_name">Product Image</label>
					                       		<input type="file" name="image_name" class="form-control" id="name" value="">
						                       @if($errors->has('image_name'))
						                           <span class="help-block">{{ $errors->first('image_name') }}</span>
						                       @endif
				                   			</div>
                                        </div>
                                    </div>

                                    <div class="row">
                                        <div class="col-md-4">
                                            <div class="form-group">
                                                <label>Product Price</label>
                                                <input type="text" name="prod_price" id="prod_price" class="form-control" placeholder="Price in $" required="true">
                                            </div>
                                        </div>
                                        
                                    </div>

                                    <div class="row">
                                        <div class="col-md-12">
                                            <div class="form-group">
                                                <label>3D View URL</label>
                                                <input type="text" class="form-control" name="three_url" id="three_url" placeholder="3D View URL" required="true">
                                            </div>
                                        </div>
                                    </div>

                                    <button type="submit" class="btn btn-info btn-fill pull-right">Add Product</button>
                                    <div class="clearfix"></div>
                                </form>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-4" hidden="true">
                        <div class="card card-user">
                            <div class="image">
                                <img src="https://ununsplash.imgix.net/photo-1431578500526-4d9613015464?fit=crop&fm=jpg&h=300&q=75&w=400" alt="..."/>
                            </div>
                            <div class="content">
                                <div class="author">
                                     <a href="#">
                                    <img class="avatar border-gray" src="assets/img/faces/face-3.jpg" alt="..."/>

                                      <h4 class="title">Mike Andrew<br />
                                         <small>michael24</small>
                                      </h4>
                                    </a>
                                </div>
                                <p class="description text-center"> "Lamborghini Mercy <br>
                                                    Your chick she so thirsty <br>
                                                    I'm in that two seat Lambo"
                                </p>
                            </div>
                            <hr>
                            <div class="text-center">
                                <button href="#" class="btn btn-simple"><i class="fa fa-facebook-square"></i></button>
                                <button href="#" class="btn btn-simple"><i class="fa fa-twitter"></i></button>
                                <button href="#" class="btn btn-simple"><i class="fa fa-google-plus-square"></i></button>

                            </div>
                        </div>
                    </div>

                </div>
            </div>
        </div>

@endsection