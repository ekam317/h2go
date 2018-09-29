@extends('layouts.master')

@push('css')
    <link href="{{asset('plugins/components/datatables/jquery.dataTables.min.css')}}" rel="stylesheet" type="text/css"/>
    <link href="https://cdn.datatables.net/buttons/1.2.2/css/buttons.dataTables.min.css" rel="stylesheet"
          type="text/css"/>
@endpush

@section('content')
    <div class="container-fluid1111">
        <!-- .row -->
        <div class="row">
            <div class="col-sm-12">
                <div class="white-box">
                    <div class="panel panel-default">
                        
                        <div class="panel-wrapper collapse in">
                            <ul class="nav customtab nav-tabs" role="tablist">
                                <li role="presentation" class="active">
                                    <a href="#home1" aria-controls="home" role="tab"
                                                                          data-toggle="tab" aria-expanded="true"><span
                                                class="visible-xs"><i class="ti-home"></i></span><span class="hidden-xs"> Medical Degree/s</span></a>
                                </li>
                                <li role="presentation" class="">
                                    <a href="#profilerey" aria-controls="profile" role="tab"
                                                                    data-toggle="tab" aria-expanded="true"><span
                                                class="visible-xs"><i class="ti-user"></i></span> <span class="hidden-xs">Postgraduate Training</span></a>
                                </li>
                                <li role="presentation"><a href="#messages1" aria-controls="messages" role="tab"
                                                           data-toggle="tab"><span class="visible-xs"><i
                                                    class="ti-email"></i></span> <span class="hidden-xs">Board Certificate</span></a>
                                </li>

                                <li role="presentation"><a href="#postgraduate_experience" aria-controls="messages" role="tab"
                                    data-toggle="tab"><span class="visible-xs"><i
                                    class="ti-email"></i></span> <span class="hidden-xs">Postgraduate Experience</span></a>
                                </li>

                                <li role="presentation"><a href="#categories_specialties" ria-controls="messages" role="tab"
                                    data-toggle="tab"><span class="visible-xs"><i
                                    class="ti-email"></i></span> <span class="hidden-xs">Categories & Specialities</span></a>
                                </li>
                            </ul>
                            <div class="panel-body">
                                <div class="tab-content m-t-0">
                                    <div role="tabpanel" class="tab-pane fade active in" id="home1">                                     
                                    
                                        @foreach($mydegrees as $degree)
                                            @include ('serviceprovider/degrees.degrees.form_medical_degree')
                                        @endforeach
                                        
                                        
                                        {!! Form::open(['url' => '/serviceprovider/degrees', 'class' => 'form-horizontal', 'files' => true]) !!}
                                            @include ('serviceprovider/degrees.degrees.form_medical_degreeadd')
                                        {!! Form::close() !!}

									<div class="clearfix"></div>
                                    </div>
                                    <div role="tabpane1" class="tab-pane fade" id="profilerey">
                                            @include ('serviceprovider/degrees.degrees.form_postgrad')
                                            {!! Form::open(['url' => '/serviceprovider/degrees', 'class' => 'form-horizontal', 'files' => true]) !!}
                                            @include ('serviceprovider/degrees.degrees.form_postgradadd')
                                            {!! Form::close() !!}

								       <div class="clearfix"></div>
                                    </div>
                                    <div role="tabpanel" class="tab-pane fade" id="messages1">
                                            @include ('serviceprovider/degrees.degrees.form_board_cert')
                                            {!! Form::open(['url' => '/serviceprovider/degrees', 'class' => 'form-horizontal', 'files' => true]) !!}
                                            @include ('serviceprovider/degrees.degrees.form_board_certadd')
                                            {!! Form::close() !!}
                                        <div class="clearfix"></div>
                                    </div>
                                    <div role="tabpanel" class="tab-pane fade" id="postgraduate_experience">
                                            @include ('serviceprovider/degrees.degrees.form_post_grad_exp')
                                            {!! Form::open(['url' => '/serviceprovider/degrees', 'class' => 'form-horizontal', 'files' => true]) !!}
                                           // @include ('serviceprovider/degrees.degrees.form_post_grad_expadd')
                                            {!! Form::close() !!}
                                        <div class="clearfix"></div>
                                    </div>

									 <div role="tabpanel" class="tab-pane fade" id="categories_specialties">
                                            @include ('serviceprovider/degrees.degrees.form_category_specialty')
                                            {!! Form::open(['url' => '/serviceprovider/degrees', 'class' => 'form-horizontal', 'files' => true]) !!}
                                            @include ('serviceprovider/degrees.degrees.form_category_specialtyadd')
                                            {!! Form::close() !!}
                                        <div class="clearfix"></div>
                                    </div>
                                    
                                </div>
                            </div>
                        </div>
                    </div>     
                </div>
                {{-- Add Degree Panel --}}

                

            </div>
        </div>
    </div>
@endsection



@push('js')
    <script src="{{asset('plugins/components/toast-master/js/jquery.toast.js')}}"></script>

    <script src="{{asset('plugins/components/datatables/jquery.dataTables.min.js')}}"></script>
    <!-- start - This is for export functionality only -->
    <!-- end - This is for export functionality only -->
    <script>
        $(document).ready(function () {

            @if(\Session::has('message'))
            $.toast({
                heading: 'Success!',
                position: 'top-center',
                text: '{{session()->get('message')}}',
                loaderBg: '#ff6849',
                icon: 'success',
                hideAfter: 3000,
                stack: 6
            });
            @endif
        })

        $(function () {
            $('#myTable').DataTable({
                'aoColumnDefs': [{
                    'bSortable': false,
                    'aTargets': [-1] /* 1st one, start by the right */
                }]
            });

        });
    </script>

@endpush