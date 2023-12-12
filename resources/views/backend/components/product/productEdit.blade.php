<div class="container">
    <div class="container">
        <div class="container">
            <div class="col-12"><br><br>
                <form class="card" method="POST" action="{{ route('product.update',$product->id) }}" enctype="multipart/form-data">
                    @csrf
                    <div class="card-body">
                        <h3 class="card-title" style="text-align: center">Product Form</h3>
                        <div class="row row-cards">
                            <div class="col-md-12">
                                <div class="mb-12">
                                    <label class="form-label">Car Name</label>
                                    <input type="text" class="form-control" name="name" placeholder="Car Name" value="{{ $product->name }}">
                                </div>
                            </div>
                            <div class="col-sm-12 col-md-12">
                                <div class="mb-12">
                                    <label class="form-label">Price/hr</label>
                                    <input type="number" class="form-control" name="price" placeholder="Price" value="{{ $product->price }}">
                                </div>
                            </div>
                            <div class="col-sm-12 col-md-12">
                                <div class="mb-12">
                                    <label class="form-label">Select Image</label>
                                    <input type="file" class="form-control" name="image" value="{{ $product->image }}">
                                </div><br>

                                <div class="mb-12">
                                    <label class="form-label">Select Package</label>
                                   <select name="category_id" id="" class="form-control">

                                    @foreach ($categories as $category)
                                    <option @if ($product-> category_id  == $category->id)selected
                                        
                                    @endif  value="{{ $category->id }}">{{ $category->name }}</option>
                                    @endforeach

                                   </select>
                                </div>
                            </div>
                            <div class="col-sm-12 col-md-12">
                                <div class="mb-12">
                                    <label class="form-label">Description</label>
                                    <textarea rows="5" name="description" class="form-control" placeholder="Product Description">
                                  {{ $product->description }}
                                    </textarea>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="card-footer text-end">
                        <button type="submit" class="btn btn-primary">Update Product</button>
                    </div>
                </form>
            </div>

        </div>
    </div>
</div>
