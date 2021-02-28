<!DOCTYPE html>
<html lang="en">

    <head>
        <meta charset="utf-8" />
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0, user-scalable=0, minimal-ui">
        <title>Atelier Ecommerce</title>
        <meta content="Responsive admin theme build on top of Bootstrap 4" name="description" />
        <link rel="stylesheet" href="/asset/css/bootstrap.min.css" >
       <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" ></script>
       <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/js/bootstrap.bundle.min.js"></script>

    </head>

    <body>
    <div class="accountbg"></div>


        <div class="wrapper-page">
                <div class="card card-pages shadow-none">
                    <div class="card-body">
                    <div class="d-flex justify-content-center"><i class="fa fa-shopping-bag fa-10x" aria-hidden="true" style="color:#30419b"></i></div>
                        <h5 class="font-18 text-center">LOG IN</h5>
                        <form class="form-horizontal m-t-30" action="{{url('/connect')}}" method="post">
                        @csrf
                            <div class="form-group">
                                <div class="col-12">
                                        <label>URL</label>
                                    <input name="host" class="form-control" type="text" required="" placeholder="Host">
                                </div>
                            </div>
                            <div class="form-group">
                                <div class="col-12">
                                        <label>API Customer key</label>
                                    <input name="key" class="form-control" type="password" required="" placeholder="api key">
                                </div>
                            </div>
                            <div class="form-group">
                                <div class="col-12">
                                        <label>API Secret key</label>
                                    <input name="secret" class="form-control" type="password" required="" placeholder="secret key">
                                </div>
                            </div>
                            <div class="form-group text-center m-t-20">
                                <div class="col-12">
                                    <button class="btn btn-primary btn-block btn-lg waves-effect waves-light" type="submit">Logincle</button>
                                </div>
                            </div>
                        </form>
                    </div>

                </div>
            </div>

    </body>

</html>
