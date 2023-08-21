
<x-app-layout>
    

    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight ">
            {{ __('Cursos') }}
     
             
        </h2>
        <a style="border-block-color: black" href="{{ route('dashboard') }}" class="btn btn-primary">
            <button class="  rounded-full bg-gray-500 text-white px-4 py-2">Regresar</button>
            </a>    </x-slot>
    

    <div class="py-1" >
        
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            
            <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6 text-gray-900">
                    @section('css')
    <link rel="stylesheet" href="https://cdn.datatables.net/1.13.6/css/jquery.dataTables.min.css">
   
    @endsection
                    <table id="cursos" class="border " >
                        <thead>
                        <tr class="border">
                            <td class="border px-4 py-2">Nombre del curso</td>
                            <td class="border px-4 py-2">Clave del enfoque</td>
                            <td class="border px-4 py-2">Clave del tipo de curso</td>
                            <td class="border px-4 py-2">Fecha de creación</td>
                            <td class="border px-4 py-2">Ultima Actualización</td>
                            <td class="border px-4 py-2">
                                <a href="{{ route('Cursos.create') }}" dir="rlt" class="flex-1">
                                    <button class="w-full rounded-full bg-green-500 text-white px-4 py-2">Crear</button>
                                </a>
                            </td>
                        </tr>
                        <thead>
                            <tbody>
                            @foreach ($cursos as $curso)
                                 <tr>
                                    <td  class="border px-4 py-2">{{$curso->CursoNombre}}</td>
                                    <td  class="border px-4 py-2">{{$curso->TipoEnfoqueId}}</td>
                                    <td  class="border px-4 py-2">{{$curso->TipoCursoId}}</td>
                                    <td  class="border px-4 py-2">{{$curso->created_at}}</td>
                                    <td  class="border px-4 py-2">{{$curso->updated_at}}</td>
                                    <td class="border px-4 py-2 flex space-x-2">
                                        {{-- boton detalle --}}
                                        <button id="openModalButton" class="w-full rounded-full bg-gray-500 text-white px-4 py-2">
                                            Detalle
                                          </button>
                                          

                                       {{--boton detalle --}}

                                        <a href="{{ route('Cursos.edit', [$curso->CursoId]) }}" dir="rlt" class="flex-1">
                                            <button class="w-full rounded-full bg-blue-500 text-white px-4 py-2">Editar</button>
                                        </a>

                                        <form action="{{route('Cursos.destroy', [$curso->CursoId])}}" method="POST" class="w-full max-w-sm">
                                            @csrf
                                            @method("DELETE")
                                          {{-- <a href="{{ route('Cursos.destroy', [$curso->CursoId]) }}" dir="rlt" class="flex-1"> --}}
                                            <button class="w-full rounded-full bg-red-500 text-white px-4 py-2">Eliminar</button>
                                        {{-- </a>    --}}
                                        </form>
                                       
                                              </td>
                                 </tr>
                            @endforeach
                     
                        <tbody>
                    </table>

                    <div id="modal" class="  fixed top-0 left-0 w-full h-full flex justify-center items-center modal hidden">
                        <div class="modal-content bg-white p-8 rounded shadow-md">
                          <span class="close-button absolute top-2 right-2 cursor-pointer">&times;</span>
                          <p>Detalle</p>
                        </div>
                      </div>


                    @section('js')
                      
                       <script src="https://code.jquery.com/jquery-3.7.0.js"></script>
                       <script src="https://cdn.datatables.net/1.13.6/js/jquery.dataTables.min.js"></script>
                       
                       
                       
                       
                       <script>
                        new DataTable('#cursos');
                       </script>

<script>
    const openModalButton = document.getElementById("openModalButton");
    const closeModalButton = document.querySelector(".close-button");
    const modal = document.getElementById("modal");
  
    openModalButton.addEventListener("click", () => {
      modal.classList.remove("hidden");
    });
  
    closeModalButton.addEventListener("click", () => {
      modal.classList.add("hidden");
    });
  
    window.addEventListener("click", (event) => {
      if (event.target === modal) {
        modal.classList.add("hidden");
      }
    });
  </script>
  </body>
  </html>


                    @endsection

                </div>
                
            </div>
        </div>
    </div>
</x-app-layout>
