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
                      <div class="card">
                        <div class="card-header card-header-primary">
                          <h4 class="card-title">Add Property</h4>
                        </div>
                        <div class="card-body">
                          <form>
                            <div class="row">
                              <div class="col-md-6">
                                <div class="form-group">
                                  <label class="bmd-label-floating">Company (disabled)</label>
                                  <input type="text" class="form-control" disabled>
                                </div>
                              </div>
                              <div class="col-md-6">
                                <div class="form-group">
                                  <label class="bmd-label-floating">Property Name</label>
                                  <input type="text" class="form-control">
                                </div>
                              </div>
                            </div>
                            <div class="row">
                              <div class="col-md-12">
                                <div class="form-group">
                                  <label class="bmd-label-floating">Address</label>
                                  <input type="text" class="form-control">
                                </div>
                              </div>
                            </div>
                            <div class="row">
                              <div class="col-md-4">
                                <div class="form-group">
                                  <label class="bmd-label-floating">City</label>
                                  <input type="text" class="form-control">
                                </div>
                              </div>
                              <div class="col-md-4">
                                <div class="form-group">
                                  <label class="bmd-label-floating">Country</label>
                                  <input type="text" class="form-control">
                                </div>
                              </div>
                              <div class="col-md-4">
                                <div class="form-group">
                                  <label class="bmd-label-floating">Postal Code</label>
                                  <input type="text" class="form-control">
                                </div>
                              </div>
                            </div>
                            <div class="row">
                                <div class="col-md-12">
                                  <div class="form-group">
                                    <label class="bmd-label-floating">Accessibility</label>
                                    <input type="text" class="form-control">
                                  </div>
                                </div>
                              </div>
                            <button type="submit" class="btn btn-primary pull-right">Add</button>
                            <div class="clearfix"></div>
                          </form>
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
