<x-app-layout>
  <x-slot name="header">
      <h2 class="font-semibold text-xl text-gray-800 leading-tight">
          {{ __('Crear tipo de  Enfoque') }}
      </br>
           
      </h2>
      <a style="border-block-color: black" href="{{ route('dashboard') }}" class="btn btn-primary">Regresar</a>
  </x-slot>
  

  <div class="py-12" >
      
      <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
          
          <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg flex justify-center items-center min-h-screen">
              <div class="p-6 text-gray-900">

                  {{-- <?php
                                          // print_r($cursos);


                  ?>
                   --}}

                   <form   action="{{route('TipoEnfoqueCurso.store')}}" method="POST" class="w-full max-w-sm">

                   
                    @csrf
                     
                      <div class="md:flex md:items-center mb-6">
                        <div class="md:w-1/3">
                          <label class="block text-gray-500 font-bold md:text-right mb-1 md:mb-0 pr-4" for="inline-full-name">
                            Nombre del tipo de enfoque
                          </label>
                        </div>
                        <div class="md:w-2/3">
                          <input class="bg-gray-200 appearance-none border-2 border-gray-200 rounded w-full py-2 px-4 text-gray-700 leading-tight focus:outline-none focus:bg-white focus:border-blue-500" id="TpEnfoqueNombre" name="TpEnfoqueNombre" type="text" >
                        </div>
                      </div>
                      
                      <div class="md:flex md:items-center mb-6">
                        <div class="md:w-1/3">
                          <label class="block text-gray-500 font-bold md:text-right mb-1 md:mb-0 pr-4" for="inline-full-name">
                            Comentarios
                          </label>
                        </div>
                        <div class="md:w-2/3">
                          <input class="bg-gray-200 appearance-none border-2 border-gray-200 rounded w-full py-2 px-4 text-gray-700 leading-tight focus:outline-none focus:bg-white focus:border-blue-500" id="TpEnfoqueComen" name="TpEnfoqueComen"type="text"  >
                        </div>
                      </div>
                                                                   
                      <div class="md:flex md:items-center">
                        <div class="md:w-1/3"></div>
                        <div class="md:w-2/3">
                          <button class="shadow bg-blue-500 hover:bg-green-400 focus:shadow-outline focus:outline-none text-white font-bold py-2 px-4 rounded" type="submit">
                            Guardar
                          </button>
                        </div>
                      </div>
                    </form>

              </div>
              
          </div>
      </div>
  </div>
</x-app-layout>
