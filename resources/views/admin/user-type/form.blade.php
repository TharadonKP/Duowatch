<div class="form-group {{ $errors->has('user_type_id') ? 'has-error' : ''}}">
    <label for="user_type_id" class="control-label">{{ 'User Type Id' }}</label>
    <input class="form-control" name="user_type_id" type="number" id="user_type_id" value="{{ isset($usertype->user_type_id) ? $usertype->user_type_id : ''}}" >
    {!! $errors->first('user_type_id', '<p class="help-block">:message</p>') !!}
</div>
<div class="form-group {{ $errors->has('user_type_name') ? 'has-error' : ''}}">
    <label for="user_type_name" class="control-label">{{ 'User Type Name' }}</label>
    <input class="form-control" name="user_type_name" type="text" id="user_type_name" value="{{ isset($usertype->user_type_name) ? $usertype->user_type_name : ''}}" >
    {!! $errors->first('user_type_name', '<p class="help-block">:message</p>') !!}
</div>


<div class="form-group">
    <input class="btn btn-primary" type="submit" value="{{ $formMode === 'edit' ? 'Update' : 'Create' }}">
</div>
