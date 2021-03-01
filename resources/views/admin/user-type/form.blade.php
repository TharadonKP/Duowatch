<div class="form-group {{ $errors->has('userTypeID') ? 'has-error' : ''}}">
    <label for="userTypeID" class="control-label">{{ 'Usertypeid' }}</label>
    <input class="form-control" name="userTypeID" type="number" id="userTypeID" value="{{ isset($usertype->userTypeID) ? $usertype->userTypeID : ''}}" >
    {!! $errors->first('userTypeID', '<p class="help-block">:message</p>') !!}
</div>
<div class="form-group {{ $errors->has('userTypeName') ? 'has-error' : ''}}">
    <label for="userTypeName" class="control-label">{{ 'Usertypename' }}</label>
    <input class="form-control" name="userTypeName" type="text" id="userTypeName" value="{{ isset($usertype->userTypeName) ? $usertype->userTypeName : ''}}" >
    {!! $errors->first('userTypeName', '<p class="help-block">:message</p>') !!}
</div>


<div class="form-group">
    <input class="btn btn-primary" type="submit" value="{{ $formMode === 'edit' ? 'Update' : 'Create' }}">
</div>
