
<link rel="stylesheet" href="https://unpkg.com/bootstrap@5.3.2/dist/css/bootstrap.min.css">
<link rel="stylesheet" href="https://unpkg.com/bs-brain@2.0.2/components/abouts/about-4/assets/css/about-4.css">
<!-- About 4 - Bootstrap Brain Component -->
<section class="py-3 py-md-5 py-xl-8">
    <div class="container ">
      <div class="row">
        <div class="col-12 col-md-10 col-lg-12">  
          <!--Main layout start-->
        <!--Section: Content-->

        <hr class="my-5" />

        <!--Section: Content-->
        <section class="text-center">
          <h1 class="mb-5"><strong>"Drive Your Dreams: Where Every Journey Begins with RentVehicle"</strong></h1>

          <div class="row">
            <div class="col-lg-4 col-md-12 mb-4">
              <div class="card">
                <div class="bg-image hover-overlay ripple" data-mdb-ripple-color="light">
                  <img
                    src="{{ asset('uploads/20945933.jpg') }}"
                    class="img-fluid"
                  />
                  <a href="#!">
                    <div class="mask" style="background-color: rgba(251, 251, 251, 0.15);"></div>
                  </a>
                </div>
                <div class="card-body">
                  <h5 class="card-title">Embark on Limitless Adventures</h5>
                  <p class="card-text">
                  Embark on a journey of limitless possibilities with our diverse fleet of rental vehicles. Whether you crave the open road or desire the flexibility to explore hidden gems, our service provides the wheels for your every adventure. From sleek city cars to rugged off-road vehicles, choose your ride and explore freedom like never before.
                  </p>
                  <a href="#!" class="btn btn-primary">Explore</a>
                </div>
              </div>
            </div>

            <div class="col-lg-4 col-md-6 mb-4">
              <div class="card">
                <div class="bg-image hover-overlay ripple" data-mdb-ripple-color="light">
                  <img
                  src="{{ asset('uploads/6514377.jpg') }}"
                    class="img-fluid"
                  />
                  <a href="#!">
                    <div class="mask" style="background-color: rgba(251, 251, 251, 0.15);"></div>
                  </a>
                </div>
                <div class="card-body">
                  <h5 class="card-title">Effortless Journeys, Exceptional Vehicles</h5>
                  <p class="card-text">
                  Elevate your travel experience with our seamless rental service. Enjoy the convenience of hassle-free bookings and step into a world of exceptional vehicles that redefine comfort and style. Our commitment to excellence ensures that every journey, short or long, is met with reliability and luxury. Effortless travels await you.
                  </p>
                  <a href="#!" class="btn btn-primary">Explore</a>
                </div>
              </div>
            </div>

            <div class="col-lg-4 col-md-6 mb-4">
              <div class="card">
                <div class="bg-image hover-overlay ripple" data-mdb-ripple-color="light">
                  <img
                  src="{{ asset('uploads/651.jpg') }}"
                    class="img-fluid"
                  />
                  <a href="#!">
                    <div class="mask" style="background-color: rgba(251, 251, 251, 0.15);"></div>
                  </a>
                </div>
                <div class="card-body">
                  <h5 class="card-title">Unleash Your Next Adventure</h5>
                  <p class="card-text">
                  Unleash the thrill-seeker within you and embark on a journey filled with excitement and discovery. Our rental vehicles are more than transportation; they are the catalysts for unforgettable adventures. From scenic road trips to urban explorations, seize the opportunity to make memories that last a lifetime. Your next adventure starts with us.
                  </p>
                  <a href="#!" class="btn btn-primary">Explore</a>
                </div>
              </div>
            </div>
          </div>
        </section>
        <!--Section: Content-->

        <hr class="my-5" />

        <!--Section: Content-->
        <section class="mb-5">
          <h2 class="mb-5 text-center"><strong>Roadmap to Adventure: Sign Up for Our Newsletter Today</strong></h2>

          <div class="row d-flex justify-content-center">
            <div class="col-md-6">
              <form>
                <!-- 2 column grid layout with text inputs for the first and last names -->
                <div class="row mb-4">
                  <div class="col">
                    <div class="form-outline">
                      <input type="text" id="form3Example1" class="form-control" />
                      <label class="form-label" for="form3Example1">First name</label>
                    </div>
                  </div>
                  <div class="col">
                    <div class="form-outline">
                      <input type="text" id="form3Example2" class="form-control" />
                      <label class="form-label" for="form3Example2">Last name</label>
                    </div>
                  </div>
                </div>

                <!-- Email input -->
                <div class="form-outline mb-4">
                  <input type="email" id="form3Example3" class="form-control" />
                  <label class="form-label" for="form3Example3">Email address</label>
                </div>

                <!-- Password input -->
                <div class="form-outline mb-4">
                  <input type="password" id="form3Example4" class="form-control" />
                  <label class="form-label" for="form3Example4">Password</label>
                </div>

                <!-- Checkbox -->
                <div class="form-check d-flex justify-content-center mb-4">
                  <input
                    class="form-check-input me-2"
                    type="checkbox"
                    value=""
                    id="form2Example3"
                    checked
                  />
                  <label class="form-check-label" for="form2Example3">
                    Subscribe to our newsletter
                  </label>
                </div>

                <!-- Submit button -->
                <div class="text-center">
                  <button type="submit " class="btn btn-primary btn-block mb-4">
                  Sign up
                </button>
                </div>
                

                <!-- Register buttons -->
                <div class="text-center">
                  <p>or sign up with:</p>
                                    <button type="button" class="btn btn-primary btn-floating mx-1" onclick="window.location.href='https://www.facebook.com/mahira.jabin.94';">
                          <i class="fab fa-facebook-f"></i>
                      </button>

                      <button type="button" class="btn btn-primary btn-floating mx-1" onclick="window.location.href='your_google_url';">
                          <i class="fab fa-google"></i>
                      </button>

                      <button type="button" class="btn btn-primary btn-floating mx-1" onclick="window.location.href='your_twitter_url';">
                          <i class="fab fa-twitter"></i>
                      </button>

                      <button type="button" class="btn btn-primary btn-floating mx-1" onclick="window.location.href='your_github_url';">
                          <i class="fab fa-github"></i>
                      </button>
                </div>
              </form>
            </div>
          </div>
        </section>
        <!--Section: Content-->
      </div>
    </main>
    <!--Main layout-->

        </div>
      </div>
    </div>
    
  </section>
  
