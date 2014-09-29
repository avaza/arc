<!DOCTYPE html>
<html lang="en"><head>
    <meta charset="utf-8">
    <title>Login &amp; Signup forms in panel - Bootsnipp.com</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link href="//netdna.bootstrapcdn.com/bootstrap/3.1.0/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
    <style type="text/css">
        </style>

    <script src="//netdna.bootstrapcdn.com/bootstrap/3.1.0/js/bootstrap.min.js"></script>
</head>
<body>
	    <div class="container">    
        <div id="loginbox" style="margin-top: 50px; display: none;" class="mainbox col-md-6 col-md-offset-3 col-sm-8 col-sm-offset-2">                    
            <div class="panel panel-info">
                    <div class="panel-heading">
                        <div class="panel-title">Sign In</div>
                        <div style="float:right; font-size: 80%; position: relative; top:-10px"><a href="#">Forgot password?</a></div>
                    </div>     

                    <div style="padding-top:30px" class="panel-body">

                        <div style="display:none" id="login-alert" class="alert alert-danger col-sm-12"></div>
                            
                        <form id="loginform" class="form-horizontal" role="form">
                                    
                            <div style="margin-bottom: 25px" class="input-group">
                                        <span class="input-group-addon"><i class="glyphicon glyphicon-user"></i></span>
                                        <input id="login-username" type="text" class="form-control" name="username" value="" placeholder="username or email">                                        
                                    </div>
                                
                            <div style="margin-bottom: 25px" class="input-group">
                                        <span class="input-group-addon"><i class="glyphicon glyphicon-lock"></i></span>
                                        <input id="login-password" type="password" class="form-control" name="password" placeholder="password">
                                    </div>
                                    

                                
                            <div class="input-group">
                                      <div class="checkbox">
                                        <label>
                                          <input id="login-remember" type="checkbox" name="remember" value="1"> Remember me
                                        </label>
                                      </div>
                                    </div>


                                <div style="margin-top:10px" class="form-group">
                                    <!-- Button -->

                                    <div class="col-sm-12 controls">
                                      <a id="btn-login" href="#" class="btn btn-success">Login  </a>
                                      <a id="btn-fblogin" href="#" class="btn btn-primary">Login with Facebook</a>

                                    </div>
                                </div>


                                <div class="form-group">
                                    <div class="col-md-12 control">
                                        <div style="border-top: 1px solid#888; padding-top:15px; font-size:85%">
                                            Don't have an account! 
                                        <a href="#" onclick="$('#loginbox').hide(); $('#signupbox').show()">
                                            Sign Up Here
                                        </a>
                                        </div>
                                    </div>
                                </div>    
                            </form>     



                        </div>                     
                    </div>  
        </div>
        <div id="signupbox" style="margin-top: 50px;" class="mainbox col-md-6 col-md-offset-3 col-sm-8 col-sm-offset-2">
                    <div class="panel panel-info">
                        <div class="panel-heading">
                            <div class="panel-title">Sign Up</div>
                            <div style="float:right; font-size: 85%; position: relative; top:-10px"><a id="signinlink" href="#" onclick="$('#signupbox').hide(); $('#loginbox').show()">Sign In</a></div>
                        </div>  
                        <div class="panel-body">
                            <form id="signupform" class="form-horizontal" role="form">
                                
                                <div id="signupalert" style="display:none" class="alert alert-danger">
                                    <p>Error:</p>
                                    <span></span>
                                </div>

                                <!-- Email Form Input -->
                                <div class="form-group">
                                    {{ Form::label('email', 'Email:') }}
                                    {{ Form::text('email', null, ['class' => 'form-control']) }}
                                </div>

                                <!-- First Name Form Input -->
                                <div class="form-group">
                                    {{ Form::label('first_name', 'First Name:') }}
                                    {{ Form::text('first_name', null, ['class' => 'form-control']) }}
                                </div>

                                <!-- Last Name Form Input -->
                                <div class="form-group">
                                    {{ Form::label('last_name', 'Last Name:') }}
                                    {{ Form::text('last_name', null, ['class' => 'form-control']) }}
                                </div>

                                <!-- Password Form Input -->
                                <div class="form-group">
                                    {{ Form::label('password', 'Password:') }}
                                    {{ Form::password('password', ['class' => 'form-control']) }}
                                </div>

                                <!-- Password Confirmation Form Input -->
                                <div class="form-group">
                                    {{ Form::label('password_confirmation', 'Password Confirmation:') }}
                                    {{ Form::password('password_confirmation', ['class' => 'form-control']) }}
                                </div>

                                <!-- Invitation Code Form Input -->
                                <div class="form-group">
                                    {{ Form::label('invitation_code', 'Invitation Code:') }}
                                    {{ Form::text('invitation_code', null, ['class' => 'form-control']) }}
                                </div>

                                <div class="form-group">
                                    <!-- Button -->                                        
                                    <div class="col-md-offset-3 col-md-9">
                                        <button id="btn-signup" type="button" class="btn btn-info"><i class="icon-hand-right"></i> &nbsp; Sign Up</button>
                                    </div>
                                </div>

                            </form>
                         </div>
                    </div>

               
               
                
         </div> 
    </div>
    	<script type="text/javascript">
		</script>


</body></html>