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

<div class="form-group">
    <div class="row-fluid">
        <label for="sex" class="col-md-4 control-label">Пол</label>
    </div>

    <div class="row-fluid">
        <div class="col-md-3 radio-block">
            <input id="male" type="radio" class="radio-inline" name="sex" value="1" @if(old('sex')=='1') checked @endif required> Мужской</input>
        </div>
        <div class="col-md-3 radio-block">
            <input id="female" type="radio" class="radio-inline" name="sex" value="2" @if(old('sex')=='2') checked @endif required> Женский</input>
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