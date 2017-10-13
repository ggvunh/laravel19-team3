@extends('layouts.master')
@section('content-index')
 <div class="col-md-12">
      <div class="accomd-modations-content owl-single">                             
          <div class="row">
              <!-- ITEM -->
              @foreach ($rooms as $rm)
                <div class="col-xs-4">
                    <div class="accomd-modations-room">
                        <div class="img">
                            <a href="{!!url('/lotus/'.$rm->id)!!}"><img src="{!!url('/images/upload/rooms/'.$rm->images)!!}" alt="" style="width: 550px; height: 230px;"></a>
                        </div>
                        <div class="text">
                            <h2><a href="{!!url('/lotus/'.$rm->id)!!}">{!!$rm->room_types->type_of_bed!!}</a></h2>
                            <p class="price">
                                <span class="amout"><a href="{!!url('/lotus/'.$rm->id)!!}">{!!$rm->room_price!!} Vnd</a></span>/days
                            </p>
                        </div>
                    </div>
                </div>
              @endforeach
              <!-- END / ITEM -->
          </div>
      </div>
  </div>
@stop
