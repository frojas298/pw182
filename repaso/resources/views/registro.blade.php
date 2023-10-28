@extends("layouts.plantilla") <!--Extiende lo que hay en la carpeta layouts.plantilla la herencia  -->

@section("titulo","inicio")


@section("contenido") <!--Permite añadir contenido -->

<h1 class="display-1 text-center text-secondary mt-5 mb-4"> REGISTER A BOOK</h1>

@if (session()->has('confirmacion'))
        <div class="alert alert-success alert-dismissible fade show text-center" role="alert">
         <strong>{{session('confirmacion')}}</strong>
         <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
        </div>
        @endif

        @if ($errors -> any())
        @foreach($errors ->all () as $error)

        <div class="alert alert-danger alert-dismissible fade show text-center" role="alert">
         <strong>{{ $error }} </strong>
         <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
        </div>

        @endforeach
        @endif

<div class="mt-3 card mb-5" style="width: 80rem; margin-left: auto; margin-right: auto; border: none !important">
    <form method="POST" action="/guardarRegistro">
    @csrf 
    <div class="mb-5 mt-3">
        <label for="exampleInputEmail1" class="form-label mb-3 "style="margin-left: 20px; margin-right: 20px">ISBN</label>
    <input type="text" class="form-control mb-3" value="{{old('txtIsbn')}}" name="txtIsbn">
    <p class="text-danger fst-italic">{{$errors-> first('txtIsbn')}}</p>
    </div>
  <div class="mb-5">
    <label for="exampleInputEmail1" class="form-label mb-3 "style= " margin-left: 20px; margin-right: 20px">Title</label>
    <input type="text" class="form-control mb-3" value="{{old('txtTitulo')}}" name="txtTitulo">
    <p class="text-danger fst-italic">{{$errors-> first('txtTitulo')}}</p>
  </div>
  <div class="mb-5">
    <label for="exampleInputEmail1" class="form-label mb-3 "style= " margin-left: 20px; margin-right: 20px">Author</label>
    <input type="text" class="form-control mb-3" value="{{old('txtAutor')}}" name="txtAutor">
    <p class="text-danger fst-italic">{{$errors-> first('txtAutor')}}</p>
  </div>
  <div class="mb-5">
    <label for="exampleInputEmail1" class="form-label mb-3 "style= " margin-left: 20px; margin-right: 20px">Pages</label>
    <input type="text" class="form-control mb-3" value="{{old('txtPaginas')}}" name="txtPaginas">
    <p class="text-danger fst-italic">{{$errors-> first('txtPaginas')}}</p>
  </div>
  <div class="mb-5">
    <label for="exampleInputEmail1" class="form-label mb-3 "style= " margin-left: 20px; margin-right: 20px">Editorial</label>
    <input type="text" class="form-control mb-3" value="{{old('txtEditorial')}}" name="txtEditorial">
    <p class="text-danger fst-italic">{{$errors-> first('txtEditorial')}}</p>
  </div>
  <div class="mb-5">
    <label for="exampleInputEmail1" class="form-label mb-3 "style= " margin-left: 20px; margin-right: 20px">E-mail Editorial</label>
    <input type="text" class="form-control mb-3" value="{{old('txtEmail')}}"name="txtEmail">
    <p class="text-danger fst-italic">{{$errors-> first('txtEmail')}}</p>
  </div>
  
    <div class="d-grid gap-2">
  <button type="submit" class="btn btn-dark" type="button"">Submit</button>
    </div>
    </form> 
</div>

@endsection



    