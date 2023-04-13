@extends("LoginProject/masterpage")

@section("title")
  ADD-Product
@endsection


@section("link")
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet" />
  {{-- <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@3.3.7/dist/css/bootstrap-theme.min.css"> --}}
  <link rel="stylesheet" href="{{asset('css/style.css')}}"/>
@endsection


@section("mainsection")
    
    <section class="vh-100" style="background-color: #eee;">
      <div class="container h-100">
        <div class="row d-flex justify-content-center align-items-center h-100">
          <div class="col-lg-12 col-xl-11">
            <div class="card text-black" style="border-radius: 25px;">
              <div class="card-body p-md-5">
                <div class="row justify-content-center">
                  <div class="col-md-10 col-lg-6 col-xl-5 order-2 order-lg-1">
                    <p class="text-center h1 fw-bold mb-5 mx-1 mx-md-4 mt-4">Add-Product</p>

                      <center>
                        <h1 class="message">
                            @if($message = Session::get('message'))
                                <h2>{{$message}}</h2>
                            @endif    
                        </h1>
                      </center>
      
                      <form action="{{route('product.store')}}" method="post" class="mx-1 mx-md-4">
                        @csrf
                        <div class="d-flex flex-row align-items-center mb-4">
                          <i class="fa-user fa-lg me-3 fa-fw"></i>
                          <div class="form-outline flex-fill mb-0">
                            <label class="form-label" for="form3Example1c">Product Name</label>
                            <input type="text" id="form3Example1c" class="form-control" name="pname" />
                          </div>
                        </div>

                        <div class="d-flex flex-row align-items-center mb-4">
                          <i class="fas fa-envelope fa-lg me-3 fa-fw"></i>
                          <div class="form-outline flex-fill mb-0">
                            <label class="form-label" for="form3Example3c">Product Discription</label>
                            <input type="textarea" id="form3Example3c" class="form-control" name="pdescription" />                            
                          </div>
                        </div>
      
                        <div class="d-flex flex-row align-items-center mb-4">
                          <i class="fas fa-lock fa-lg me-3 fa-fw"></i>
                          <div class="form-outline flex-fill mb-0">
                            <label class="form-label" for="form3Example4c">Product Price</label>
                            <input type="number" id="form3Example4c" class="form-control" name="price" />                           
                          </div>
                        </div>
      
                        <div class="d-flex flex-row align-items-center mb-4">
                          <i class="fas fa-key fa-lg me-3 fa-fw"></i>
                          <div class="form-outline flex-fill mb-0">
                            <label class="form-label" for="form3Example4c">Product Categery</label>
                            <select class="form-select" aria-label="Default select example" name="pcatagery">
                                <option value="cloth">cloth</option>
                                <option value="electric">electric</option>
                                <option value="handwork">handwork</option>
                                <option value="footware">footware</option>
                            </select>                           
                          </div>
                        </div>
  
                        <div class="d-flex justify-content-center mx-4 mb-3 mb-lg-4">
                          <button type="submit" class="btn btn-primary btn-lg">Submit</button>
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

  @section('jssection')
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/js/bootstrap.bundle.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@3.3.7/dist/js/bootstrap.min.js"></script>
  @endsection