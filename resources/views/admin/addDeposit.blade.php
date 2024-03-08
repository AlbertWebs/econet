@extends('admin.master')

@section('content')
<div id="wrap" >


        <!-- HEADER SECTION -->
        @include('admin.top')
        <!-- END HEADER SECTION -->



        <!-- MENU SECTION -->
        @include('admin.left')
        <!--END MENU SECTION -->



        <!--PAGE CONTENT -->
        <div id="content">

            <div class="inner" style="min-height: 700px;">
                <div class="row">
                    <div class="col-lg-12 text-center">
                        <h2> Deposit Funds </h2>
                    </div>
                </div>
                  <hr />
                 <!--BLOCK SECTION -->
                 <div class="row">
                    <div class="col-lg-12">
                        @include('admin.panel')

                    </div>

                </div>
                  <!--END BLOCK SECTION -->
                <hr />


                  <!-- Inner Content Here -->

            <div class="inner">


              <div class="row">
               <center>
                 @if(Session::has('message'))
							   <div class="alert alert-success">{{ Session::get('message') }}</div>
				@endif

                @if(Session::has('messageError'))
							   <div class="alert alert-danger">{{ Session::get('messageError') }}</div>
				@endif
                 </center>


                 <form class="form-horizontal" method="post"  action="{{url('/admin/add_Deposit')}}" enctype="multipart/form-data">

                 <div class="form-group">
                        <label for="text1" class="control-label col-lg-4">Title</label>

                        <div class="col-lg-8">
                            <input type="text" id="text1" name="title" value="" placeholder="e.g Inward Transfer " class="form-control" />
                        </div>
                    </div>

                    <div class="form-group">
                        <label for="text1" class="control-label col-lg-4">Amount</label>

                        <div class="col-lg-8">
                            <input type="text" id="text1" name="amount" value="" placeholder="e.g 50000 " class="form-control" />
                        </div>
                    </div>

                    <input type="hidden" id="text1" name="type" value="Deposit" />

                    <div class="form-group">
                        <label for="text1" class="control-label col-lg-4">Select User</label>
                       <div class="col-lg-8">
                            <select name="user_id" data-placeholder="Choose a Category" class="form-control chzn-select" tabindex="2">

                            <?php $Category = DB::table('users')->where('type','0')->get(); ?>
                            @foreach($Category as $value)
                                <option value="{{$value->id}}">{{$value->name}}</option>
                            @endforeach

                            </select>
                        </div>
                    </div>


                    <div class="form-group">
                        <label for="limiter" class="control-label col-lg-4">Narrative</label>

                        <div class="col-lg-8">
                            <textarea id="limiter" name="narrative" class="form-control"></textarea>
                            <p class="help-block">Brief Description of the post</p>
                        </div>
                    </div>


                    <br><br>
                    <div class="col-lg-12 text-center">
                      <button type="submit" class="btn btn-success"><i class="icon-plus icon-white"></i> Add Update</button>
                    </div>


                    <input type="hidden" name="_token" value="{{ csrf_token() }}">

                <form>
              </div>

            </div>
                  <!-- Inner Content Ends Here -->




            </div>

        </div>
        <!--END PAGE CONTENT -->

         <!-- RIGHT STRIP  SECTION -->
        @include('admin.right')
         <!-- END RIGHT STRIP  SECTION -->
    </div>

@endsection
