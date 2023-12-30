@extends('backend.layout.app')

@section('content')



<div class="container">
    <br><h2 style="text-align: center">User Table</h2>
    <div class="col-12">
        <div class="card">
          <div class="table-responsive">
            <table
    class="table table-vcenter table-mobile-md card-table">
              <thead>
                <tr>
                  <th>Name</th>
                  <th>Phone</th>
                  <th>Address</th>
                  
                </tr>
              </thead>
              <tbody>
                @foreach($driver as $driver)
                <tr>
                  <td data-label="Name" >
                    <div class="d-flex py-1 align-items-center">
                      <span class="avatar me-2" style="background-image: url(./static/avatars/010m.jpg)"></span>
                      <div class="flex-fill">
                        <div class="font-weight-medium">{{$driver->name}}</div>
                        <div class="text-muted"><a href="#" class="text-reset">{{$driver->email}}</a></div>
                      </div>
                    </div>
                  </td>
                  <td data-label="Title" >
                    <div>{{$driver->phone}}</div>
                    <div class="text-muted">License :{{$driver->license}}</div>
                  </td>
                  <td class="text-muted" data-label="Role" >
                  {{$driver->address}}
                  </td>
                 
                </tr>
               @endforeach
              </tbody>
            </table>
          </div>
        </div>
      </div>

</div>


@endsection
