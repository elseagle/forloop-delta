<!DOCTYPE html>
<html>

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta http-equiv="x-ua-compatible" content="ie=edge">
    <title>Foorloop Hack-ife</title>
    <!-- Font Awesome -->
    <link rel="stylesheet" href="css/font-awesome.min.css">
    <!-- Bootstrap core CSS -->
    <link href="css/bootstrap.min.css" rel="stylesheet">
    <!-- Material Design Bootstrap -->
    <link href="css/mdb.min.css" rel="stylesheet">
    <!-- Your custom styles (optional) -->
    <link href="css/style.css" rel="stylesheet">
    <link rel="icon" href="img/favicon.png">
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
                    <p>Dummy Heading</p>
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
                <nav class="navbar navbar-expand-sm navbar-light py-0 bg-light">
                    <div class="container-fluid">
                        <button type="button" id="sidebarCollapse" class="btn btn-dark">
                            <i class="fa fa-align-left"></i>
                        </button>
                        <img src="img/favicon.png" class="d-inline-block mx-auto" alt="Logo" width="150px">

                        <span class="d-inline-block fa fa-user-circle" style="font-size:25px"></span>
                        <span>Falola James</span>
                    </div>
                </nav>
                <p>
                    Lorem ipsum dolor sit amet consectetur adipisicing elit. Lorem ipsum dolor sit amet consectetur adipisicing elit. Error, modi. Odit deserunt fugiat dicta Lorem ipsum dolor sit amet consectetur.. Lorem, ipsum dolor.
                </p>

                <section>
                    <div class="container">
                        <div class="row">
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
                                        <h4 class="card-title font-weight-bold"> Mr doe </h4>
                                        <hr>
                                        <!-- Text -->
                                        <p class="card-text">
                                            <span class="text-primary">1000</span> | <span class="text-danger">2days</span>
                                            <p class="lead">
                                                Description
                                            </p>
                                            <p class="lead">
                                                Description
                                            </p>
                                            <p class="lead">
                                                Description
                                            </p>
                                            <p class="lead">
                                                Description
                                            </p>

                                        </p>
                                        <hr>
                                        <button class="btn btn-info float-right btn-sm">View </button>

                                        <a class="link-text">
                                            <!-- <h5>Read more <i class="fa fa-angle-double-right ml-2"></i></h5> -->
                                        </a>

                                    </div>



                                </div>
                                <!-- Card -->
                            </div>


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
                        <h5 class="modal-title" id="exampleModalLabel">Modal title</h5>
                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                            <span aria-hidden="true">&times;</span>
                        </button>
                    </div>
                    <div class="modal-body">
                        ...
                    </div>
                    <div class="modal-footer">
                        <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                        <button type="button" class="btn btn-primary">Save changes</button>
                    </div>
                </div>
            </div>
        </div>

        <script type="text/javascript" src="js/jquery-3.3.1.min.js"></script>
        <!-- Bootstrap tooltips -->
        <script type="text/javascript" src="js/popper.min.js"></script>
        <!-- Bootstrap core JavaScript -->
        <script type="text/javascript" src="js/bootstrap.min.js"></script>
        <!-- MDB core JavaScript -->
        <script type="text/javascript" src="js/mdb.min.js">
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