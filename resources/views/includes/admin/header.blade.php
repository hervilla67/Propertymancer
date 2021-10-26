<nav  class="nav_horizontal">

    <ul>
        <li><a href="{{ url('') }}">Users</a></li>
        <li><a href="{{ url('') }}">Apartments</a></li>
        <li><a href="{{ url('') }}">Services</a></li>
        <li><a href="{{ url('') }}">Profile</a></li>
        <li><a href="{{ url('admin/logout') }}">Log out</a></li>
        <li><div></div></li>

    </ul>
</nav>

<?php 

if(session('admin_id','none') != 'none'){

?>
    <aside>
        
        <ul>

            <li></li>
            <li></li>
            <li></li>
            <li></li>

        </ul>

        <ul>

            <li></li>
            <li></li>
            <li></li>

        </ul>

    </aside>
    
<?php } ?>


