<div id="left" >
            <div class="media user-media well-small">
                <a class="user-link" href="{{url('/admin')}}/editAdmin/{{Auth::user()->id}}">
                    <img width="64" height="64" class="media-object img-thumbnail user-img" alt="{{Auth::user()->name}}" src="{{url('/')}}/uploads/admins/{{Auth::user()->image}}" />
                </a>
                <br />
                <div class="media-body">
                    <h5 class="media-heading"><small><b> {{Auth::user()->name}}</b></small> </h5>
                    <ul class="list-unstyled user-info">

                        <li>
                             <a href="{{url('/admin')}}/editAdmin/{{Auth::user()->id}}" class="btn btn-success btn-xs btn-circle" style="width: 10px;height: 12px;"></a> Online

                        </li>

                    </ul>
                </div>
                <br />
            </div>

            <ul id="menu" class="collapse">


                <li class="panel active">
                    <a href="{{url('/admin/home')}}" >
                        <i class="icon-home"></i> Dashboard


                    </a>
                </li>


                <li><a href="{{url('admin/addSlider')}}"><i class="icon-plus"></i>  <i class="icon-film"></i> Add Update </a></li>


                <li><a href="{{url('admin/sitesettings')}}"><i class="icon-cog"></i> Site Settings </a></li>
                <li><a href="{{url('admin/logout')}}"><i class="icon-signin"></i> Log Out </a></li>


            </ul>

        </div>
