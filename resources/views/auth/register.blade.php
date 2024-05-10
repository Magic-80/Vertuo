@extends("base")

@section("content")
    
<h1> S'incrire </h1>

<div class="card">
    <div class="card-body">
        <form  method="post" class="vstack gap-3">
            @csrf

            <div class="form-group">
                <label for="name_user"> Nom de l'utilisateur </label>
                <input type="text" class="form-control" id="name_user" name="name_user" value="{{old("name")}}">
                @error("name")
                   {{$message}}
                @enderror
            </div>

            <div class="form-group">
                <label for="email"> Email </label>
                <input type="email" class="form-control" id="email" name="email" value="{{old("email")}}">
                @error("email")
                   {{$message}}
                @enderror
            </div>
    
            <div class="form-group">
                <label for="password"> Mot de passe </label>
                <input type="password" class="form-control" id="password" name="password">
                @error("password")
                    {{$message}}
                @enderror
            </div>
    
            <button class="btn btn-primary"> S'incrire </button>
        </form>
    </div>
</div>

@endsection