@extends('admin.a_shared.a_layout')
@section('title', 'Users')
@section('content')
	<div class="content">
            <div class="container-fluid">
                <div class="row">
                    <div class="col-md-12">
                        <div class="card">
                            <div class="header">
                                <h4 class="title">Registered users</h4>
                                <p class="category">List of users registerd with Sparemart</p>
                            </div>
                            <div class="content table-responsive table-full-width">
                                <table class="table table-hover table-striped">
                                    <thead>
                                        <th>ID</th>
                                    	<th>Name</th>
                                    	<th>Email</th>
                                    	<th>Registered date</th>
                                    	<th>Last updated date</th>
                                    	<th></th>                                    	
                                    </thead>
                                    <tbody>
                                        @foreach ($user_data as $user)
                                        	<tr>
                                        		<td>{{$user->id}}</td>
                                        		<td>{{$user->name}}</td>
                                        		<td>{{$user->email}}</td>
                                        		<td>{{$user->created_at}}</td>
                                        		<td>{{$user->updated_at}}</td>
                                        		<td><a href="#">Edit</a></td>
                                        	</tr>
                                        @endforeach       
                                    </tbody>
                                </table>

                            </div>
                        </div>

                        <center><button type="button" class="btn btn-primary"><a href="{{ url('/admin/adduser') }}">Add User</a></button></center>
                    </div>


                    


                </div>
            </div>
        </div>
@endsection