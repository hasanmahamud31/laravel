<!DOCTYPE html>
<html lang="en">
    @include('front_end_include/head')
    <body>
        <div class="container-fluid-full">
            <div class="row-fluid">
                <div class="row-fluid">
                    <div class="login-box">
                        <div class="icons">
                            <a href="{{ route('login/submit') }}"><i class="halflings-icon home"></i></a>
                            <a href="{{  route('login/submit') }}"><i class="halflings-icon cog"></i></a>
                        </div>
                        <h2>Login to your account</h2>
                        
                        <h2 style="color: #ff9999">{{ Session::get( 'massage' ) }}</h2>
                        {{ Form::open(array('url' => 'login/submit', 'methrod' => 'post', 'class' => 'form-horizontal')) }}
                            <fieldset>

                                <div class="input-prepend" title="Username">
                                    <span class="add-on"><i class="halflings-icon user"></i></span>
                                    <!--<input class="input-large span10" name="email" id="username" type="text" placeholder="type username"/>-->
                                    {{ Form::email('email', '',array('placeholder' => 'type username', 'class' => 'input-large span10', 'id' => 'username' )) }}
                                </div>
                                <div class="clearfix"></div>

                                <div class="input-prepend" title="Password">
                                    <span class="add-on"><i class="halflings-icon lock"></i></span>
                                    <!--<input class="input-large span10" name="password" id="password" type="password" placeholder="type password"/>-->
                                    {{ Form::password('password',  array('id' => 'password', 'class' => 'input-large span10', 'placeholder' => 'type password' )) }}
                                </div>
                                <div class="clearfix"></div>

                                <label class="remember" for="remember"><input type="checkbox" id="remember" />Remember me</label>

                                <div class="button-login">	
                                    <button type="submit" class="btn btn-primary">Login</button>
                                </div>
                                <div class="clearfix"></div>
                        {{ Form::close() }}
                        <hr>
                        <h3>Forgot Password?</h3>
                        <p>
                            No problem, <a href="#">click here</a> to get a new password.
                        </p>	
                    </div><!--/span-->
                </div><!--/row-->
            </div><!--/.fluid-container-->
        </div><!--/fluid-row-->

        <!-- start: JavaScript-->
        @include('front_end_include/java_script_include')
        <!-- end: JavaScript-->

    </body>
</html>
