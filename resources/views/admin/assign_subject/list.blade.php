@extends('layouts.app')

@section('content')  


<main class="app-main">
        <!--begin::App Content Header-->
        <div class="app-content-header">
          <!--begin::Container-->
          <div class="container-fluid">
            <!--begin::Row-->
            <div class="row">
              <div class="col-sm-6"><h3 class="mb-0">Assign Subject List</h3></div>
              <div class="col-sm-6" style="text-align: right;">
                <a href="{{ url('admin/assign_subject/add') }}" class="btn btn-primary">Add New Assign Subject</a>
              </div>
              
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
          <div class="row">
          <div class="col-md-12">
                <div class="card mb-4">
                <div class="card-header">
                    <h3 class="card-title">Search Assign Subject</h3>
                  </div>
                  
                  <!--begin::Form-->
                  <form method="get" action="">
                    <!--begin::Body-->
                    <div class="card-body">
                      <div class="row">
                      <div class="mb-3 col-md-3">
                        <label class="form-label">Class Name</label>
                        <input
                          type="text"
                          class="form-control"
                          value="{{ Request::get('class_name') }}"
                          name="class_name"
                          placeholder="Class Name"
                        />
                      </div>

                      <div class="mb-3 col-md-3">
                        <label class="form-label">Subject Name</label>
                        <input
                          type="text"
                          class="form-control"
                          value="{{ Request::get('subject_name') }}"
                          name="subject_name"
                          placeholder="Subject Name"
                        />
                      </div>
                      
                        <div class="mb-3 col-md-3">
                        <label class="form-label">Date</label>
                        <input
                          type="date"
                          class="form-control"
                          value="{{ Request::get('date') }}"
                          name="date"
                          placeholder="Date"
                        />
                        </div>
                        <div class="mb-3 col-md-3">
                          <button class="btn btn-primary" type="submit" style="margin-top: 30px;">Search</button>
                          <a href="{{ url('admin/class/list') }}" class="btn btn-success" style="margin-top: 30px;">Reset</a>
                        </div>
                      </div>
                      
                    
                  </form>
                  <!--end::Form-->
                </div>
                <!--end::Quick Example-->
                
              </div>
            <!--begin::Row-->
            <!-- <div class="row"> -->

            @include('_message')
              
              <!-- /.col -->
              
                <!-- /.card -->
                <div class="card mb-4">
                  <div class="card-header">
                    <h3 class="card-title">Assign Subject List</h3>
                  </div>
                  <!-- /.card-header -->
                  <div class="card-body p-0">
                    <table class="table table-striped">
                      <thead>
                        <tr>
                          <th>#</th>
                          <th>Class Name</th>
                          <th>Subject Name</th>
                          <th>Status</th>
                          <th>Created By</th>
                          <th>Created Date</th>
                          <th>Action</th>
                        </tr>
                      </thead>
                      <tbody>
                      @foreach($getRecord as $value)
                          <tr>
                            <td>{{ $value->id }}</td>
                            <td>{{ $value->class_name }}</td>
                            <td>{{ $value->subject_name }}</td>
                            <td>
                              @if($value->status == 0)
                                Active
                              @else
                                Inactive
                              @endif
                            </td>
                            <td>{{ $value->created_by_name }}</td>
                            <td>{{ date('d-m-Y H:i A', strtotime($value->created_at)) }}</td>
                            <td>
                              <a href="{{ url('admin/assign_subject/edit/'.$value->id) }}" class="btn btn-primary">Edit</a>
                              <a href="{{ url('admin/assign_subject/edit_single/'.$value->id) }}" class="btn btn-primary">Edit Single</a>
                              <a href="{{ url('admin/assign_subject/delete/'.$value->id) }}" class="btn btn-danger">Delete</a>
                            </td>
                          </tr>
                        @endforeach
                      </tbody>
                    </table>
                    <div style="padding: 10px; float: right;">
                    {!! $getRecord->appends(Illuminate\Support\Facades\Request::except('page'))->links('pagination::bootstrap-4') !!}
                    </div>
                  </div>
                  <!-- /.card-body -->
                </div>
                <!-- /.card -->
              </div>
              <!-- /.col -->
            </div>
            <!--end::Row-->
          </div>
          <!--end::Container-->
        </div>
        <!--end::App Content-->
      </main>

@endsection