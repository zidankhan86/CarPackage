

<div class="container">
    <br><h2 style="text-align: center">Package Table</h2>
    <div style="text-align: right">
        <a href="{{ route('category.form') }}" class="btn btn-info" style="margin-right: 10px;">+ Add Package</a>
    </div><br><br>
    <div class="col-12">
        <div class="card">
          <div class="table-responsive">
            <table
    class="table table-vcenter table-mobile-md card-table">
              <thead>
                <tr>
                    <th>Title</th>
                  <th>Category Type</th>


                  <th class="w-1">Action</th>
                </tr>
              </thead>
              <tbody>

                @foreach ($list as $item)

                <tr>
                    <tr>
                        <td data-label="Name" >{{$item->name}}</td>

                        <td data-label="Name" ><img height="100" width="100" src="{{url('/public/uploads/',$item->image)}}" alt=""></td>
                  <td>
                    <div class="btn-list flex-nowrap">
                    
                      <a href="{{ route('category.edit',$item->id) }}" class="btn btn-warning">
                        Edit
                      </a>
                      <a href="{{ route('category.delete',$item->id) }}" class="btn btn-danger">
                        Delete
                      </a>

                      </div>
                    </div>
                  </td>
                </tr>



                @endforeach
              </tbody>
            </table>
          </div>
        </div>
      </div>

</div>
