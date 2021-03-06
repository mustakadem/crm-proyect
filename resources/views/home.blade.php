@extends('layouts.app')
@section('style')
    <link rel="stylesheet" href="{{asset('css/iziModal.min.css')}}">
    <link rel="stylesheet" href="{{asset('css/jquery.fullpage.min.css')}}">
    <style>
        .login:hover, .register:hover{
            border-top: 2px solid white;
        }

    </style>
@endsection
@section('content')
    <header>
        <nav class="fixed-top pr-4" id="nav">
            <ul class="d-flex flex-row navbar-nav p-1 justify-content-end ">
                @if(Auth::check())
                    <li class="nav-item p-2 h4 "><a href="{{ route('/home')}}" class="nav-link text-white">Home</a></li>
                @else
                    <li class="nav-item p-2 h4 "><a href="{{ route('login') }}" class="nav-link login text-white">Login</a></li>
                 @endif
            </ul>
        </nav>
    </header>


    <div id="fullpage">
        <div class="section">
            <div class=" row m-5 d-flex justify-content-between">
                <div class="w-50">
                    <p><img src="https://www.ibiscomputer.com/images/CRMBanner.png" alt="" height="150" width="150">  <strong class="h3 text-white">CRM Proyect</strong></p>
                    <p><strong class="text-white h5">El término wikinota 1​ (del hawaiano wiki, «rápido»)2​ alude al nombre que recibe un sitio web, cuyas páginas pueden ser editadas directamente desde el navegador, donde los mismos usuarios crean, modifican o eliminan contenidos que, generalmente, comparten. No tiene por qué ser necesariamente un sitio en la web, puesto que hay wikis instalables para uso en el escritorio de un computador personal o que pueden portarse en un llavero USB que lleven un entorno LAMP, como por ejemplo XAMPP.</strong></p>
                </div>

                <form role="form" method="POST" action="{{ url('/register') }}" class=" d-flex flex-row-reverse">
                    {!! csrf_field() !!}
                <ul class="navbar-nav mr-5 ">
                    <li class="m-3"><p class="h3 text-white">Quick Registration</p></li>
                    <li class="m-3">
                        <input type="text" id="username" name="username"  placeholder="username" size="40" class=" form-control  {{ $errors->has('username') ? ' is-invalid' : '' }} bg-transparent border border-top-0 border-left-0 border-right-0">
                        <div id="errorUsername"></div>
                    </li>

                    <li class="m-3">
                        <input type="text" placeholder="email" id="emailRegister" name="email" size="40" class=" form-control  {{ $errors->has('email') ? ' is-invalid' : '' }} bg-transparent border border-top-0 border-left-0 border-right-0">
                        <div id="errorUserEmail"></div>
                    </li>


                    <li class="m-3">
                        <input type="password" name="password_confirmation" id="password_confirmation" placeholder="password" size="40" class="form-control bg-transparent border border-top-0 border-left-0 border-right-0 ">
                        <div id="errorUserPasswordConfirmation"></div>
                    </li>

                    <li class="m-3"><input type="password" name="password" id="passwordRegister " placeholder="confirmate password" size="40" class=" form-control  {{ $errors->has('password') ? ' is-invalid' : '' }} bg-transparent border border-top-0 border-left-0 border-right-0"></li>
                    <li> <div id="errorUserPassword"></div></li>
                    <li class="m-3"><button type="submit" class="btn btn-info w-100">Create Account</button></li>
                </ul>
                </form>
            </div>
        </div>
        <section class="section">
            <div class="col-md-12">
                <p class="h4 text-white">Las aplicaciones de mayor peso y a la que le debe su mayor fama hasta el momento, ha sido la creación de enciclopedias colectivas, género al que pertenece Wikipedia. Existen muchas otras aplicaciones más cercanas a la coordinación de informaciones y acciones, o la puesta en común de conocimientos o textos dentro de grupos.</p>
            </div>
            <div class="row m-3">
                <div class="col-md-6">
                    <img src="{{asset('img/list')}}" alt="" height="300" width="400">
                </div>
                <div class="col-md-6">
                    <img src="{{asset('img/panel')}}" alt="" height="300" width="400">
                </div>
            </div>
        </section>
      <section class="section ">
          <div class="slide">
              <div class="row">
                  <div class="col">
                      <img class="featurette-image img-fluid mx-auto w-75 h-100" src="https://cdn.onlinewebfonts.com/svg/img_21192.png" alt="">
                  </div>
                  <div class="col">
                      <h2>ACCEDE DESDE DONDE QUIERAS</h2>
                      <p>Una forma sencilla y eficaz de llevar tu negocio en el bolsillo</p>
                  </div>
              </div>

          </div>
          <div class="slide">
              <div class="row container">
                  <div class="col">
                      <h2>CREA TU RED</h2>
                      <p>Gestiona tus clientes y contactos de manera dinamica</p>
                  </div>
                  <div class="col">
                      <img class="featurette-image img-fluid mx-auto w-75 h-100" src="http://www.westside-tennis.com/wp-content/uploads/2015/01/4-user-icon.png" alt="">
                  </div>
              </div>

          </div>
          <div class="slide">
              <div class="row container">
                  <div class="col">
                      <img class="featurette-image img-fluid mx-auto w-75 h-100" src="http://freevector.co/wp-content/uploads/2014/06/46998-bars-graphic-with-ascendant-arrow.png" alt="">
                  </div>
                  <div class="col">
                      <h2>AUMENTA TUS INGRESOS</h2>
                      <p>Gestiona tus facturas y visualiza estadisticas personalizadas</p>
                  </div>
              </div>

          </div>
        </section>


    <footer class="section fp-auto-height" >
        <section  class="row" >
            <div class="col-md-2">
            <ul class="d-flex  navbar-nav p-1 justify-content-between p-5">
                <li class="p-2">Hola</li>
                <li class="p-2">Adios</li>
                <li class="p-2">Quetal</li>
                <li class="p-2">Buenas</li>
            </ul>
            </div>
        </section>
        <hr class="featurette-divider bg-info">
        <section class="row">
            <div class="col-md-12">
                <p class="text-center">Copiright <strong>Multaso</strong></p>
            </div>
        </section>
    </footer>
    </div>
        @include('auth.login')
@endsection

@push('js')

    <script src="{{asset('js/iziModal.min.js')}}"></script>
    <script src="{{asset('js/modal.js')}}"></script>
    <script src="{{asset('js/ajaxCalls.js')}}"></script>
    <script src="{{asset('js/jquery.fullpage.min.js')}}"></script>
    <script src="{{asset('js/scrollPage.js')}}"></script>
@endpush
