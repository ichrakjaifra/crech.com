@extends('layouts.app')

@section('content')  

<main class="app-main">
        <!--begin::App Content Header-->
        <div class="app-content-header">
          <!--begin::Container-->
          <div class="container-fluid">
            <!--begin::Row-->
            <div class="row">
              <div class="col-sm-6"><h3 class="mb-0">Add New Subject</h3></div>
              
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
                        <label class="form-label">Subject Name</label>
                        <input
                          type="text"
                          class="form-control"
                          name="name"
                          required

                          placeholder="Subject Name"
                        />
                      </div>
                      <div class="mb-3">
                      <label class="form-label">Description</label>
                      <textarea class="form-control" name="description" rows="3"></textarea>
                      </div>
                      <div class="mb-3">
                        <label class="form-label">Subject Type</label>
                        <select class="form-control" name="type" required>
                          <option value="">Select Type</option>
                          <option value="Theory">Theory</option>
                          <option value="Practical">Practical</option>
                        </select>
                      </div>
                      <div class="mb-3">
                        <label class="form-label">Status</label>
                        <select class="form-control" name="status">
                          <option value="0">Active</option>
                          <option value="1">Inactive</option>
                        </select>
                      </div>
                      
                    </div>
                    <!--end::Body-->
                    <!--begin::Footer-->
                    <div class="card-footer">
                      <button type="submit" class="btn btn-primary">Submit</button>
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