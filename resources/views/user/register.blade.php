@include('..includes.header')



        
        <form action="{{ url('user/register') }}" method="POST">
            
            @cfsr
            
            <label for="user_email">
                Email
                <input type="text" name="email" id="user_email" placeholder="Email...">
            </label>
            
            <label for="user_password">
                Password
                <input type="password" name="password" id="user_password" placeholder="Password">
            </label>
            
            <label for="comfirm_password">
                Confirm Password
                <input type="password" name="confirm_password" id="confirm_password" placeholder="Confirm_password">
            </label>
        
        </form>

@include('..includes.footer')