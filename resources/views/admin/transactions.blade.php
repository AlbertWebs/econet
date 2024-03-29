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
                        <h2> All Transactions </h2>
                    </div>
                </div>
                  <hr />
                 <!--BLOCK SECTION -->
                 {{-- <div class="row">
                    <div class="col-lg-12">
                        @include('admin.panel')

                    </div>

                </div> --}}
                  <!--END BLOCK SECTION -->
                <hr />

                 <!-- COMMENT AND NOTIFICATION  SECTION -->
                   <div class="row">
                        <div class="col-lg-12">
                            <div class="panel panel-default">
                                <div class="panel-heading">
                                    Transactions
                                </div>
                                <div class="panel-body">
                                    <div class="table-responsive">
                                        <table class="table table-striped table-bordered table-hover" id="dataTables-example">
                                            <thead>
                                                <tr>
                                                    <th>No</th>
                                                    <th>Type</th>
                                                    <th>Amount</th>
                                                    <th>User</th>
                                                    <th>Narrative</th>
                                                    <th>Delete</th>

                                                </tr>
                                            </thead>
                                            <tbody>
                                            @foreach($Transaction as $value)
                                            <?php
                                                    $User = \App\Models\User::find($value->user_id);

                                            ?>
                                             @if($User == null)

                                             @else
                                                <tr class="odd gradeX">
                                                    <td>{{$value->id}}</td>
                                                    <td>{{$value->type}}</td>
                                                    <td>{{$value->amount}}</td>

                                                    <td style="min-width:100px;">
                                                        {{$User->name}}
                                                     </td>

                                                    <td>{{$value->narrative}}</td>
                                                    <td class="center"><a  href="{{url('/admin')}}/delateTransaction/{{$value->id}}"   class="btn btn-danger"><i class="icon-trash icon-white"></i> Delete</a></td>
                                                </tr>
                                            @endif
                                            @endforeach

                                            </tbody>
                                          </table>
                                    </div>

                                </div>
                            </div>
                        </div>
                    </div>
                <!-- END COMMENT AND NOTIFICATION  SECTION -->





            </div>

        </div>
        <!--END PAGE CONTENT -->

         <!-- RIGHT STRIP  SECTION -->
         @include('admin.right')
         <!-- END RIGHT STRIP  SECTION -->
    </div>

@endsection
