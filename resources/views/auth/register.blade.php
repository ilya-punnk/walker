@extends('layouts.app')

@section('content')
    <div class="container-fluid content-container">
            <div class="panel panel-default">
                <div class="panel-heading">Регистрация</div>
                <div class="panel-body">
                    <form class="form-horizontal" role="form" method="POST" action="{{ url('/register') }}">
                        {{ csrf_field() }}

                        <div class="form-group{{ $errors->has('name') ? ' has-error' : '' }}">
                            <div class="row-fluid">
                                <label for="name" class="col-md-4 control-label">Имя</label>
                            </div>
                            <div class="row-fluid">
                                <div class="col-md-6">
                                    <input id="name" type="text" class="form-control" name="name" value="{{ old('name') }}" required autofocus>

                                    @if ($errors->has('name'))
                                        <span class="help-block">
                                            <strong>{{ $errors->first('name') }}</strong>
                                        </span>
                                    @endif
                                </div>
                            </div>
                        </div>

                        <div class="form-group{{ $errors->has('last_name') ? ' has-error' : '' }}">
                            <div class="row-fluid">
                                <label for="last_name" class="col-md-4 control-label">Фамилия</label>
                            </div>
                            <div class="row-fluid">
                                <div class="col-md-6">
                                    <input id="last_name" type="text" class="form-control" name="last_name" value="{{ old('last_name') }}" required>

                                    @if ($errors->has('last_name'))
                                        <span class="help-block">
                                            <strong>{{ $errors->first('last_name') }}</strong>
                                        </span>
                                    @endif
                                </div>
                            </div>
                        </div>

                        <div class="form-group">
                            <div class="row-fluid">
                                <label for="sex" class="col-md-4 control-label">Пол</label>
                            </div>

                            <div class="row-fluid">
                                <div class="col-md-3 radio-block">
                                    <input id="male" type="radio" class="radio-inline" name="sex" value="1" required> Мужской</input>
                                </div>
                                <div class="col-md-3 radio-block">
                                    <input id="female" type="radio" class="radio-inline" name="sex" value="2" required> Женский</input>
                                </div>
                            </div>
                        </div>

                        <div class="form-group{{ $errors->has('birth') ? ' has-error' : '' }}">
                            <div class="row-fluid">
                                <label for="birth" class="col-md-4 control-label">Дата рождения</label>
                            </div>

                            <div class="row-fluid">
                                <div class="col-md-6">
                                    <input id="birth" type="date" class="form-control" name="birth" value="{{ old('birth') }}" required>

                                    @if ($errors->has('birth'))
                                        <span class="help-block">
                                            <strong>{{ $errors->first('birth') }}</strong>
                                        </span>
                                    @endif
                                </div>
                            </div>
                        </div>

                        <div class="form-group{{ $errors->has('phone') ? ' has-error' : '' }}">
                            <div class="row-fluid">
                                <label for="phone" class="col-md-4 control-label">Телефон</label>
                            </div>

                            <div class="row-fluid">
                                <div class="col-md-6">
                                    <input id="phone" type="tel" class="form-control" name="phone" value="{{ old('phone') }}" required>

                                    @if ($errors->has('phone'))
                                        <span class="help-block">
                                            <strong>{{ $errors->first('phone') }}</strong>
                                        </span>
                                    @endif
                                </div>
                            </div>
                        </div>

                        <div class="form-group{{ $errors->has('email') ? ' has-error' : '' }}">
                            <div class="row-fluid">
                                <label for="email" class="col-md-4 control-label">E-Mail</label>
                            </div>

                            <div class="row-fluid">
                                <div class="col-md-6">
                                    <input id="email" type="email" class="form-control" name="email" value="{{ old('email') }}" required>

                                    @if ($errors->has('email'))
                                        <span class="help-block">
                                            <strong>{{ $errors->first('email') }}</strong>
                                        </span>
                                    @endif
                                </div>
                            </div>
                        </div>

                        <div class="form-group{{ $errors->has('login') ? ' has-error' : '' }}">
                            <div class="row-fluid">
                                <label for="login" class="col-md-4 control-label">Логин</label>
                            </div>

                            <div class="row-fluid">
                                <div class="col-md-6">
                                    <input id="login" type="text" class="form-control" name="login" value="{{ old('login') }}">

                                    @if ($errors->has('login'))
                                        <span class="help-block">
                                            <strong>{{ $errors->first('login') }}</strong>
                                        </span>
                                    @endif
                                </div>
                            </div>
                        </div>

                        <div class="form-group{{ $errors->has('password') ? ' has-error' : '' }}">
                            <div class="row-fluid">
                                <label for="password" class="col-md-4 control-label">Пароль</label>
                            </div>

                            <div class="row-fluid">
                                <div class="col-md-6">
                                    <input id="password" type="password" class="form-control" name="password" required>

                                    @if ($errors->has('password'))
                                        <span class="help-block">
                                            <strong>{{ $errors->first('password') }}</strong>
                                        </span>
                                    @endif
                                </div>
                            </div>
                        </div>

                        <div class="form-group">
                            <div class="row-fluid">
                                <label for="password-confirm" class="col-md-4 control-label">Подтверждение</label>
                            </div>

                            <div class="row-fluid">
                                <div class="col-md-6">
                                    <input id="password-confirm" type="password" class="form-control" name="password_confirmation" required>
                                </div>
                            </div>
                        </div>

                        <div class="form-group">
                            <div class="col-md-6 col-md-offset-4">
                                <button type="submit" class="btn btn-primary">
                                    Зарегистрироваться
                                </button>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
    </div>
@endsection
