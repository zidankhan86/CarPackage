

<div class="container">
    <br><h2 style="text-align: center">Product Table</h2>
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
                    <th>Price(BDT)</th>
                    <th>availeable Cars</th>
                    <th>Description</th>
                    <th>Image</th>


                  <th class="w-1">Action</th>
                </tr>
              </thead>
              <tbody>

                @foreach ($products as $product)

                <tr>
                    <tr>
                        <td data-label="Name" >{{$product->name}}</td>
                        <td data-label="category_id" >{{$product->category->name}}</td>
                        <td data-label="price" >{{$product->price}}</td>
                        <td data-label="price" >{{$product->stock}}</td>
                        <td data-label="description" >{{$product->description}}</td>

                        <td data-label="image" >
                            <img height="100" width="100" 
                                src="{{url('/public/uploads/',$product->image)}}" 
                                    alt="">
                                </td>

                        
                  <td>
                    <div class="btn-list flex-nowrap">
                    
                      <a href="{{ route('product.edit',$product->id) }}" class="btn btn-warning">
                        Edit
                      </a>
                      <a href="{{ route('product.delete',$product->id) }}" class="btn btn-danger">
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
