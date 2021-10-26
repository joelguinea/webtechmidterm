<?php

namespace App\Http\Controllers;

use App\Http\Requests\Createhotel_managementRequest;
use App\Http\Requests\Updatehotel_managementRequest;
use App\Repositories\hotel_managementRepository;
use App\Http\Controllers\AppBaseController;
use Illuminate\Http\Request;
use Flash;
use Response;

class hotel_managementController extends AppBaseController
{
    /** @var  hotel_managementRepository */
    private $hotelManagementRepository;

    public function __construct(hotel_managementRepository $hotelManagementRepo)
    {
        $this->hotelManagementRepository = $hotelManagementRepo;
    }

    /**
     * Display a listing of the hotel_management.
     *
     * @param Request $request
     *
     * @return Response
     */
    public function index(Request $request)
    {
        $hotelManagements = $this->hotelManagementRepository->all();

        return view('hotel_managements.index')
            ->with('hotelManagements', $hotelManagements);
    }

    /**
     * Show the form for creating a new hotel_management.
     *
     * @return Response
     */
    public function create()
    {
        return view('hotel_managements.create');
    }

    /**
     * Store a newly created hotel_management in storage.
     *
     * @param Createhotel_managementRequest $request
     *
     * @return Response
     */
    public function store(Createhotel_managementRequest $request)
    {
        $input = $request->all();

        $hotelManagement = $this->hotelManagementRepository->create($input);

        Flash::success('Hotel Management saved successfully.');

        return redirect(route('hotelManagements.index'));
    }

    /**
     * Display the specified hotel_management.
     *
     * @param int $id
     *
     * @return Response
     */
    public function show($id)
    {
        $hotelManagement = $this->hotelManagementRepository->find($id);

        if (empty($hotelManagement)) {
            Flash::error('Hotel Management not found');

            return redirect(route('hotelManagements.index'));
        }

        return view('hotel_managements.show')->with('hotelManagement', $hotelManagement);
    }

    /**
     * Show the form for editing the specified hotel_management.
     *
     * @param int $id
     *
     * @return Response
     */
    public function edit($id)
    {
        $hotelManagement = $this->hotelManagementRepository->find($id);

        if (empty($hotelManagement)) {
            Flash::error('Hotel Management not found');

            return redirect(route('hotelManagements.index'));
        }

        return view('hotel_managements.edit')->with('hotelManagement', $hotelManagement);
    }

    /**
     * Update the specified hotel_management in storage.
     *
     * @param int $id
     * @param Updatehotel_managementRequest $request
     *
     * @return Response
     */
    public function update($id, Updatehotel_managementRequest $request)
    {
        $hotelManagement = $this->hotelManagementRepository->find($id);

        if (empty($hotelManagement)) {
            Flash::error('Hotel Management not found');

            return redirect(route('hotelManagements.index'));
        }

        $hotelManagement = $this->hotelManagementRepository->update($request->all(), $id);

        Flash::success('Hotel Management updated successfully.');

        return redirect(route('hotelManagements.index'));
    }

    /**
     * Remove the specified hotel_management from storage.
     *
     * @param int $id
     *
     * @throws \Exception
     *
     * @return Response
     */
    public function destroy($id)
    {
        $hotelManagement = $this->hotelManagementRepository->find($id);

        if (empty($hotelManagement)) {
            Flash::error('Hotel Management not found');

            return redirect(route('hotelManagements.index'));
        }

        $this->hotelManagementRepository->delete($id);

        Flash::success('Hotel Management deleted successfully.');

        return redirect(route('hotelManagements.index'));
    }
}
