<!DOCTYPE html>
<html>
<head>
    <meta charset='utf-8'>
    <meta http-equiv='X-UA-Compatible' content='IE=edge'>
    <title>Learn Boostrap 4</title>
    <meta name='viewport' content='width=device-width, initial-scale=1'>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
    <link rel="stylesheet" href="assets/css/responsive.css">
    <script src='https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js'></script>
</head>
<body>
    <div class="container-fluid">
        <div class="row">
            <div class="col-12 col-md-12 col-lg-12 col-xl-12 px-0">
                <nav class="navbar navbar-expand-lg navbar-light bg-light">
                    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarTogglerDemo01" aria-controls="navbarTogglerDemo01" aria-expanded="false" aria-label="Toggle navigation">
                      <span class="navbar-toggler-icon"></span>
                    </button>
                    <div class="collapse navbar-collapse" id="navbarTogglerDemo01">
                        
                      <a class="navbar-brand" href="#">Hidden brand</a>
                        
                      <!-- <ul class="navbar-nav mr-auto mt-2 mt-lg-0">
                        <li class="nav-item active">
                          <a class="nav-link" href="#">Home <span class="sr-only">(current)</span></a>
                        </li>
                        <li class="nav-item">
                          <a class="nav-link" href="#">Link</a>
                        </li>
                        <li class="nav-item">
                          <a class="nav-link disabled" href="#">Disabled</a>
                        </li>
                      </ul> -->
                     
                        <ul class="navbar-nav ml-auto mt-2 mt-lg-0">
                            <li class="nav-item active">
                              <a class="nav-link" href="#">Home <span class="sr-only">(current)</span></a>
                            </li>
                            <li class="nav-item">
                              <a class="nav-link" href="#">Link</a>
                            </li>
                            <li class="nav-item">
                              <a class="nav-link disabled" href="#">Disabled</a>
                            </li>
                          </ul>
                       
                    </div>
                  </nav>
                  <div class="w-100">
                     <div class="breadcrumb">
                        <div class="breadcrumb">sad</div>
                    </div>
                  </div>
            </div>
        </div>
    </div>
    <div class="container">
        <div class="row">
            <div class="col-2 col-md-2 col-sm-2 col-lg-2 col-xl-3">
                <div class="breadcrumb"><h2>sad</h2></div>
            </div>
            <div class='offset-1 col-9 md-offset-1 col-md-7'>
                <div class="card p-3">
                    <form method="POST" action="controllers/insert_data.php">
                        <div class="form-group">
                            <label for="usrrname">Username :-</label>
                            <input type="text" name="usrrname" id="usrrname" class="form-control" placeholder="type username here...">
                        </div>
                        <div class="form-row">
                            <div class="form-group col-6">
                                <label for="emailGet">Email Address</label>
                                <input type="email" name="emailGet" placeholder="type Email Here.." class="form-control" id="emailGet">
                            </div>
                            <div class="form-group col-6">
                                <label for="passwordGet">Password</label>
                                <input type="password" name="passwordGet" placeholder="type Email Here.." class="form-control" id="passwordGet">
                            </div>
                        </div>
                        <div class="form-group">
                            <button type="submit" class="btn btn-primary d-block mx-auto">Submit</button>
                        </div>
                    </form>
                </div>
            </div>

            </div>
        </div>
    </div>

    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
</body>
</html>