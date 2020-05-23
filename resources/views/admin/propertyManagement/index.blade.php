@extends('layouts.master')
@section('title', 'Home | Office Bookings')
@section('content')
<div class="content">
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <div class="card">
                    <div class="card-header white uppercase">Manage your office
                        @if (session('status'))
                            <div class="alert alert-success" role="alert">
                                {{ session('status') }}
                            </div>
                        @endif   
                    </div>
                </div>
                {{-- ADD PROPERTY --}}
                <div class="row">
                    <div class="col-md-12">
                      <div class="card background-light">
                        <div class="card-header card-header-primary">                          
                          <ul class="inline-list">
                            <li><h4 class="card-title white">Property Name</h4></li>
                            <li class="pull-right"><button type="button" class="btn btn-sm btn-primary">Add Block</button></li>
                        </ul> 
                        </div>
                        <div class="card-body">
                            <div class="row">
                                <div class="col-md-12">
                                  <div class="card">
                                    <div class="card-header">
                                        <ul class="inline-list">
                                            <li><h4 class="card-title white">Desk Block Name</h4></li>
                                            <li class="pull-right"><button type="button" class="btn btn-sm btn-info">Block Info</button></li>
                                        </ul>                          
                                    </div>
                                    <div class="card-body">
                                        <div class="flex-container">
                                            <div class="flex-desk">
                                                <img src="/img/plusIcon.png" width="150" >
                                            </div>
                                            <div class="flex-desk border-stn">
                                                <img src="https://via.placeholder.com/150" >
                                            </div>
                                            <div class="flex-desk border-stn">
                                                <img src="https://via.placeholder.com/150" >
                                            </div>
                                            <div class="flex-desk border-stn">
                                                <img src="https://via.placeholder.com/150" >
                                            </div>
                                            <div class="flex-desk border-stn">
                                                <img src="https://via.placeholder.com/150" >
                                            </div>
                                            <div class="flex-desk border-stn">
                                                <img src="https://via.placeholder.com/150" >
                                            </div>
                                        </div>
                                    </div>
                                </div>
                              </div>
                            </div>
                        </div>
                      </div>
                    </div>
                  </div>
                  {{-- END: ADD PROPERTY --}}
                </div>

            </div>
        </div>
    </div>

@endsection
