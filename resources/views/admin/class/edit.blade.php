@extends('layouts.app')

@section('content')  

<main class="app-main">
        <!--begin::App Content Header-->
        <div class="app-content-header">
          <!--begin::Container-->
          <div class="container-fluid">
            <!--begin::Row-->
            <div class="row">
              <div class="col-sm-6"><h3 class="mb-0">Edit Class</h3></div>
              
            </div>
            <!--end::Row-->
          </div>
          <!--end::Container-->
        </div>
        <!--end::App Content Header-->
        <!--begin::App Content-->
        <div class="app-content">
          <!--begin::Container-->
          <div class="container-fluid">
            
              <!--begin::Col-->
              <div class="col-md-12">
                <div class="card card-primary card-outline mb-4">
                  
                  <!--begin::Form-->
                  <form method="post" action="">
                    {{ csrf_field() }}
                    <!--begin::Body-->
                    <div class="card-body">
                      <div class="mb-3">
                        <label class="form-label">Class Name</label>
                        <input
                          type="text"
                          class="form-control"
                          value="{{ $getRecord->name }}"
                          name="name"
                          required

                          placeholder="Class Name"
                        />
                      </div>
                      <div class="mb-3">
                        <label class="form-label">Status</label>
                        <select class="form-control" name="status">
                          <option {{ ($getRecord->status == 0) ? 'selected' : '' }} value="0">Active</option>
                          <option {{ ($getRecord->status == 1) ? 'selected' : '' }} value="1">Inactive</option>
                        </select>
                      </div>
                      
                    </div>
                    <!--end::Body-->
                    <!--begin::Footer-->
                    <div class="card-footer">
                      <button type="submit" class="btn btn-primary">Update</button>
                    </div>
                    <!--end::Footer-->
                  </form>
                  <!--end::Form-->
                </div>
                <!--end::Quick Example-->
                
              </div>
              <!--end::Col-->
              <!--begin::Col-->
              
              <!--end::Col-->
            </div>
            <!--end::Row-->
          </div>
          <!--end::Container-->
        </div>
        <!--end::App Content-->
      </main>


@endsection