@include('..includes.header')

@include('..includes.admin.header')  
        <section>
        
            <hr>
        
            <article>
                <h2>Stadistics</h2>
                <h3>Last Registered users:</h3>
                <br>
                <ul class="list_horizontal">

                                <?php
                    
                    foreach($admins as $admin){ ?>
                        
                        <li style="font-size:15px;">{{ $admin->admin_name }}  {{ $admin->admin_last_name }}</li>
                     
                     <?php   
                    }
                    ?>
                    <h1>Done!<br><br></h1>                   
                    
                </ul>
                
            </article>
            <hr>
            <article>
                <h2>Apartments</h2>
               
                <ul class="list_horizontal">
                    <li><a>Add_apartment</a></li>
                    <li><a>Edit_apartments</a></li>
                </ul>
                </article>
                <hr>

            <article>
                <h2>Status payments</h2>
                <ul class="list_horizontal">

                    <li>
                        <div class="payments_paid"></div>
                    </li>

                    <li>
                        <div class="payments_unPaid"></div>
                    </li>

                </ul>
            </article>
                
            </section>
            
<br>
<br>
@include('..includes.footer')