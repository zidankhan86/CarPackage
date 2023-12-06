<!-- product/page -->

<!-- Larger Header Section -->
<header class="bg-dark py-10" style="background-image: url(''); background-size: cover; background-position: center;">
    <div class="container px-4 px-lg-5 my-5">
            <h1>Packages</h1>
            
    </div>
</header>

<section class="py-6">
    <div>
        <div class="row gx-4 gx-lg-5 row-cols-2 row-cols-md-3 row-cols-xl-4 justify-content-center">



            @foreach ($products as $item)


            <div class="col mb-5">
                <div class="card h-100">
                    <h3 class="text-center py-3" >{{ $item->name }}</h3>
                    <!-- Product image-->
                    <img class="card-img-top" src="{{ url('/public/uploads/',$item->image) }}" alt="..." />
                    <!-- Product details-->
                    <div class="card-body p-4">
                        <div class="text-center">

                        </div>
                    </div>
                    <!-- Product actions-->
                    <div class="card-footer p-4 pt-0 border-top-0 bg-transparent">
                        <div class="text-center"><a class="btn btn-success mt-auto" href="{{ route('category.wise',$item->id) }}"></i>Tap to see more</a></div>
                    </div>
                </div>
            </div>


            @endforeach
        </div>
    </div>
</section>
