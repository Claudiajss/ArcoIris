@extends('layouts.app')
@section('title', 'arcoiris- Lista de Usuarios')

@section('content')
  <div class="row">
    <div class="col-md-10 offset-md-1">
        <h1> <i class="fa fa-users"></i> Lista de Usuarios</h1>
        <hr>
        <a href="{{route('users.create')}}" class="btn btn-primary my-3"> 
            <i class="fa fa-plus pr-2"></i>
             Agregar Usuario
        </a>
        <br>
        @if (count($users)>0)
        <table class="table table-striped table-hover">
            <thead>
              <tr>
                <th scope="col">Id</th>
                <th scope="col">Nombre Completo</th>
                <th scope="col">Correo</th>
                <th scope="col">Cumpleaños</th>
                <th scope="col">Fecha de creación</th>
                <th scope="col">Acciones</th>
              </tr>
            </thead>
            <tbody>
                @foreach ($users as $user)
                    <tr>
                        <th>{{$user->id}}</th>
                        <td>{{$user->fullname}}</td>
                        <td>{{$user->email}}</td>
                        <td>{{$user->birthday}}</td>
                        <td>{{$user->created_at}}</td>
                        <td>
                            <a href="{{route('users.show',$user->id)}}" class="btn btn-sm btn-light"> <i class="fa fa-search"></i></a>
                            <a href="{{route('users.edit',$user->id)}}" class="btn btn-sm btn-light"> <i class="fa fa-pen"></i></a>
                            <form action="{{route('users.destroy',$user)}}" method="POST" class="d-inline">
                                @csrf
                                @method('delete')
                                <button type="button" class="btn btn-sm btn-danger btn-delete"><i class="fa fa-trash"></i></button>
                            </form>
                        </td>
                    </tr>
                @endforeach
              
            </tbody>
          </table>
        @else
            <div class="alert alert-warning my-4" role="alert">
                Aún no hay usuarios registradas
            </div> 
        @endif
    </div>
  </div>
@endsection