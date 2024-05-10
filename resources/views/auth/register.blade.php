@extends("base")

@section("title" , "s'inscrire")

@section("content")
    
<h1> S'incrire </h1>

<div class="card">
    <div class="card-body">
        <form action="{{route("auth.register")}}" method="post" class="vstack gap-3">
            @csrf

            @include("components.input" , ['label' =>"Nom D'utilisateur", "name" => "name" , "type" => "text" , "class" => "form-control"])

            @include("components.input" , ['label' =>'Adresse Email', "name" => "email" , "type" => "email" , "class" => "form-control"])

            @include("components.input" , ['label' =>'Mot De Passe', "name" => "password" , "type" => "password" , "class" => "form-control"])

            @include("components.input" , ['label' =>'Confirmer Le Mot De Passe', "name" => "password_confirmation" , "type" => "password" , "class" => "form-control"])

            <button class="btn btn-primary"> S'incrire </button>
        </form>
    </div>
</div>

@endsection