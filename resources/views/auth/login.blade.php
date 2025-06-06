@extends('layouts/main')

@section('template_title')
    {{ __('Update') }} Producto
@endsection

@section('contenido')
<section class="vh-100" style="background-color: #9A616D;">
    <div class="container py-5 h-100">
      <div class="row d-flex justify-content-center align-items-center h-100">
        <div class="col col-xl-10">
          <div class="card" style="border-radius: 1rem;">
            <div class="row g-0">
              <div class="col-md-6 col-lg-5 d-none d-md-block">
                <img src="https://static.vecteezy.com/system/resources/previews/012/341/031/non_2x/red-and-white-vertical-background-with-grid-style-for-advertisements-banners-flyers-brochures-and-others-free-vector.jpg"
                  alt="login form" class="img-fluid" style="border-radius: 1rem 0 0 1rem;" />
              </div>
              <div class="col-md-6 col-lg-7 d-flex align-items-center">
                <div class="card-body p-4 p-lg-5 text-black">

                <form form method="POST" action="{{ route('login') }}">
                    @csrf

                    <div class="d-flex align-items-center mb-3 pb-1">
                      <i class="fas fa-cubes fa-2x me-3" style="color: #ff6219;"></i>
                      <img src="imagen\LogoED10.png"
                  alt="login form" class="img-fluid" style="border-radius: 1rem 0 0 1rem;" />
                    </div>

                    <h5 class="fw-normal mb-3 pb-3" style="letter-spacing: 1px;">Identifíquese</h5>

                    <div data-mdb-input-init class="form-outline mb-4">
                      <input type="text" id="name" name="name" class="form-control form-control-lg" />
                      <label class="form-label" for="form2Example17">Empleado: </label>
                    </div>

                    <div data-mdb-input-init class="form-outline mb-4">
                      <input type="password" id="pass" name="pass" class="form-control form-control-lg" />
                      <label class="form-label" for="form2Example27">Contrasena:</label>
                    </div>

                    <div class="pt-1 mb-4">
                      <button type="submit" class="btn btn-primary">Login</button>
                    </div>


                </form>

                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </section>

@endsection
