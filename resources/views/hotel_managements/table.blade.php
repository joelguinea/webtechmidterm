<div class="table-responsive">
    <table class="table" id="hotelManagements-table">
        <thead>
            <tr>
                <th>Hotel Name</th>
        <th>Address</th>
        <th>Date Time Of Checkin</th>
        <th>Date Time Of Checkout</th>
        <th>Room Price</th>
                <th colspan="3">Action</th>
            </tr>
        </thead>
        <tbody>
        @foreach($hotelManagements as $hotelManagement)
            <tr>
                <td>{{ $hotelManagement->hotel_name }}</td>
            <td>{{ $hotelManagement->address }}</td>
            <td>{{ $hotelManagement->date_time_of_checkin }}</td>
            <td>{{ $hotelManagement->date_time_of_checkout }}</td>
            <td>{{ $hotelManagement->room_price }}</td>
                <td width="120">
                    {!! Form::open(['route' => ['hotelManagements.destroy', $hotelManagement->id], 'method' => 'delete']) !!}
                    <div class='btn-group'>
                        <a href="{{ route('hotelManagements.show', [$hotelManagement->id]) }}" class='btn btn-default btn-xs'>
                            <i class="far fa-eye"></i>
                        </a>
                        <a href="{{ route('hotelManagements.edit', [$hotelManagement->id]) }}" class='btn btn-default btn-xs'>
                            <i class="far fa-edit"></i>
                        </a>
                        {!! Form::button('<i class="far fa-trash-alt"></i>', ['type' => 'submit', 'class' => 'btn btn-danger btn-xs', 'onclick' => "return confirm('Are you sure?')"]) !!}
                    </div>
                    {!! Form::close() !!}
                </td>
            </tr>
        @endforeach
        </tbody>
    </table>
</div>
