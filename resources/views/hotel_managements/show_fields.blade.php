<!-- Hotel Name Field -->
<div class="col-sm-12">
    {!! Form::label('hotel_name', 'Hotel Name:') !!}
    <p>{{ $hotelManagement->hotel_name }}</p>
</div>

<!-- Address Field -->
<div class="col-sm-12">
    {!! Form::label('address', 'Address:') !!}
    <p>{{ $hotelManagement->address }}</p>
</div>

<!-- Date Time Of Checkin Field -->
<div class="col-sm-12">
    {!! Form::label('date_time_of_checkin', 'Date Time Of Checkin:') !!}
    <p>{{ $hotelManagement->date_time_of_checkin }}</p>
</div>

<!-- Date Time Of Checkout Field -->
<div class="col-sm-12">
    {!! Form::label('date_time_of_checkout', 'Date Time Of Checkout:') !!}
    <p>{{ $hotelManagement->date_time_of_checkout }}</p>
</div>

<!-- Room Price Field -->
<div class="col-sm-12">
    {!! Form::label('room_price', 'Room Price:') !!}
    <p>{{ $hotelManagement->room_price }}</p>
</div>

