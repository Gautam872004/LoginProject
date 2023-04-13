@extends("LoginProject/masterpage")

@section("title")
    Product
@endsection


@section("link")
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet" />
    <link rel="stylesheet" href="{{asset('css/style.css')}}"/>
@endsection

@section("mainsection")

    <center>
        <h1 class="productview">
            Product-View
        </h1>

        <center>
            <h1 class="message">
                @if($message = Session::get('message'))
                    <h2>{{$message}}</h2>
                @endif    
            </h1>
        </center>

        <h4 class="add">
            <a href="/product/create">ADD</a>
        </h4>

    </center>

    

    <center>
        <table border="5" cellspacing="3" cellpadding="5">
            <thead>
                <tr>
                    <th>P-ID</th>
                    <th>P-Name</th>
                    <th>P-Discription</th>                                           
                    <th>Price</th>
                    <th>P-Catagery</th>
                    <th colspan="3">P-Action</th>
                </tr>
            </thead>
            <tbody>
                @foreach ($data as $row)
                    <tr>
                        <td>{{$row->pid}}</td>
                        <td>{{$row->pname}}</td>
                        <td>{{$row->pdescription}}</td>
                        <td>{{$row->price}}</td>
                        <td>{{$row->pcatagery}}</td>
                        <td>
                            <a href="{{route('product.edit',$row->pid)}}">EDIT</a>
                        </td>
                        <td>
                            <a href="{{route('product.show',$row->pid)}}">Show</a>
                        </td>
                        <td>
                            <form action="{{route('product.destroy',$row->pid)}}" method="post">
                                @csrf
                                @method('DELETE')
                                <button type="submit">DELETE</button>
                            </form>
                        </td>
                    </tr>
                @endforeach
            </tbody>
        </table>
    </center>
@endsection 

@section('jssection')
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/js/bootstrap.bundle.min.js"></script>
@endsection