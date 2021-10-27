@include('..includes.header')
@include('..includes.admin.header')

<section>

    <article>

<form action="{{ url('admin/users/create') }}">

    <input type="text" name="username" id="username">
    <input type="text" name="password" id="password">

    <select name="select" id="select">

        <option></option>

    </select>

</form>


</article>

</section>

@include('..includes.footer')