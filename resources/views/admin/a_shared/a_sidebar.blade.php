<div class="wrapper">
    <div class="sidebar" data-color="purple" data-image="{{ asset('images/admin/sidebar-5.jpg') }}">

    <!--

        Tip 1: you can change the color of the sidebar using: data-color="blue | azure | green | orange | red | purple"
        Tip 2: you can also add an image using data-image tag

    -->

    	<div class="sidebar-wrapper">
            <div class="logo">
                <a href="#" class="simple-text">
                    Admin portal
                </a>
            </div>

            <ul class="nav">
                <li class="{{ Request::path() ==  'admin' ? 'active' : ''  }}">
                    <a href="{{ url('/admin') }}">
                        <i class="pe-7s-graph"></i>
                        <p>Dashboard</p>
                    </a>
                </li>
                <li class="{{ ((Request::path() ==  ('admin/users')) or (Request::path() ==  ('admin/adduser')) )? 'active' : ''  }}">
                    <a href="{{ url('/admin/users') }}">
                        <i class="pe-7s-user"></i>
                        <p>Users</p>
                    </a>
                </li>
                <li class="{{ Request::path() ==  'admin/products' ? 'active' : ''  }}">
                    <a href="{{ url('/admin/products') }}">
                        <i class="pe-7s-note2"></i>
                        <p>Product List</p>
                    </a>
                </li>
                <li class="{{ Request::path() ==  'admin/addproduct' ? 'active' : ''  }}">
                    <a href="{{ url('/admin/addproduct') }}">
                        <i class="pe-7s-science"></i>
                        <p>Add Product</p>
                    </a>
                </li>
                <li>
                    <a href="#">
                        <i class="pe-7s-news-paper"></i>
                        <p>Manage Stock</p>
                    </a>
                </li>               
                <li class="{{ Request::path() ==  'admin/locations' ? 'active' : ''  }}">
                    <a href="{{ url('/admin/locations') }}">
                        <i class="pe-7s-map-marker"></i>
                        <p>Locations</p>
                    </a>
                </li>
                <li>
                    <a href="#">
                        <i class="pe-7s-bell"></i>
                        <p>Notifications</p>
                    </a>
                </li>
            </ul>
    	</div>
    </div>

    @yield('section')    

</div>