<?php

namespace App\Repositories;

use App\Models\hotel_management;
use App\Repositories\BaseRepository;

/**
 * Class hotel_managementRepository
 * @package App\Repositories
 * @version October 26, 2021, 9:08 am UTC
*/

class hotel_managementRepository extends BaseRepository
{
    /**
     * @var array
     */
    protected $fieldSearchable = [
        'hotel_name',
        'address',
        'date_time_of_checkin',
        'date_time_of_checkout',
        'room_price'
    ];

    /**
     * Return searchable fields
     *
     * @return array
     */
    public function getFieldsSearchable()
    {
        return $this->fieldSearchable;
    }

    /**
     * Configure the Model
     **/
    public function model()
    {
        return hotel_management::class;
    }
}
