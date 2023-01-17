@extends('web.index')
@section('content')
  <!-- <h1 class="fs-2 fw-bold text-white">Lanches em destaque: </h1> -->
  <div class="row d-flex justify-content-center mt-3">
    
    <div class="card">
      <div class="card-body">
        <h5 class="card-title">Special title treatment</h5>
        <p class="card-text">With supporting text below as a natural lead-in to additional content.</p>
        <a href="#" class="btn btn-danger">Go somewhere</a>
      </div>
    </div>

    <div class="row">
      <div class="list-group col-md-6 col-12 mt-3">
        <h4>Burger</h4>
        @for($i = 0; $i < 3; $i++)
          <a href="#" class="list-group-item list-group-item-action d-flex gap-3 py-3" aria-current="true">
            <img src="https://github.com/twbs.png" alt="twbs" width="32" height="32" class="rounded-circle flex-shrink-0">
            <div class="d-flex gap-2 w-100 justify-content-between">
              <div>
                <h6 class="mb-0">x-burger</h6>
                <p class="mb-0 opacity-75">Some placeholder content in a paragraph.</p>
              </div>
              <small class="opacity-50 text-nowrap">R$18,98</small>
            </div>
          </a>
        @endfor
      </div>

      <div class="list-group col-md-6 col-12 mt-3">
        <h4>Bebidas</h4>
        @for($i = 0; $i < 5; $i++)
          <a href="#" class="list-group-item list-group-item-action d-flex gap-3 py-3" aria-current="true">
            <img src="https://github.com/twbs.png" alt="twbs" width="32" height="32" class="rounded-circle flex-shrink-0">
            <div class="d-flex gap-2 w-100 justify-content-between">
              <div>
                <h6 class="mb-0">Coca-cola lata</h6>
                <p class="mb-0 opacity-75">Some placeholder content in a paragraph.</p>
              </div>
              <small class="opacity-50 text-nowrap">R$3,49</small>
            </div>
          </a>
        @endfor
    </div>
    </div>

  </div>
@endsection

<style>
.img-item-cropped {
    width: 100%;
    height: 250px; /* height of container */
    /* object-fit: cover;
    object-position: 0px 50%; */
}
</style>