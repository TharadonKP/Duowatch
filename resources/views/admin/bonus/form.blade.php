<div class="form-group {{ $errors->has('bonus_id') ? 'has-error' : ''}}">
    <label for="bonus_id" class="control-label">{{ 'Bonus Id' }}</label>
    <input class="form-control" name="bonus_id" type="number" id="bonus_id" value="{{ isset($bonu->bonus_id) ? $bonu->bonus_id : ''}}" >
    {!! $errors->first('bonus_id', '<p class="help-block">:message</p>') !!}
</div>
<div class="form-group {{ $errors->has('bonus_name') ? 'has-error' : ''}}">
    <label for="bonus_name" class="control-label">{{ 'Bonus Name' }}</label>
    <input class="form-control" name="bonus_name" type="text" id="bonus_name" value="{{ isset($bonu->bonus_name) ? $bonu->bonus_name : ''}}" >
    {!! $errors->first('bonus_name', '<p class="help-block">:message</p>') !!}
</div>
<div class="form-group {{ $errors->has('amount') ? 'has-error' : ''}}">
    <label for="amount" class="control-label">{{ 'Amount' }}</label>
    <input class="form-control" name="amount" type="number" id="amount" value="{{ isset($bonu->amount) ? $bonu->amount : ''}}" >
    {!! $errors->first('amount', '<p class="help-block">:message</p>') !!}
</div>
<div class="form-group {{ $errors->has('image') ? 'has-error' : ''}}">
    <label for="image" class="control-label">{{ 'Image' }}</label>
    <input class="form-control" name="image" type="text" id="image" value="{{ isset($bonu->image) ? $bonu->image : ''}}" >
    {!! $errors->first('image', '<p class="help-block">:message</p>') !!}
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
