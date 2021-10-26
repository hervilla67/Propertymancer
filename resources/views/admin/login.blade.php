@include('..includes.header')


<form action="{{ url('admin/login') }}" method="POST">
    @csrf

    <label for="username">
        Username
        <input type="text" id="username" name="username" placeholder="Username...">
    </label>

    <label for="password">
        Password
        <input type="password" id="password" name="password" placeholder="Password...">
    </label>
    <button type="submit">Log in!!</button>
    
</form>


@include('..includes.footer')