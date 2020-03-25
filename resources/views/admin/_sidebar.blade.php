            <div class="card">
                <center>
                    <div class="card-header">
                        <b>{{ Auth::user()->name }}</b>
                        <br>
                        <small>Guest</small>
                    </div>


                    <div class="card-body">
                        <div class="item mb-3" >
                            <a href="/admin">Dashboard</a>
                        </div>

                        <div class="item mb-3" >
                            <a href="#">Pending Tickets</a>
                        </div>

                        <div class="item mb-3" >
                            <a href="/my_ticket"></a>
                        </div>

                    </div>

                </center> 
            </div>