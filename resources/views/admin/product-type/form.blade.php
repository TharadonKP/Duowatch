<div class="form-group {{ $errors->has('product_type_id') ? 'has-error' : ''}}">
    <label for="product_type_id" class="control-label">{{ 'Product Type Id' }}</label>
    <input class="form-control" name="product_type_id" type="number" id="product_type_id" value="{{ isset($producttype->product_type_id) ? $producttype->product_type_id : ''}}" >
    {!! $errors->first('product_type_id', '<p class="help-block">:message</p>') !!}
</div>
<div class="form-group {{ $errors->has('product_type_name') ? 'has-error' : ''}}">
    <label for="product_type_name" class="control-label">{{ 'Product Type Name' }}</label>
    <input class="form-control" name="product_type_name" type="text" id="product_type_name" value="{{ isset($producttype->product_type_name) ? $producttype->product_type_name : ''}}" >
    {!! $errors->first('product_type_name', '<p class="help-block">:message</p>') !!}
</div>


<div class="form-group">
    <input class="btn btn-primary" type="submit" value="{{ $formMode === 'edit' ? 'Update' : 'Create' }}">
</div>
