@extends('auth.app')
@section('content')
<div class="page-header header-filter" style="background-image: url('../assets/img/biblio.png'); background-size: cover; background-position: top center;">

    <div class="container">
      <div class="row">
        <div class="col-lg-4 col-md-6 ml-auto mr-auto">
          <div class="card card-login">
            <form class="form" method="post" action="{{ route('login') }}">
              @csrf

              <div class="card-header card-header-primary text-center">
                <h4 class="card-title">Iniciar Sesión</h4>
            </div>
            <p class="text-divider">Ingresa tus datos</p>
            
            <div class="card-body">


              


             <div class="input-group">
                <div class="input-group-prepend">
                    <span class="input-group-text">
                        <i class="material-icons">email</i>
                    </span>
                </div>
                <input id="email" type="email" placeholder="Email..." class="form-control{{ $errors->has('email') ? ' is-invalid' : '' }}" name="email" value="{{ old('email') }}" required autofocus>
            </div>
            
            

            <div class="input-group">
                <div class="input-group-prepend">
                    <span class="input-group-text">
                        <i class="material-icons">lock_outline</i>
                    </span>
                </div>
                <input id="password" type="password" class="form-control{{ $errors->has('password') ? ' is-invalid' : '' }}" name="password" required placeholder="Password..." />
            </div>


            
        </div>
        <div class="checkbox text-center">
            <label>
                <input type="checkbox" name="remember" {{ old('remember') ? 'checked' : '' }}>
                Recordar sesión
            </label>
        </div>
        <div class="footer text-center">
            <button type="submit" class="btn btn-simple btn-primary btn-lg">Ingresar</button>
        </div>

    </div>
    
</form>
</div>
</div>
</div>
</div>
</div>

@endsection