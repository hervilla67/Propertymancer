@include('..includes.header')

@if (count($errors) > 0)
<aside class="error_list">
                <ul>
                    @foreach ($errors->all() as $error)
                        <li>{{ $error }}</li>
                    @endforeach
                </ul>
            </aside>
            @endif
        <form action="{{ url('admin/register') }}" method="POST">
        @csrf
            <h1>Admin registration</h1>
            <div>

                <label for="name">
                    Name
                    <input type="text" name="name" id="name" placeholder="Name...">
                </label>
                
                <label for="last_name">
                    Last Name
                    <input type="text" name="last_name" id="name" placeholder="Last name...">
                </label>

            </div>

            <div>

                <label for="admin_email">
                    Email
                    <input type="text" name="email" id="admin_email" placeholder="Email...">
                </label>
                
                </div>

            <div>

            <label for="username">
                Username
            <input type="text" name="username" id="username" placeholder="Username...">

                </div>
            </label>

                <div>

                    <label for="admin_password">
                        Password
                        <input type="password" name="password" id="admin_password" placeholder="Password">
                    </label>

                </div>

            <div>      
            <label for="comfirm_password">
                Confirm Password
                <input type="password" name="confirm_password" id="confirm_password" placeholder="Confirm_password">
            </label>
            </div>
            
            <div>
            
                <button type="submit" name="submit">Submit</button>

            </div>
        </form>

@include('..includes.footer')