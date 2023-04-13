@extends("LoginProject/masterpage")

  @section("title")
    Dasboard
  @endsection

  @section("link")
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet" />
    <link rel="stylesheet" href="{{asset('css/style.css')}}"/>
  @endsection
  
  @section('logo')
    <center>
      <img src="img/logo.png" alt="logo" class="logo">
    </center>
  @endsection

  @section('jssection')
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/js/bootstrap.bundle.min.js"></script>
  @endsection