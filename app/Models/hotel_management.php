<?php

namespace App\Models;

use Eloquent as Model;
use Illuminate\Database\Eloquent\SoftDeletes;
use Illuminate\Database\Eloquent\Factories\HasFactory;

/**
 * Class hotel_management
 * @package App\Models
 * @version October 26, 2021, 9:08 am UTC
 *
 * @property string $hotel_name
 * @property string $address
 * @property string|\Carbon\Carbon $date_time_of_checkin
 * @property string|\Carbon\Carbon $date_time_of_checkout
 * @property number $room_price
 */
class hotel_management extends Model
{
    // use SoftDeletes;

    use HasFactory;

    public $table = 'hotel_management';
    
    const CREATED_AT = 'created_at';
    const UPDATED_AT = 'updated_at';


    protected $dates = ['deleted_at'];



    public $fillable = [
        'hotel_name',
        'address',
        'date_time_of_checkin',
        'date_time_of_checkout',
        'room_price'
    ];

    /**
     * The attributes that should be casted to native types.
     *
     * @var array
     */
    protected $casts = [
        'id' => 'integer',
        'hotel_name' => 'string',
        'address' => 'string',
        'date_time_of_checkin' => 'datetime',
        'date_time_of_checkout' => 'datetime',
        'room_price' => 'decimal:2'
    ];

    /**
     * Validation rules
     *
     * @var array
     */
    public static $rules = [
        'hotel_name' => 'required|string|max:255',
        'address' => 'required|string|max:255',
        'date_time_of_checkin' => 'required',
        'date_time_of_checkout' => 'required',
        'room_price' => 'required|numeric',
        'created_at' => 'nullable',
        'updated_at' => 'nullable'
    ];

    
}
