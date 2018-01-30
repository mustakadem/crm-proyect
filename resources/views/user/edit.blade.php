@extends('layouts.app')
@section('menu')
    <ol class="breadcrumb">
        <li><a href="{{route('user.home')}}">Home</a></li>
        <li class="active">Edit</li>
    </ol>
@endsection
@section('content')
    <div class="container">
        <div class="col-md-3 jumbotron">
            <ul class="nav nav-pills nav-stacked">
                <li role="presentation"><a href="#">Home</a></li>
                <li role="presentation" class="active"><a href="{{route('user.edit',array('user'=> $user->username))}}">Edit User</a></li>
                <li role="presentation"><a href="#">Statistics</a></li>
            </ul>
        </div>

        <h3>Edit User</h3>
        <form action="{{route('user.update',array('id'=>$user->id))}}" method="post">
            {{ csrf_field() }}
            {{ method_field('PUT') }}
            <div class="col-md-3">
                <div class="form-group @if( $errors->has('name'))has-error @endif">
                    <label for="name">Name</label>
                    <input type="text" class="form-control" name="name" id="name" placeholder="Name"  value="{{ $user->name}}">
                    @if ($errors->has('name'))
                        <span class="help-block">
                      <strong>{{ $errors->first('name') }}</strong>
                  </span>
                    @endif
                </div>
                <div class="form-group @if( $errors->has('surname'))has-error @endif">
                    <label for="surnames">Surnames</label>
                    <input type="text" class="form-control" name="surname" id="surname" placeholder="Surnames"  value="{{ $user->surnames }}">
                    @if ($errors->has('surname'))
                        <span class="help-block">
                      <strong>{{ $errors->first('surname') }}</strong>
                  </span>
                    @endif
                </div>
                <div class="form-group ">
                    <label for="avatar">Avatar</label>
                    <input type="text" class="form-control" name="avatar" id="avatar" placeholder="User URL image"  value="{{ $user->avatar }}">
                </div>
            </div>
            <div class="col-md-3 row">
                <div class="form-group @if( $errors->has('movil'))has-error @endif">
                    <label for="movil">Movil</label>
                    <input type="number" class="form-control" name="movil" id="movil" min="0" placeholder="Movil"  value="{{$user->movil}}">
                    @if ($errors->has('movil'))
                        <span class="help-block">
                      <strong>{{ $errors->first('movil') }}</strong>
                  </span>
                    @endif
                </div>
                <div class="form-group @if( $errors->has('email'))has-error @endif">
                    <label for="email" >Email</label>
                    <input type="email" class="form-control" name="email" id="email" placeholder="Email"  value="{{ $user->email }}">
                    @if ($errors->has('email'))
                        <span class="help-block">
                      <strong>{{ $errors->first('email') }}</strong>
                  </span>
                    @endif
                </div>
            </div>
            <div class="col-md-3">
                <div class="form-group">
                    <label for="sector">Sector</label>
                    <input type="text" class="form-control" name="sector" id="sector" placeholder="Sector"  value="{{ $user->sector }}">
                </div>
                <div class="form-group">
                    <label for="website">WebSite</label>
                    <input type="text" class="form-control" name="website" id="website" placeholder="WebSite"  value="{{ $user->website}}">
                </div>
            </div>

            <button class="btn btn-primary" type="submit">Enviar</button>

        </form>
    </div>

@endsection

