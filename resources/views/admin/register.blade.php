@extends('layouts.admin')

@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-8 col-md-offset-2">
            <div class="panel panel-default">
                <div class="panel-heading">Admin Register</div>
 
                <div class="panel-body">
                    <form class="form-horizontal" method="POST" action="{{ route('register') }}">
                        {{ csrf_field() }}

                        <div class="form-group{{ $errors->has('firstname') ? ' has-error' : '' }}">
                            <label for="firstname" class="col-md-4 control-label">[First Name</label>

                            <div class="col-md-6">
                                <input id="firstname" type="text" class="form-control" name="firstname" value="{{ old('firstname') }}" required autofocus>

                                @if ($errors->has('firstname'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('firstname') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>


                        <div class="form-group{{ $errors->has('lastname') ? ' has-error' : '' }}">
                            <label for="lastname" class="col-md-4 control-label">Last Name</label>

                            <div class="col-md-6">
                                <input id="lastname" type="text" class="form-control" name="lastname" value="{{ old('lastname') }}" required autofocus>

                                @if ($errors->has('lastname'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('lastname') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>










                        <div class="form-group{{ $errors->has('email') ? ' has-error' : '' }}">
                            <label for="email" class="col-md-4 control-label">E-Mail Address</label>

                            <div class="col-md-6">
                                <input id="email" type="email" class="form-control" name="email" value="{{ old('email') }}" required>

                                @if ($errors->has('email'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('email') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>

                        <div class="form-group{{ $errors->has('password') ? ' has-error' : '' }}">
                            <label for="password" class="col-md-4 control-label">Password</label>

                            <div class="col-md-6">
                                <input id="password" type="password" class="form-control" name="password" required>

                                @if ($errors->has('password'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('password') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>

                        <div class="form-group">
                            <label for="password-confirm" class="col-md-4 control-label">Confirm Password</label>

                            <div class="col-md-6">
                                <input id="password-confirm" type="password" class="form-control" name="password_confirmation" required>
                            </div>
                        </div>







                        <div class="form-group{{ $errors->has('userCity') ? ' has-error' : '' }}">
                            <label for="userCity" class="col-md-4 control-label">userCity</label>

                            <div class="col-md-6">
                                <input id="userCity" type="text" class="form-control" name="userCity" value="{{ old('userCity') }}" required autofocus>

                                @if ($errors->has('userCity'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('userCity') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>


                        <div class="form-group{{ $errors->has('userState') ? ' has-error' : '' }}">
                            <label for="userState" class="col-md-4 control-label">userState Name</label>

                            <div class="col-md-6">
                                <input id="userState" type="text" class="form-control" name="userState" value="{{ old('userState') }}" required autofocus>

                                @if ($errors->has('userState'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('userState') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>


                        <div class="form-group{{ $errors->has('userContry') ? ' has-error' : '' }}">
                            <label for="userContry" class="col-md-4 control-label">userContry</label>

                            <div class="col-md-6">
                                <input id="userContry" type="text" class="form-control" name="userContry" value="{{ old('userContry') }}" required autofocus>

                                @if ($errors->has('userContry'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('userContry') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>


                        <div class="form-group{{ $errors->has('userPhone') ? ' has-error' : '' }}">
                            <label for="userPhone" class="col-md-4 control-label">userPhone</label>

                            <div class="col-md-6">
                                <input id="userPhone" type="text" class="form-control" name="userPhone" value="{{ old('userPhone') }}" required autofocus>

                                @if ($errors->has('userPhone'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('userPhone') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>


                        <div class="form-group{{ $errors->has('userAddress1') ? ' has-error' : '' }}">
                            <label for="userAddress1" class="col-md-4 control-label">userAddress1</label>

                            <div class="col-md-6">
                                <input id="userAddress1" type="text" class="form-control" name="userAddress1" value="{{ old('userAddress1') }}" required autofocus>

                                @if ($errors->has('userAddress1'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('userAddress1') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>

                        <div class="form-group{{ $errors->has('userAddress2') ? ' has-error' : '' }}">
                            <label for="userAddress2" class="col-md-4 control-label">userAddress2</label>

                            <div class="col-md-6">
                                <input id="userAddress2" type="text" class="form-control" name="userAddress2" value="{{ old('userAddress2') }}" required autofocus>

                                @if ($errors->has('userAddress2'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('userAddress2') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>








                        <div class="form-group">
                            <div class="col-md-6 col-md-offset-4">
                                <button type="submit" class="btn btn-primary">
                                    Register
                                </button>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
