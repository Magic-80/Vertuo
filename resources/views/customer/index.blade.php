@extends("base")

@section("title" , "Customer")

@section("content")

    <h1> Liste des entreprise </h1>

    <form action="{{route("auth.logout")}}" method="post">
        @method("delete")
        @csrf
        @auth
            <button class="btn btn-danger"> Se déconnecter </button>
        @endauth
        @guest
           <a href="{{route("auth.login")}}"> Se connecter </a>
        @endguest
    </form>

@endsection