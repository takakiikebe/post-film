<div class="form-group {{ $errors->has('name') ? 'has-error' : ''}}">
    <label for="name" class="col-md-4 control-label">{{ 'Name' }}</label>
    <div class="col-md-6">
        <input class="form-control" name="name" type="text" id="name" value="{{ $category->name or ''}}" >
        {!! $errors->first('name', '<p class="help-block">:message</p>') !!}
    </div>
</div><div class="form-group {{ $errors->has('namejapa') ? 'has-error' : ''}}">
    <label for="namejapa" class="col-md-4 control-label">{{ 'Namejapa' }}</label>
    <div class="col-md-6">
        <input class="form-control" name="namejapa" type="text" id="namejapa" value="{{ $category->namejapa or ''}}" >
        {!! $errors->first('namejapa', '<p class="help-block">:message</p>') !!}
    </div>
</div><div class="form-group {{ $errors->has('content') ? 'has-error' : ''}}">
    <label for="content" class="col-md-4 control-label">{{ 'Content' }}</label>
    <div class="col-md-6">
        <textarea class="form-control" rows="5" name="content" type="textarea" id="content" >{{ $category->content or ''}}</textarea>
        {!! $errors->first('content', '<p class="help-block">:message</p>') !!}
    </div>
</div><div class="form-group {{ $errors->has('url1') ? 'has-error' : ''}}">
    <label for="url1" class="col-md-4 control-label">{{ 'Url1' }}</label>
    <div class="col-md-6">
        <input class="form-control" name="url1" type="text" id="url1" value="{{ $category->url1 or ''}}" >
        {!! $errors->first('url1', '<p class="help-block">:message</p>') !!}
    </div>
</div><div class="form-group {{ $errors->has('url2') ? 'has-error' : ''}}">
    <label for="url2" class="col-md-4 control-label">{{ 'Url2' }}</label>
    <div class="col-md-6">
        <input class="form-control" name="url2" type="text" id="url2" value="{{ $category->url2 or ''}}" >
        {!! $errors->first('url2', '<p class="help-block">:message</p>') !!}
    </div>
</div>

<div class="form-group">
    <div class="col-md-offset-4 col-md-4">
        <input class="btn btn-primary" type="submit" value="{{ $submitButtonText or 'Create' }}">
    </div>
</div>
