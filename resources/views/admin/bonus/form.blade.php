<div class="form-group {{ $errors->has('bonusID') ? 'has-error' : ''}}">
    <label for="bonusID" class="control-label">{{ 'Bonusid' }}</label>
    <input class="form-control" name="bonusID" type="number" id="bonusID" value="{{ isset($bonu->bonusID) ? $bonu->bonusID : ''}}" >
    {!! $errors->first('bonusID', '<p class="help-block">:message</p>') !!}
</div>
<div class="form-group {{ $errors->has('bonusName') ? 'has-error' : ''}}">
    <label for="bonusName" class="control-label">{{ 'Bonusname' }}</label>
    <input class="form-control" name="bonusName" type="text" id="bonusName" value="{{ isset($bonu->bonusName) ? $bonu->bonusName : ''}}" >
    {!! $errors->first('bonusName', '<p class="help-block">:message</p>') !!}
</div>
<div class="form-group {{ $errors->has('quantity') ? 'has-error' : ''}}">
    <label for="quantity" class="control-label">{{ 'Quantity' }}</label>
    <input class="form-control" name="quantity" type="number" id="quantity" value="{{ isset($bonu->quantity) ? $bonu->quantity : ''}}" >
    {!! $errors->first('quantity', '<p class="help-block">:message</p>') !!}
</div>
<div class="form-group {{ $errors->has('imageFileName') ? 'has-error' : ''}}">
    <label for="imageFileName" class="control-label">{{ 'Imagefilename' }}</label>
    <input class="form-control" name="imageFileName" type="text" id="imageFileName" value="{{ isset($bonu->imageFileName) ? $bonu->imageFileName : ''}}" >
    {!! $errors->first('imageFileName', '<p class="help-block">:message</p>') !!}
</div>
<div class="form-group {{ $errors->has('price_condition_minimum') ? 'has-error' : ''}}">
    <label for="price_condition_minimum" class="control-label">{{ 'Price Condition Minimum' }}</label>
    <input class="form-control" name="price_condition_minimum" type="number" id="price_condition_minimum" value="{{ isset($bonu->price_condition_minimum) ? $bonu->price_condition_minimum : ''}}" >
    {!! $errors->first('price_condition_minimum', '<p class="help-block">:message</p>') !!}
</div>
<div class="form-group {{ $errors->has('price_condition_maximum') ? 'has-error' : ''}}">
    <label for="price_condition_maximum" class="control-label">{{ 'Price Condition Maximum' }}</label>
    <input class="form-control" name="price_condition_maximum" type="number" id="price_condition_maximum" value="{{ isset($bonu->price_condition_maximum) ? $bonu->price_condition_maximum : ''}}" >
    {!! $errors->first('price_condition_maximum', '<p class="help-block">:message</p>') !!}
</div>


<div class="form-group">
    <input class="btn btn-primary" type="submit" value="{{ $formMode === 'edit' ? 'Update' : 'Create' }}">
</div>
