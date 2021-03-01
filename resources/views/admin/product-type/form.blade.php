<div class="form-group {{ $errors->has('productTypeID') ? 'has-error' : ''}}">
    <label for="productTypeID" class="control-label">{{ 'Producttypeid' }}</label>
    <input class="form-control" name="productTypeID" type="number" id="productTypeID" value="{{ isset($producttype->productTypeID) ? $producttype->productTypeID : ''}}" >
    {!! $errors->first('productTypeID', '<p class="help-block">:message</p>') !!}
</div>
<div class="form-group {{ $errors->has('productTypeName') ? 'has-error' : ''}}">
    <label for="productTypeName" class="control-label">{{ 'Producttypename' }}</label>
    <input class="form-control" name="productTypeName" type="text" id="productTypeName" value="{{ isset($producttype->productTypeName) ? $producttype->productTypeName : ''}}" >
    {!! $errors->first('productTypeName', '<p class="help-block">:message</p>') !!}
</div>


<div class="form-group">
    <input class="btn btn-primary" type="submit" value="{{ $formMode === 'edit' ? 'Update' : 'Create' }}">
</div>
