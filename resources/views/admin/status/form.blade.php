<div class="form-group {{ $errors->has('statusID') ? 'has-error' : ''}}">
    <label for="statusID" class="control-label">{{ 'Statusid' }}</label>
    <input class="form-control" name="statusID" type="number" id="statusID" value="{{ isset($status->statusID) ? $status->statusID : ''}}" >
    {!! $errors->first('statusID', '<p class="help-block">:message</p>') !!}
</div>
<div class="form-group {{ $errors->has('description') ? 'has-error' : ''}}">
    <label for="description" class="control-label">{{ 'Description' }}</label>
    <input class="form-control" name="description" type="text" id="description" value="{{ isset($status->description) ? $status->description : ''}}" >
    {!! $errors->first('description', '<p class="help-block">:message</p>') !!}
</div>


<div class="form-group">
    <input class="btn btn-primary" type="submit" value="{{ $formMode === 'edit' ? 'Update' : 'Create' }}">
</div>
