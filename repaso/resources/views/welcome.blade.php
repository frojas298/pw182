@extends("layouts.plantilla") <!--Extiende lo que hay en la carpeta layouts.plantilla la herencia  -->

@section("titulo","Inicio")


@section("contenido") <!--Permite añadir contenido -->
<div class="card mb-5" style="width: 90rem; margin-left: auto; margin-right: auto">
        <h1 class="display-5 text-center text-dark mt-5 mb-4" style="font-family:'Times New Roman';"> Why Hurricane Otis Caught Many By Surprise </h1>
    </div>
<div class="card" style="width: 60rem; margin-left: auto; margin-right: auto">
  <img src="https://static01.nyt.com/images/2023/10/25/autossell/_3x2/_3x2-jumbo.jpg" class="Noticia mb-2">
  <div class="card-body">
    <h5 class="card-text" style= "font-family: 'Times New Roman' " >One of the more remarkable things about Otis was that “this rapid intensification was completely unexpected,” Tomer Burg, an atmospheric scientist, posted on X Tuesday evening as it was starting to become clear how quickly the storm was strengthening.
The storm began to organize itself on Sunday morning, first as a tropical depression. At that time, forecast computer models didn’t show much to be concerned about. Forecasters with the U.S. National Hurricane Center said that morning that “some slight strengthening” was possible over the following days. By Sunday evening, the computer forecast models were still not showing much.</h5>
    <a href="https://www.nytimes.com/2023/10/25/world/americas/hurricane-otis-mexico-intensity-surprise.html?searchResultPosition=3" target="blank" class="btn btn-dark">Read More.</a>
  </div>
</div>
@endsection



    