<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <title></title>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-beta/css/bootstrap.min.css">
    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.11.0/umd/popper.min.js" integrity="sha384-b/U6ypiBEHpOf/4+1nzFpr53nxSS+GLCkfwBdFNTxtclqqenISfwAzpKaMNFNmj4" crossorigin="anonymous"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-beta/js/bootstrap.min.js" integrity="sha384-h0AbiXch4ZDo7tp9hKZ4TsHbi047NrKGLO3SEJAg45jXxnGIfYzk4Si90RDIqNm1" crossorigin="anonymous"></script>
    <link href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css" rel="stylesheet" integrity="sha384-wvfXpqpZZVQGK6TAh5PVlGOfQNHSoD2xbE+QkPxCAFlNEevoEH3Sl0sibVcOQVnN" crossorigin="anonymous">
    <link rel="stylesheet" type = "text/css" href="./css.css">
  </head>
  <body>
    <!-- Start Nav Bar -->
    <nav class="navbar navbar-toggleable-md navbar-light bg-faded">
      <button class="navbar-toggler navbar-toggler-right" type="button" data-toggle="collapse" data-target="#navbarNavAltMarkup" aria-controls="navbarNavAltMarkup" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>
      <a class="navbar-brand" href="./index.html">This Is Wordpress</a>
      <div class="collapse navbar-collapse" id="navbarNavAltMarkup">
        <div class="navbar-nav">
          <a class="nav-item nav-link active" href="./index.html">Home <span class="sr-only">(current)</span></a>
          <a class="nav-item nav-link" href="./posts.html">Posts</a>
          <a class="nav-item nav-link" href="./contact.html">Contact</a>
          <a class="nav-item nav-link disabled" href="#">Admin Only</a>
        </div>
      </div>
    </nav>
    <!-- End Nav Bar -->

    <h1>Contact Me!</h1>
    <div class="container">
        <form class="" action=" " method="post"  id="contact_form">
          <div class="row">

          </div>
                <!-- First Name -->
                <div class="form-group">
                  <label class="col-md-12 control-label">First Name</label>
                  <div class="col-md-12 inputGroupContainer">
                  <div class="input-group">
                  <span class="input-group-addon"><i class="glyphicon glyphicon-user"></i></span>
                  <input  name="first_name" placeholder="First Name" class="form-control"  type="text">
                    </div>
                  </div>
                </div>

                <!-- Last Name-->
                <div class="form-group">
                  <label class="col-md-12 control-label" >Last Name</label>
                    <div class="col-md-12 inputGroupContainer">
                    <div class="input-group">
                  <span class="input-group-addon"><i class="glyphicon glyphicon-user"></i></span>
                  <input name="last_name" placeholder="Last Name" class="form-control"  type="text">
                    </div>
                  </div>
                </div>

                <!-- E-Mail-->
                       <div class="form-group">
                  <label class="col-md-12 control-label">E-Mail</label>
                    <div class="col-md-12 inputGroupContainer">
                    <div class="input-group">
                        <span class="input-group-addon"><i class="glyphicon glyphicon-envelope"></i></span>
                  <input name="email" placeholder="E-Mail Address" class="form-control"  type="text">
                    </div>
                  </div>
                </div>

                <!--Phone-->
                <div class="form-group">
                  <label class="col-md-12 control-label">Phone</label>
                    <div class="col-md-12 inputGroupContainer">
                    <div class="input-group">
                        <span class="input-group-addon"><i class="glyphicon glyphicon-earphone"></i></span>
                  <input name="phone" placeholder="(845)555-1212" class="form-control" type="text">
                    </div>
                  </div>
                </div>

                <!-- Address-->
                <div class="form-group">
                  <label class="col-md-12 control-label">Address</label>
                    <div class="col-md-12 inputGroupContainer">
                    <div class="input-group">
                        <span class="input-group-addon"><i class="glyphicon glyphicon-home"></i></span>
                  <input name="address" placeholder="Address" class="form-control" type="text">
                    </div>
                  </div>
                </div>

                <!-- City-->
                <div class="form-group">
                  <label class="col-md-12 control-label">City</label>
                    <div class="col-md-12 inputGroupContainer">
                    <div class="input-group">
                        <span class="input-group-addon"><i class="glyphicon glyphicon-home"></i></span>
                  <input name="city" placeholder="city" class="form-control"  type="text">
                    </div>
                  </div>
                </div>

                <!-- Zip Code-->
                <div class="form-group">
                  <label class="col-md-12 control-label">Zip Code</label>
                    <div class="col-md-12 inputGroupContainer">
                    <div class="input-group">
                        <span class="input-group-addon"><i class="glyphicon glyphicon-home"></i></span>
                  <input name="zip" placeholder="Zip Code" class="form-control"  type="text">
                    </div>
                </div>
                </div>


                <!-- Submit Button -->
                <div class="form-group">
                  <label class="col-md-12 control-label"></label>
                  <div class="col-md-12">
                    <button type="submit" class="btn btn-info" >Send <span class="glyphicon glyphicon-send"></span></button>
                  </div>
                </div>



            </form>
          </div>
        </div>
        <!-- /.container -->

  </body>
</html>
