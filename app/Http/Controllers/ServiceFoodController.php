<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Input;
use App\Service_Food;
use App\Http\Requests\serviceRequest;

class ServiceFoodController extends Controller
{
	public function viewService()
	{
		$services=Service_Food::all();
		return view('admins.services.index',compact('services'));
	}
	public function detailService(Service_Food $service)
	{
		return view('admins.services.detail',compact('service'));
	}
	public function createService()
	{
		return view('admins.services.create');
	}
	public function saveService(serviceRequest $request)
	{
		$data=Input::all();
		$service=Service_Food::create($data);
		return redirect('admins/service')->withSuccess('Service has been created');
	}
	public function editService(Service_Food $service)
	{
		return view('admins.services.edit',compact('service'));
	}
	public function updateService(Service_Food $service,serviceRequest $request)
	{
		$data=Input::all();
		$service->update($data);
		return redirect('admins/service/'.$service->id)->withSuccess('Service has been updated');
	}
	public function deleteService(Service_Food $service)
	{
		$service->delete();
		return redirect('admins/service')->withSuccess('Service has been deleted');
	}
}
