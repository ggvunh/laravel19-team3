<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\Input;
use Illuminate\Http\Request;
use App\Service_Hotel;
use App\Http\Requests\serviceRequest;
use App\Http\Requests\editServiceRequest;

class ServiceHotelController extends Controller
{
    public function viewService()
	{
		$dem=1;
		$services=Service_Hotel::all();
		return view('admins.services.index',compact('services','dem'));
	}
	public function detailService(Service_Hotel $service)
	{
		return view('admins.services.detail',compact('service'));
	}
	public function createService() //Create Service
	{
		return view('admins.services.create');
	}
	public function saveService(serviceRequest $request) //Save Service and Validation
	{
		$data=Input::all();
		$service=Service_Hotel::create($data);
		return redirect('admins/service')->withSuccess('Service has been created');
	}
	public function editService(Service_Hotel $service)
	{
		return view('admins.services.edit',compact('service'));
	}
	public function updateService(Service_Hotel $service,editServiceRequest $request)
	{
		$data=Input::all();
		$service->update($data);
		return redirect('admins/service/'.$service->id)->withSuccess('Service has been updated');
	}
	public function deleteService(Service_Hotel $service)
	{
		$service->delete();
		return redirect('admins/service')->withSuccess('Service has been deleted');
	}
}
