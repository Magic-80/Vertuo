@extends("base")

@section("title" , "Se connecter")

@section("content")
    <h1> Se connecter </h1>

    <div class="card">
        <div class="card-body">
            <form action="{{route("auth.login")}}" method="post" class="vstack gap-3">

                @csrf

                @include("components.input" , ['label' =>'Votre Email', "name" => "email" , "type" => "email" ,"class" => "form-control"])
    
                @include("components.input" , ['label' =>'Votre mot de passe', "name" => "password" , "type" => "password" , "class" => "form-control"])

                @include("components.input" , ['label' =>'Se souvenoir de moi', "name" => "remember" , "type" => "checkbox"])

                <button class="btn btn-primary"> Se connecter </button>
            </form>
        </div>
    </div>

@endsection