<div class="form-group {{ $errors->has('orderID') ? 'has-error' : ''}}">
    <label for="orderID" class="control-label">{{ 'Orderid' }}</label>
    <input class="form-control" name="orderID" type="number" id="orderID" value="{{ isset($order->orderID) ? $order->orderID : ''}}" >
    {!! $errors->first('orderID', '<p class="help-block">:message</p>') !!}
</div>
<div class="form-group {{ $errors->has('orderDate') ? 'has-error' : ''}}">
    <label for="orderDate" class="control-label">{{ 'Orderdate' }}</label>
    <input class="form-control" name="orderDate" type="datetime-local" id="orderDate" value="{{ isset($order->orderDate) ? $order->orderDate : ''}}" >
    {!! $errors->first('orderDate', '<p class="help-block">:message</p>') !!}
</div>
<div class="form-group {{ $errors->has('shipDate') ? 'has-error' : ''}}">
    <label for="shipDate" class="control-label">{{ 'Shipdate' }}</label>
    <input class="form-control" name="shipDate" type="datetime-local" id="shipDate" value="{{ isset($order->shipDate) ? $order->shipDate : ''}}" >
    {!! $errors->first('shipDate', '<p class="help-block">:message</p>') !!}
</div>
<div class="form-group {{ $errors->has('tranferedDate') ? 'has-error' : ''}}">
    <label for="tranferedDate" class="control-label">{{ 'Tranfereddate' }}</label>
    <input class="form-control" name="tranferedDate" type="datetime-local" id="tranferedDate" value="{{ isset($order->tranferedDate) ? $order->tranferedDate : ''}}" >
    {!! $errors->first('tranferedDate', '<p class="help-block">:message</p>') !!}
</div>
<div class="form-group {{ $errors->has('totalPrice') ? 'has-error' : ''}}">
    <label for="totalPrice" class="control-label">{{ 'Totalprice' }}</label>
    <input class="form-control" name="totalPrice" type="number" id="totalPrice" value="{{ isset($order->totalPrice) ? $order->totalPrice : ''}}" >
    {!! $errors->first('totalPrice', '<p class="help-block">:message</p>') !!}
</div>
<div class="form-group {{ $errors->has('imageFileName') ? 'has-error' : ''}}">
    <label for="imageFileName" class="control-label">{{ 'Imagefilename' }}</label>
    <input class="form-control" name="imageFileName" type="text" id="imageFileName" value="{{ isset($order->imageFileName) ? $order->imageFileName : ''}}" >
    {!! $errors->first('imageFileName', '<p class="help-block">:message</p>') !!}
</div>
<div class="form-group {{ $errors->has('address') ? 'has-error' : ''}}">
    <label for="address" class="control-label">{{ 'Address' }}</label>
    <input class="form-control" name="address" type="text" id="address" value="{{ isset($order->address) ? $order->address : ''}}" >
    {!! $errors->first('address', '<p class="help-block">:message</p>') !!}
</div>
<div class="form-group {{ $errors->has('userID') ? 'has-error' : ''}}">
    <label for="userID" class="control-label">{{ 'Userid' }}</label>
    <input class="form-control" name="userID" type="number" id="userID" value="{{ isset($order->userID) ? $order->userID : ''}}" >
    {!! $errors->first('userID', '<p class="help-block">:message</p>') !!}
</div>
<div class="form-group {{ $errors->has('statusID') ? 'has-error' : ''}}">
    <label for="statusID" class="control-label">{{ 'Statusid' }}</label>
    <input class="form-control" name="statusID" type="number" id="statusID" value="{{ isset($order->statusID) ? $order->statusID : ''}}" >
    {!! $errors->first('statusID', '<p class="help-block">:message</p>') !!}
</div>
<div class="form-group {{ $errors->has('bonusID') ? 'has-error' : ''}}">
    <label for="bonusID" class="control-label">{{ 'Bonusid' }}</label>
    <input class="form-control" name="bonusID" type="number" id="bonusID" value="{{ isset($order->bonusID) ? $order->bonusID : ''}}" >
    {!! $errors->first('bonusID', '<p class="help-block">:message</p>') !!}
</div>


<div class="form-group">
    <input class="btn btn-primary" type="submit" value="{{ $formMode === 'edit' ? 'Update' : 'Create' }}">
</div>
