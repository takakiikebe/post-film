<div class="form-group {{ $errors->has('title') ? 'has-error' : ''}}">
    <label for="title" class="col-md-4 control-label">{{ 'Title' }}</label>
    <div class="col-md-6">
        <input class="form-control" name="title" type="text" id="title" value="{{ $post->title or ''}}" >
        {!! $errors->first('title', '<p class="help-block">:message</p>') !!}
    </div>
</div><div class="form-group {{ $errors->has('content') ? 'has-error' : ''}}">
    <label for="content" class="col-md-4 control-label">{{ 'Content' }}</label>
    <div class="col-md-6">
        <textarea class="form-control" rows="5" name="content" type="textarea" id="content" >{{ $post->content or ''}}</textarea>
        {!! $errors->first('content', '<p class="help-block">:message</p>') !!}
    </div>
</div><div class="form-group {{ $errors->has('category') ? 'has-error' : ''}}">
    <label for="category" class="col-md-4 control-label">{{ 'Category' }}</label>
    <div class="col-md-6">
        <select name="category" class="form-control" id="category" >
    @foreach (json_decode('{"action": "Action", "serious": "Serious", "shocking": "Shocking", "romance": "Romance", "comedy": "Comedy", "heartful": "Heartful", }', true) as $optionKey => $optionValue)
        <option value="{{ $optionKey }}" {{ (isset($post->category) && $post->category == $optionKey) ? 'selected' : ''}}>{{ $optionValue }}</option>
    @endforeach
</select>
        {!! $errors->first('category', '<p class="help-block">:message</p>') !!}
    </div>
</div>
<div class="form-group {{ $errors->has('url1') ? 'has-error' : ''}}">
    <label for="url1" class="col-md-4 control-label">{{ 'Url1' }}</label>
    <div class="col-md-6">
        <textarea class="form-control" rows="5" name="url1" type="textarea" id="url1" >{{ $post->url1 or ''}}</textarea>
        {!! $errors->first('url1', '<p class="help-block">:message</p>') !!}
    </div>
</div>
<div class="form-group {{ $errors->has('url2') ? 'has-error' : ''}}">
    <label for="url2" class="col-md-4 control-label">{{ 'Url2' }}</label>
    <div class="col-md-6">
        <textarea class="form-control" rows="5" name="url2" type="textarea" id="url2" >{{ $post->url2 or ''}}</textarea>
        {!! $errors->first('url2', '<p class="help-block">:message</p>') !!}
    </div>
</div>
<div class="form-group">
    <div class="col-md-offset-4 col-md-4">
        <input class="btn btn-primary" type="submit" value="{{ $submitButtonText or 'Create' }}">
    </div>
</div>
