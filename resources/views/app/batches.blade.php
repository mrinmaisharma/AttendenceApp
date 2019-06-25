@extends('app.layout.base')
@section('title', 'Batches')


@section('content')

<div class="container-fluid batches">
    <div class="row">
        @if(count($batches))
        @foreach($batches as $batch)
        <div class="col-sm-6 col-lg-4">
            <div class="card">
                <div class="card-body">
                    <span class="float-right total-students text-pale-sky">
                        <i class="fa fa-users mr-3"></i>
                        <span class="label gradient-8 btn-rounded">{{count($batch['students'])}}</span>
                    </span>
                    <h5 class="card-title" style="color:inherit"><strong>{{$batch['name']}}</strong></h5>
                    <h6 class="card-subtitle mb-2 text-muted">Trainer: {{($batch['trainer'] == null) ? "Not Assigned" : $batch['trainer']->name}}</h6>
                    <div class="row">
                        <div class="col-12">
                            <span class="card-text pull-left d-inline"><small class="text-muted">Start Date: {{$batch['start_date']}}</small></span>
                            <a href="#" class="badge badge-pill badge-primary pull-right" style="margin: 0.1rem 0;">View Details</a>
                        </div>
                        <div class="col-12">
                            <button type="button" class="btn mb-1 btn-rounded btn-outline-info" data-toggle="modal" data-target="#basicModal" style="margin-top:1em; font-size:0.8rem;">Assign Trainer</button>
                            <a href="/master/student/add" class="btn mb-1 btn-rounded btn-outline-primary float-right"style="margin-top:1em; font-size:0.8rem;">+ Students</a>
                        </div>
                    </div>
                    <!-- Modal -->
                    <div class="modal fade" id="basicModal" style="display: none;" aria-hidden="true">
                        <div class="modal-dialog" role="document">
                            <div class="modal-content">
                                <div class="modal-header">
                                    <h5 class="modal-title" style="collor:inherit"><strong>Assign Trainer</strong></h5>
                                    <button type="button" class="close" data-dismiss="modal"><span>×</span></button>
                                </div>

                                <div class="modal-body">
                                    
                                </div>
                                
                                <div class="modal-footer">
                                    <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                                    <button type="button" class="btn btn-primary">Assign</button>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        @endforeach
        @else
        <div class="col-md-12"><h3 class="text-center">No batch created</h3></div>
        @endif
    </div>
</div>

@endsection