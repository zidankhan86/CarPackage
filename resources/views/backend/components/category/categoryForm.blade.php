<div class="contai">
    <div class="container">
        <div class="container">
            <div class="container"><br><br>
                <div class="col-8 mx-auto" ><br><br>
                    <form class="card" action="{{ route('category.store') }}" method="post" enctype="multipart/form-data">
                        @csrf
                      <div class="card-body">
                        <h4 class="card-title" style="text-align: center">Package Form</h4>
                        <div class="row row-cards">
                          <div class="col-md-12">
                            <div class="mb-3">
                              <label class="form-label">Package Name</label>
                              <input type="text" name="name" class="form-control" placeholder="Gold">
                            </div>

                            <div class="mb-3">
                                <label class="form-label">Package Name</label>
                                <input type="file" name="image" class="form-control" >
                              </div>

                        </div>
                      </div>
                      <div class="card-footer text-end">
                        <button type="submit" class="btn btn-primary">Create package</button>
                      </div>
                    </form>
                  </div><br><br>
            </div><br><br>
        </div><br><br>
    </div><br><br>
</div><br><br>
