<!DOCTYPE html>
<html lang="en">

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

    <section id="head-background">
        <nav id="nav-bar" class="navbar navbar-expand-sm comic fixed-top">
            <a class="navbar-brand mr-auto" href="#">
                <img src="img/favicon.png" alt="logo" height="40px">
            </a>
            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                        <span class="fa fa-bars text-success"></span>
                    </button>

            <div class="collapse navbar-collapse" id="navbarSupportedContent">
                <ul class="navbar-nav ml-auto justify-content-center">
                    <li class="nav-item mx-2">
                        <a class="nav-link " href="#">About <span class="sr-only">(current)</span></a>
                    </li>
                    <li class="nav-item mx-2">
                        <a class="nav-link " href="#">How it works</a>
                    </li>
                    <li class="nav-item mx-2">
                        <a class="nav-link " href="#">Services</a>
                    </li>
                    <li class="nav-item mx-2">
                        <button class="btn btn-sm btn-success">Sign in</button>
                    </li>

                </ul>
            </div>
        </nav>


        <div class="container" id="head-text">
            <div class="row text-white">
                <div class="col-sm-6 monospace text-right" id="left-head">
                    <span class="d-block h1 font-weight-bold">
                                Lorem ipsum dolor.
                            </span>
                    <span class="d-block comic">
                                Lorem ipsum dolor sit amet consectetur adipisicing elit.
                            </span><span class="d-block comic">
                                Lorem ipsum dolor sit amet consectetur adipisicing elit.
                            </span><span class="d-block comic">
                                Lorem ipsum dolor sit amet consectetur adipisicing elit.
                            </span>
                </div>


                <div class="col-sm-6 monospace" id="right-head">
                    <span class="d-block h1 font-weight-bold">
                                Lorem ipsum dolor
                            </span>
                    <span class="d-block comic">
                                Lorem ipsum dolor sit amet consectetur adipisicing elit.
                            </span>
                    <span class="d-block comic">
                                Lorem ipsum dolor sit amet consectetur adipisicing elit.
                            </span>
                    <span class="d-block comic">
                                Lorem ipsum dolor sit amet consectetur adipisicing elit.
                            </span>
                </div>
            </div>
        </div>
        <div class="container justify-content-center">
            <center>
                <button type="button" class="btn btn-success" data-toggle="modal" id="join-button" data-target="#exampleModal">
                        Join Today
                    </button>
                <div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
                    <div class="modal-dialog" role="document">
                        <div class="modal-content">

                            <div class="modal-body">
                                <div class="row justify-content-center">
                                    <div class="col-md-12">
                                        <div class="card">
                                            <header class="card-header">
                                                <a href="" data-toggle="modal" data-target="#loginModal" class="float-right btn btn-outline-success mt-1">Log in</a>
                                                <h4 class="card-title mt-2">Sign up</h4>
                                            </header>
                                            <article class="card-body">
                                                <form>
                                                    <div class="form-row">
                                                        <div class="col form-group text-left font-weight-bold">
                                                            <label>First name </label>
                                                            <input type="text" class="form-control" name="fname" placeholder="Enter Firstname">
                                                        </div>
                                                        <!-- form-group end.// -->
                                                        <div class="col form-group text-left font-weight-bold">
                                                            <label>Last name</label>
                                                            <input type="text" class="form-control" name="lname" placeholder="Enter Lastname ">
                                                        </div>
                                                        <!-- form-group end.// -->
                                                    </div>
                                                    <!-- form-row end.// -->
                                                    <div class="form-group text-left font-weight-bold">
                                                        <label>Email address</label>
                                                        <input type="email" class="form-control" name="email" placeholder="Enter Email address">
                                                        <small class="form-text text-muted">We'll never share your email with anyone else.</small>
                                                    </div>
                                                    <!-- form-group end.// -->

                                                    <div class="form-row">
                                                        <div class="form-group text-left font-weight-bold col-md-6">
                                                            <label>City</label>
                                                            <input type="text" class="form-control" name="city" placeholder="Enter City you live in">
                                                        </div>
                                                        <!-- form-group end.// -->
                                                        <div class="form-group text-left font-weight-bold col-md-6">
                                                            <label>Country</label>
                                                            <select id="inputState" name="country" class="form-control">
                                            <option selected="">Nigeria</option>
                                            <option>Other</option>
                                        </select>
                                                        </div>
                                                        <!-- form-group end.// -->
                                                    </div>
                                                    <!-- form-row.// -->
                                                    <div class="form-group text-left font-weight-bold">
                                                        <label class="text-left">Create password</label>
                                                        <input class="form-control" type="password" name="password" placeholder="Create Password">
                                                    </div>
                                                    <!-- form-group end.// -->
                                                    <div class="form-group">
                                                        <button type="submit" class="btn btn-primary btn-block"> Register  </button>
                                                    </div>
                                                    <!-- form-group// -->
                                                    <small class="text-muted">By clicking the 'Sign Up' button, you confirm that you accept our <br> Terms of use and Privacy Policy.</small>
                                                </form>
                                            </article>
                                            <!-- card-body end .// -->
                                            <div class="border-top card-body text-center">Have an account? <a href="">Log In</a></div>
                                        </div>
                                        <!-- card.// -->
                                    </div>
                                    <!-- col.//-->

                                </div>
                                <!-- row.//-->
                            </div>
                            <div class="modal-footer">
                                <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                            </div>
                        </div>
                    </div>
                </div>
            </center>
        </div>

    </section>
    <section id="delta-flow" class="text-dark p-3 bg-light">
        <div class="container-fluid p-2">
            <div class="row justify-content-center">
                <div class="col-sm-8">
                    <h3 class="font-weight-bold text-center verdana">Stressful tranferring funds at regular intervals right? </h3>
                    <div class="d-block text-center" style="font-size:20px;"><span class="fa fa-refresh fa-spin"></span></div>
                    <p class="lead text-center">
                        Lorem ipsum dolor sit amet consectetur adipisicing elit. Sed nam facilis suscipit esse, nobis dolorem dolores obcaecati quia ipsa pariatur labore voluptas illo nisi corrupti quo, at modi! Quae, similique!

                    </p>
                </div>
            </div>
            <div class=" mt-4 row">
                <div class="col-sm-4">
                    <center>
                        <span class="fa fa-sign-in" style="font-size:40px;"></span>
                        <h3 class="monospace">Create a Delta account </h3>
                        <P>Lorem ipsum dolor sit amet consectetur adipisicing elit. Molestias magnam error ratione eos unde amet?</P>
                    </center>
                </div>
                <div class="col-sm-4">
                    <center>
                        <span class="fa fa-user-plus" style="font-size:40px;"></span>
                        <h3 class="monospace">Add Beneficiaries </h3>
                        <P>Lorem ipsum dolor sit amet consectetur adipisicing elit. Molestias magnam error ratione eos unde amet?</P>
                    </center>
                </div>
                <div class="col-sm-4">
                    <center>
                        <span class="fa fa-check-square-o" style="font-size:40px;"></span>
                        <h3 class="monospace"> Schedule Your Fund Transfers</h3>
                        <P>Lorem ipsum dolor sit amet consectetur adipisicing elit. Molestias magnam error ratione eos unde amet?</P>
                    </center>
                </div>
            </div>
        </div>
    </section>
    <section id="how-it-works" class="text-white p-4">
        <div class="container p-4">
            <div class="row justify-content-center p-4">
                <div class="col-sm-6">
                    <h3 class="comic text-center font-weight-bold">Delta's Mode Of Operations <span class="fa fa-rocket"></span> </h3>
                    <p class="lead">
                        Setting up your Delta recursive fund transfer is pretty easy, follow the steps listed below and enjoy our services
                    </p>
                </div>
            </div>
        </div>
        <div class="container p-4 mt-2 text-white">
            <div class="row">
                <div class="col-sm-6">
                    <center>
                        <img src="img/master.png" alt="Step-1">
                    </center>
                </div>
                <div class="col-sm-6">
                    <h3> <span class="fa fa-credit-card"></span> Add Payment Method</h3>
                    <p class="lead">
                        Lorem ipsum dolor sit amet consectetur adipisicing elit. Iure qui, a eligendi in rerum corrupti voluptates sit quae! Aperiam ducimus recusandae aspernatur temporibus ipsa veritatis quasi id voluptatibus error, officiis obcaecati optio tempora vitae!
                    </p>
                </div>

            </div>
        </div>

        <div class="container p-4 mt-2 text-white">
            <div class="row">
                <div class="col-sm-6 pt-4">
                    <h3> <span class="fa fa-user-plus"></span> Add Beneficiaries to Your Account</h3>
                    <p class="lead">
                        Lorem ipsum dolor sit amet consectetur adipisicing elit. Iure qui, a eligendi in rerum corrupti voluptates sit quae! Aperiam ducimus recusandae aspernatur temporibus ipsa veritatis quasi id voluptatibus error, officiis obcaecati optio tempora vitae! Lorem
                        ipsum dolor sit amet consectetur adipisicing elit. Iure qui, a eligendi in rerum corrupti voluptates sit quae! Aperiam ducimus recusandae aspernatur temporibus ipsa veritatis quasi id voluptatibus error, officiis obcaecati optio
                        tempora vitae!
                    </p>
                </div>
                <div class="col-sm-6">
                    <center>
                        <img src="img/user.png" alt="Step-2" width="80%">
                    </center>
                </div>

            </div>
        </div>

        <div class="container p-4 mt-2 text-white">
            <div class="row">
                <div class="col-sm-6">
                    <center>
                        <img src="img/money.png" alt="Step-3" width="80%">
                    </center>
                </div>
                <div class="col-sm-6">
                    <h3> <span class="fa fa-plus"></span> <span class="fa fa-dollar"></span><span class="fa fa-eur"></span> Fund Each of your Beneficiary cards</h3>
                    <p class="lead">
                        Lorem ipsum dolor sit amet consectetur adipisicing elit. Iure qui, a eligendi in rerum corrupti voluptates sit quae! Aperiam ducimus recusandae aspernatur temporibus ipsa veritatis quasi id voluptatibus error, officiis obcaecati optio tempora vitae! Lorem
                        ipsum dolor sit amet consectetur adipisicing elit. Iure qui, a eligendi in rerum corrupti voluptates sit quae! Aperiam ducimus recusandae aspernatur temporibus ipsa veritatis quasi id voluptatibus error, officiis obcaecati optio
                        tempora vitae!
                    </p>
                </div>

            </div>
        </div>

        <div class="container p-4 mt-2 text-white">
            <div class="row">
                <div class="col-sm-6 pt-4">
                    <h3> <span class="fa fa-send"></span> Schedule And Start Your Fund transfers</h3>
                    <p class="lead">
                        Lorem ipsum dolor sit amet consectetur adipisicing elit. Iure qui, a eligendi in rerum corrupti voluptates sit quae! Aperiam ducimus recusandae aspernatur temporibus ipsa veritatis quasi id voluptatibus error, officiis obcaecati optio tempora vitae! Lorem
                        ipsum dolor sit amet consectetur adipisicing elit. Iure qui, a eligendi in rerum corrupti voluptates sit quae! Aperiam ducimus recusandae aspernatur temporibus ipsa veritatis quasi id voluptatibus error, officiis obcaecati optio
                        tempora vitae!
                    </p>
                </div>
                <div class="col-sm-6">
                    <center>
                        <img src="img/schedule.png" alt="Step-2" width="80%">
                    </center>
                </div>

            </div>
        </div>
        <div class="container">
            <div class="row">
                <div class="col-sm-12">
                    <center>
                        <button class="btn btn-secondary mx-auto">
                                Sign Up Today
                        </button>
                    </center>

                </div>


            </div>
        </div>


    </section>
    <footer class="footer p-4 bg-dark">
        <div class="container">
            <div class="row">
                <div class="col-md-5 text-light">
                    <div class="row">
                        <div class="col-6">
                            <img src="img/favicon.png" alt="Logo" width="100%">
                        </div>
                        <div class="col-6 pt-md-4 pt-sm-o">
                            <ul class="nav text-dark">
                                <li class="nav-item"><a href="" class="nav-link pl-0"><i class="fa fa-facebook fa-lg text-white"></i></a></li>
                                <li class="nav-item"><a href="" class="nav-link"><i class="fa fa-twitter fa-lg text-white"></i></a></li>
                                <li class="nav-item"><a href="" class="nav-link"><i class="fa fa-github fa-lg text-white" ></i></a></li>
                                <li class="nav-item"><a href="" class="nav-link"><i class="fa fa-instagram fa-lg text-white"></i></a></li>

                            </ul>
                        </div>
                    </div>

                    <br>
                </div>
                <div class="col-md-2">
                    <h5 class="text-md-right text-light">Contact Us</h5>
                    <hr>
                </div>
                <div class="col-md-5">
                    <form>
                        <fieldset class="form-group">
                            <input type="email" class="form-control" id="exampleInputEmail1" placeholder="Enter email">
                        </fieldset>
                        <fieldset class="form-group">
                            <textarea class="form-control" id="exampleMessage" placeholder="Message"></textarea>
                        </fieldset>
                        <fieldset class="form-group text-xs-right">
                            <button type="button" class="btn btn-outline-success ">Send</button>
                        </fieldset>
                    </form>
                </div>
            </div>
        </div>
    </footer>

<div class="modal" id="loginModal">
  <div class="modal-dialog">
    <div class="modal-content">

      <!-- Modal Header -->
      <div class="modal-header">
        <h4 class="modal-title">Modal Heading</h4>
        <button type="button" class="close" data-dismiss="modal">&times;</button>
      </div>

      <!-- Modal body -->
      <div class="modal-body">
        Modal body..
      </div>

      <!-- Modal footer -->
      <div class="modal-footer">
        <button type="button" class="btn btn-danger" data-dismiss="modal">Close</button>
      </div>

    </div>
  </div>
</div>


    <!-- SCRIPTS -->
    <!-- JQuery -->
    <script type="text/javascript" src="js/jquery-3.3.1.min.js"></script>
    <!-- Bootstrap tooltips -->
    <script type="text/javascript" src="js/popper.min.js"></script>
    <!-- Bootstrap core JavaScript -->
    <script type="text/javascript" src="js/bootstrap.min.js"></script>
    <!-- MDB core JavaScript -->
    <script type="text/javascript" src="js/mdb.min.js"></script>
    <script>
        $(document).ready(function() {
            $(window).scroll(function() {
                var scroll = $(window).scrollTop();
                if (scroll > 200) {
                    $("#nav-bar").addClass('nav-bar-scroll');
                    $('.nav-link').addClass('nav-link-scroll');

                } else {
                    $('#nav-bar').removeClass('nav-bar-scroll');
                    $('.nav-link').removeClass('nav-link-scroll');

                }
            })
        })
    </script>
</body>

</html>