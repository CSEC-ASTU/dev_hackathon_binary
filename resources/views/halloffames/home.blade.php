@extends('includes.master')

@section('main-section')
    <div class="col-md-6 border-right">
        <div class="content-header">
            <div class="container-fluid">
                <div class="row mb-2">
                    <div class="col-sm-6">
                        <h1 class="m-0">
                            Hall of Fame
                        </h1>
                    </div>
                    <div class="col-sm-6">
                        <ol class="breadcrumb float-sm-right">
                            <li class="breadcrumb-item"><a href="{{ route('halloffames.add') }}">Add new</a></li>
                        </ol>
                    </div>
                </div>
            </div>
        </div>


        <div class="row">
            <div class="col-md-12 col-lg-6 col-xl-4">
              <div class="card mb-2 bg-gradient-dark">
                <img class="card-img-top" src="assets/dist/img/logo.jpg" alt="Dist Photo 1">
                <div class="card-footer d-flex flex-column justify-content-end">
                  <h5 class="card-title text-primary text-white">User</h5>
                  <p class="card-text text-white pb-2 pt-1">Work</p>
                  <a href="#" class="text-white">Link to Work</a>
                </div>
              </div>
            </div>
            <div class="col-md-12 col-lg-6 col-xl-4">
              <div class="card mb-2 bg-gradient-dark">
                <img class="card-img-top" src="assets/dist/img/logo.jpg" alt="Dist Photo 1">
                <div class="card-footer d-flex flex-column justify-content-end">
                  <h5 class="card-title text-primary text-white">User</h5>
                  <p class="card-text text-white pb-2 pt-1">Work</p>
                  <a href="#" class="text-white">Link to Work</a>
                </div>
              </div>
            </div>
            <div class="col-md-12 col-lg-6 col-xl-4">
              <div class="card mb-2 bg-gradient-dark">
                <img class="card-img-top" src="assets/dist/img/logo.jpg" alt="Dist Photo 1">
                <div class="card-footer d-flex flex-column justify-content-end">
                  <h5 class="card-title text-primary text-white">User</h5>
                  <p class="card-text text-white pb-2 pt-1">Work</p>
                  <a href="#" class="text-white">Link to Work</a>
                </div>
              </div>
            </div>
            <div class="col-md-12 col-lg-6 col-xl-4">
              <div class="card mb-2 bg-gradient-dark">
                <img class="card-img-top" src="assets/dist/img/logo.jpg" alt="Dist Photo 1">
                <div class="card-footer d-flex flex-column justify-content-end">
                  <h5 class="card-title text-primary text-white">User</h5>
                  <p class="card-text text-white pb-2 pt-1">Work</p>
                  <a href="#" class="text-white">Link to Work</a>
                </div>
              </div>
            </div>
          </div>

    </div>
@endsection
