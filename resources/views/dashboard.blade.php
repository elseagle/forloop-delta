<!DOCTYPE html>
<html>

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta http-equiv="x-ua-compatible" content="ie=edge">
    <title>Foorloop Hack-ife</title>
    <!-- Font Awesome -->
    <link rel="stylesheet" href="{{ asset('css/font-awesome.min.css')}}">
    <!-- Bootstrap core CSS -->
    <link href="{{ asset('css/bootstrap.min.css')}}" rel="stylesheet">
    <!-- Material Design Bootstrap -->
    <link href="{{ asset('css/mdb.min.css')}}" rel="stylesheet">
    <!-- Your custom styles (optional) -->
    <link href="{{ asset('css/style.css')}}" rel="stylesheet">
    <link rel="icon" href="{{ asset('img/favicon.png')}}">
</head>

<body>

    <div class="wrapper">

        <!-- Sidebar -->


        <!-- Page Content -->
        <div class="wrapper">
            <!-- Sidebar -->
            <nav id="sidebar">
                <div class="sidebar-header">
                    <h3> <span class="fa fa-th"></span> Dashboard</h3>
                </div>

                <ul class="list-unstyled components">
                    <p>
                        <span class="d-inline-block mr-1 fa fa-user"></span>
                        <span class="comic"> {{ $details['lastname']." ".$details['firstname'] }}</span> 
                    </p>
                    <li class="active">
                        <a href="#homeSubmenu" aria-expanded="false"> <span class="fa fa-home"></span> Home</a>
                    </li>
                    <li>
                        <a href="#"><span class="fa fa-credit-card"></span> Add billing method</a>
                    </li>
                    <!-- <li>
                <a href="#pageSubmenu" data-toggle="collapse" aria-expanded="false" class="dropdown-toggle">Pages</a>
                <ul class="collapse list-unstyled" id="pageSubmenu">
                    <li>
                        <a href="#">Page 1</a>
                    </li>
                    <li>
                        <a href="#">Page 2</a>
                    </li>
                    <li>
                        <a href="#">Page 3</a>
                    </li>
                </ul>
            </li> -->
                    <li>
                        <a href="#"><span class="fa fa-users"></span> Benefiiciaries </a>
                    </li>
                    <li>
                        <a href="#"><span class="fa fa-question-circle"></span> Help </a>
                    </li>
                </ul>

            </nav>
            <!-- Page Content -->
            <div id="content">
                <nav class="navbar navbar-expand-sm navbar-dark py-0 bg-dark text-light" id="navbar-head">
                    <div class="container-fluid">
                        <button type="button" id="sidebarCollapse" class="btn btn-link text-light">
                            <i class="fa fa-align-left text-light" style="font-size:25px"></i>
                        </button>
                        <img src="{{ asset('img/favicon.png')}}" class="d-inline-block mx-auto" alt="Logo" width="150px">

                    {!! Form::open(['url'=>'logout', 'method'=>'post']) !!}
                        <button class="btn btn-light btn-sm">
                            <span class="fa fa-sign-out"></span> Sign Out
                        </button>
                    {!! Form::close() !!}
                    </div>
                </nav>
                <p>
                    Lorem ipsum dolor sit amet consectetur adipisicing elit. Lorem ipsum dolor sit amet consectetur adipisicing elit. Error, modi. Odit deserunt fugiat dicta Lorem ipsum dolor sit amet consectetur.. Lorem, ipsum dolor.
                </p>
                @if(isset($errors) && count($errors)>0)
                        @foreach($errors->all() as $error)    
                            <div class="alert alert-warning alert-dismissible fade show " role="alert">
                                {{$error}}
                                <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                                    <span aria-hidden="true">&times;</span>
                                </button>
                            </div>
                            @endforeach
                        @endif
                <section>
                    <div class="container">
                        <div class="row">
                            @if(count($beneficiary)> 0)
                            @foreach($beneficiary as $ben)

                                <div class="col-md-4 mb-4">
                                    <!-- Card -->
                                    <div class="card ovf-hidden">

                                        <!-- Card image -->
                                        <div class="view overlay">
                                            <a>
                                                <div class="mask waves-effect waves-light rgba-white-slight"></div>
                                            </a>
                                        </div>

                                        <!-- Card content -->
                                        <div class="card-body">

                                            <!-- Title -->
                                            <h4 class="card-title font-weight-bold"><span class="fa fa-user-circle"></span> {{ $ben->name }} </h4>
                                            <hr>
                                            <!-- Text -->
                                            <p class="card-text">
                                                <p>Send <span class="text-success">{{ $ben->amount }}</span> | every <span class="text-primary"> {{ $ben->interval }}days </span> </p>
                                                <p> <span class="font-weight-bold"> Status :</span> <span class="text-success">{{ $ben->status }}</span> </p>
                                                <p> <span class="font-weight-bold"> Account Number :</span> <span> {{ $ben->account }} </span> </p>
                                                <P class="lead"> {{ $ben->description }} </P>
                                                <button class="btn btn-light btn-sm mt-4"> <span class="fa fa-money"></span>  #{{ $ben->amount }} | click to Add </button>    
                                            </p>
                                            <hr>
                                            <button class="btn btn-danger float-left btn-sm"> Pause </button>
                                            <button class="btn btn-success float-right btn-sm"> Continue </button>

                                            <a class="link-text">
                                                <!-- <h5>Read more <i class="fa fa-angle-double-right ml-2"></i></h5> -->
                                            </a>

                                        </div>



                                    </div>
                                    <!-- Card -->
                                </div>
                                @endforeach
                                @endif

                        </div>
                    </div>
                </section>
                <section>
                    <div class="container">
                        <div class="row">
                            <button class="btn btn-info mx-auto" data-toggle="modal" data-target="#exampleModal">Add Beneficiary</button>
                        </div>
                    </div>
                </section>

            </div>
        </div>



        <!-- Modal -->
        <div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
            <div class="modal-dialog" role="document">
                <div class="modal-content">
                    <div class="modal-header">
                        <h5 class="modal-title " id="exampleModalLabel"><span class="fa fa-user"></span> Add new Beneficiary </h5>
                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                            <span aria-hidden="true">&times;</span>
                        </button>
                    </div>
                    <div class="modal-body">
                        {!! Form::open(['url'=>'addben', 'method'=>'POST']) !!}
                           <div class="row">
                                <div class="form-group col-md-12">
                                    <label for="benName" class="font-weight-bold">Enter Name</label>
                                    <input type="text" id="benName" name="name" class="form-control" placeholder="Enter Recipient's Name">
                                </div>

                                <div class="form-group col-md-6">
                                    <label for="benAcc" class="font-weight-bold">Enter Amount</label>
                                    <input type="text" id="benAcc" name="amount" class="form-control" placeholder="Enter Amount">
                                </div>
                                    
                                <div class="form-group col-md-6" >
                                    <label class="font-weight-bold" id="benInterval">Select Interval</label>
                                    <select id="benInterval" name="interval" class="form-control">
                                            <option selected="" value="7">Weekly </option>
                                            <option value="14">2 Weeks </option>
                                            <option value="21">3 Weeks </option>
                                            <option value="30">Monthly </option>
                                            <option value="365">Yearly </option>
                                    </select>
                                </div>
                                
                                <div class="form-group col-md-12">
                                        <label for="benAccount" class="font-weight-bold">Account Number</label>
                                        <input type="number" id="benAccount" name="account" class="form-control" placeholder="Enter Recipient's Account Number">
                                </div>

                                <div class="form-group col-md-12">
                                        <label for="benDesc" class="font-weight-bold"> Description </label>
                                        <textarea type="text" id="benDesc" name="description" class="form-control" rows="4" placeholder="Enter description ">
                                        
                                        </textarea>
                                </div>
                                
        
                            </div>
                            <button class="btn btn-success"> Add </button>
                           {!! Form::close() !!}

                           

                     
                    </div>
                    <div class="modal-footer">
                        <button type="button" class="btn btn-danger" data-dismiss="modal">Close</button>
                        {{-- <button type="button" role="submit" class="btn btn-success">Save changes</button> --}}
                    </div>
                </div>
            </div>
        </div>

    <script type="text/javascript" src="{{ asset('js/jquery-3.3.1.min.js')}}"></script>
        <!-- Bootstrap tooltips -->
    <script type="text/javascript" src="{{ asset('js/popper.min.js') }}"></script>
        <!-- Bootstrap core JavaScript -->
        <script type="text/javascript" src="{{ asset('js/bootstrap.min.js') }}"></script>
        <!-- MDB core JavaScript -->
        <script type="text/javascript" src="{{ asset('js/mdb.min.js') }}">
        </script>
        <script>
            $(document).ready(function() {
                $('#sidebarCollapse').on('click', function() {
                    $('#sidebar').toggleClass('active');
                });
            });
        </script>


</body>

</html>