@extends('layouts.app')

@section('navegacion')
    @include('ui.administrar');
@endsection

@section('content')
    <h1 class="text-3xl text-center font-bold mt-10 text-teal-700 uppercase">Agregar Vacante</h1>

    <form method="POST" class="max-w-lg mx-auto my-10">
          
        <div class="mb-5 ">
            <label  class="block uppercase text-gray-700 text-sm font-bold mb-2 sm:mb-4" name="email">Titulo Vacantes</label>
            <input class="form-input text-black border-solid w-full bg-gray-300 py-2 @error('email') border-red-500 @enderror"/>
        </div>
        <div class="mb-5 ">
            <label  class="block uppercase text-gray-700 text-sm font-bold mb-2 sm:mb-4" name="email">Selecciona tipo Vacante</label>
            <select name="categorias" id="categorias" class="form-input text-black border-solid w-full bg-gray-300 py-2 rounded leading-tight focus:outline-none focus:text-teal-700 focus:bg-gray-300 focus:border-green-500 py3 ">
                <option disabled selected>Selecciona</option>
                @foreach($categorias as $categorias)
                      <option value="{{ $categorias->id }}">{{ $categorias->nombre }}</option>  
                @endforeach
            </select>
        </div>
        <div class="mb-5 ">
            <label  class="block uppercase text-gray-700 text-sm font-bold mb-2 sm:mb-4" name="email">Indique Experiencia</label>
            <select name="categorias" id="categorias" class="form-input text-black border-solid w-full bg-gray-300 py-2 rounded leading-tight focus:outline-none focus:text-teal-700 focus:bg-gray-300 focus:border-green-500 py3 ">
                <option disabled selected>Selecciona</option>
                @foreach($experiencias as $experiencias)
                      <option value="{{ $experiencias->id }}">{{ $experiencias->nombre }}</option>  
                @endforeach
            </select>
        </div>
        
        <Button href="{{route('vacantes.index')}}"  class="w-full text-white px-4 bg-teal-400 rounded text-sm uppercase font-bold py-3 hover:bg-green-300 }}">Enviar</Button>

    </form>



@endsection