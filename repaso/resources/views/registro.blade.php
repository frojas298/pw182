@extends("layouts.plantilla") <!--Extiende lo que hay en la carpeta layouts.plantilla la herencia  -->

@section("titulo","inicio")


@section("contenido") <!--Permite añadir contenido -->

<h1 class="display-1 text-center text-secondary mt-5 mb-4"> REGISTROS</h1>

<div class="mt-3 card mb-5" style="width: 80rem; margin-left: auto; margin-right: auto; border: none !important">
    <form method="post" action="/guardarRecuerdo">
    @csrf 
    <div class="mb-5 mt-3">
        <label for="exampleInputEmail1" class="form-label mb-3 "style="margin-left: 20px; margin-right: 20px">ISBN</label>
    <input type="text" class="form-control mb-3" name="txtIsbn">
    </div>
  <div class="mb-5">
    <label for="exampleInputEmail1" class="form-label mb-3 "style= " margin-left: 20px; margin-right: 20px">Titulo</label>
    <input type="text" class="form-control mb-3" name="txtTitulo">
  </div>
  <div class="mb-5">
    <label for="exampleInputEmail1" class="form-label mb-3 "style= " margin-left: 20px; margin-right: 20px">Autor</label>
    <input type="text" class="form-control mb-3" name="txtAutor">
  </div>
  <div class="mb-5">
    <label for="exampleInputEmail1" class="form-label mb-3 "style= " margin-left: 20px; margin-right: 20px">Páginas</label>
    <input type="text" class="form-control mb-3" name="txtPaginas">
  </div>
  <div class="mb-5">
    <label for="exampleInputEmail1" class="form-label mb-3 "style= " margin-left: 20px; margin-right: 20px">Editorial</label>
    <input type="text" class="form-control mb-3" name="txtEditorial">
  </div>
  <div class="mb-5">
    <label for="exampleInputEmail1" class="form-label mb-3 "style= " margin-left: 20px; margin-right: 20px">E-mail editorial</label>
    <input type="text" class="form-control mb-3" name="txtEmail">
  </div>
  
    <div class="d-grid gap-2">
  <button type="submit" class="btn btn-dark" type="button"">Submit</button>
    </div>
    </form> 
</div>

@endsection



    