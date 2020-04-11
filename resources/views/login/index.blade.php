<!DOCTYPE html>

<html class="bg-black" >
<head>
    <meta charset="UTF-8">
	<title>Login Page</title>
    <meta content='width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no' name='viewport'>
        <link href="{{asset('css/bootstrap.min.css')}}" rel="stylesheet"  />
        <link href="{{asset('css/font-awesome.min.css')}}" rel="stylesheet"  />
        <link href="{{asset('css/jquery.gritter.css')}}" rel="stylesheet"  />
        <link href="{{asset('css/schoex.css')}}" rel="stylesheet"  />

        <link href="{{asset('css/rtl.css')}}" rel="stylesheet" type="text/css" />
</head>


<body class="bg-black rtlPage">
    <div>
 @if (session('sucmsg'))
        <div class="alert alert-success">
            <b>
            {{ session('sucmsg') }}
            </div>  </b>
            
@endif

@if (session('status'))
<div class="alert alert-danger">
    <b>
    {{ session('status') }}
    </div>  </b>
    
@endif







        <div class="form-box" id="login-box">
        <div class="header bg-blue">Login</div>
	    <div>{{session('msg')}}</div>

    <form method="post">
                <div class="body bg-gray">

                    <div class="form-group">
                        <input type="text" name="uid" class="form-control" placeholder="Enter Your ID or Username" style="text-align: left" />
                    </div>
                    <div class="form-group">
                        <input type="password" name="password" class="form-control" placeholder="Enter Your Password" style="text-align: left" />
                    </div>          
                    <input type="hidden" name="_token" value="<?php echo csrf_token(); ?>">
                </div>
                <div class="footer">                                                               
                    <button type="submit" class="btn bg-blue btn-block">Login</button>  
                    <a href="/registration" class="btn bg-blue btn-block"  >registration</a>
                    Copyright &copy; 2020 (Rafi )
                </div>
            </form>
        </div>

        <script src="{{asset('js/jquery.min.js')}}"></script>
        <script src="{{asset('js/bootstrap.min.js')}}" type="text/javascript"></script>
    </body>
</html>


