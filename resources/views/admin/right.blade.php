<div id="right">


            <div class="well well-small">
                <ul class="list-unstyled">
                    <li>Users &nbsp; : <span><?php $Users = DB::table('users')->get(); $Count = count($Users); echo $Count ?></span></li>
                </ul>
            </div>
            <div class="well well-small">

                <button type="button" onclick="window.open('{{url('/admin/users')}}','_self')" class="btn btn-primary btn-block"> Users</button>
                <button type="button" onclick="window.open('{{url('/admin/transfers')}}','_self')" class="btn btn-success btn-block"> Transfers</button>
                <button type="button" onclick="window.open('{{url('/admin/updates')}}','_self')" class="btn btn-primary btn-block"> Updates</button>
                <button type="button" onclick="window.open('{{url('/admin/transactions')}}','_self')" class="btn btn-success btn-block"> Transactions</button>


            </div>




        </div>
