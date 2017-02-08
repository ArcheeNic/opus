@extends('layouts.app')

@section('content')
    <div class="organization-create">
        <h1 class="text-center marginless heading">Create Team</h1>
        <form action="{{ route('organizations.store') }}" method="POST" role="form">
            <div class="row">
                <div class="col-xs-12 col-sm-12 col-md-12 col-lg-12">
                    <div class="form-group{{ $errors->has('email') ? ' has-error' : '' }}">
                        <label for="email" class="control-label">Email</label>
                        <input id="email" type="email" class="form-control input" name="email" placeholder="john@example.com" required>
                        @if ($errors->has('email'))
                            <div class="help-block with-errors">
                                <strong>{{ $errors->first('email') }}</strong>
                            </div>
                        @endif
                    </div>
                    <div class="row">
                        <div class="col-xs-12 col-sm-12 col-md-6 col-lg-6">
                            <div class="form-group{{ $errors->has('first_name') ? ' has-error' : '' }}">
                                <label for="first-name" class="control-label">First name</label>
                                <input id="first-name" type="text" class="form-control input" name="first_name" value="{{ old('first_name') }}" placeholder="John" required>
                                @if ($errors->has('first_name'))
                                    <span class="help-block with-errors">
                                        <strong>{{ $errors->first('first_name') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>
                        <div class="col-xs-12 col-sm-12 col-md-6 col-lg-6">
                            <div class="form-group{{ $errors->has('last_name') ? ' has-error' : '' }}">
                                <label for="last-name" class="control-label">Last name</label>
                                <input id="last-name" type="text" class="form-control input" name="last_name" value="{{ old('last_name') }}"  placeholder="Doe" required>
                                @if ($errors->has('last_name'))
                                    <span class="help-block with-errors">
                                        <strong>{{ $errors->first('last_name') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-xs-12 col-sm-12 col-md-6 col-lg-6">
                    <div class="form-group{{ $errors->has('password') ? ' has-error' : '' }}">
                        <label for="inputPassword" class="control-label">Password</label>
                        <input id="inputPassword" type="password" class="form-control input" name="password" required>
                        @if ($errors->has('password'))
                            <span class="help-block with-errors">
                                <strong>{{ $errors->first('password') }}</strong>
                            </span>
                        @endif
                    </div>
                </div>
                <div class="col-xs-12 col-sm-12 col-md-6 col-lg-6">
                    <div class="form-group{{ $errors->has('password_confirmation') ? ' has-error' : '' }}">
                        <label for="password-confirm" class="control-label">Confirm Password</label>
                        <input id="password-confirm" type="password" class="form-control input" name="password_confirmation" required>
                        @if ($errors->has('password_confirmation'))
                            <span class="help-block with-errors">
                                <strong>{{ $errors->first('password_confirmation') }}</strong>
                            </span>
                        @endif
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-xs-12 col-sm-12 col-md-12 col-lg-12">
                    <div class="form-group{{ $errors->has('organization_name') ? ' has-error' : '' }}">
                        <label for="organization_name">Organization Name</label>
                        <input type="text" class="form-control input" name="organization_name" id="organization_name" required="required" autocomplete="off">
                        @if ($errors->has('organization_name'))
                            <div class="help-block with-errors">
                                <strong>{{ $errors->first('organization_name') }}</strong>
                            </div>
                        @endif
                    </div>
                    <div class="form-group">
                        <label class="control-label" for="organization-description">Description</label>
                        <textarea name="description" id="organization-description" class="form-control input" rows="3"></textarea>
                        <p class="help-block">Describe a little about your team.</p>
                    </div>
                </div>
            </div>
            <input type="submit" class="btn btn-primary" value="Submit">
        </form>
    </div>
@endsection
