
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
                                        <button id="openModalButton" data-target="#modal" class="w-full rounded-full bg-gray-500 text-white px-4 py-2" data-registro-id="{{ $curso->CursoId }}">
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
   <!-- comienza modal -->
   
                    {{-- <div id="modal" class="  fixed top-0 left-0 w-full h-full flex justify-center items-center modal hidden">
                        <div class="modal-content bg-white p-8 rounded shadow-md">
                          <span class="close-button absolute top-2 right-2 cursor-pointer">&times;</span>
                          <p>Detalle</p>
<table>
    <thead>
        <tr>
        <td class="border px-4 py-2">Nombre del curso </td>
        <td class="border px-4 py-2">Descripción</td>
        <td class="border px-4 py-2">Clave del enfoque</td>
        <td class="border px-4 py-2">clave del tipo de curso</td>
        <td class="border px-4 py-2">Clave de la accion</td>
        <td class="border px-4 py-2">Objetivo</td>
        <td class="border px-4 py-2">Temario</td>
        <td class="border px-4 py-2">Comentarios</td> 
        <td class="border px-4 py-2">creado</td> 
        <td class="border px-4 py-2">ultima actualizacion</td> 
        </tr>
       
    </thead>
    <tr>
            <td  class="border px-4 py-2">{{$curso->CursoNombre}}</td>
            <td  class="border px-4 py-2">{{$curso->CursoDescr}}</td>
            <td  class="border px-4 py-2">{{$curso->TipoEnfoqueId}}</td>
            <td  class="border px-4 py-2">{{$curso->TipoCursoId}}</td>
            <td  class="border px-4 py-2">{{$curso->ClasifAcionId}}</td>
            <td  class="border px-4 py-2">{{$curso->CursoObjetivo}}</td>
            <td  class="border px-4 py-2">{{$curso->CursoTemario}}</td>
            <td  class="border px-4 py-2">{{$curso->CursoComentario}}</td>
            <td  class="border px-4 py-2">{{$curso->created_at}}</td>
            <td  class="border px-4 py-2">{{$curso->updated_at}}</td>
    </tr>
</table>

                        </div>
                      </div> --}}

                      <div id="modal" class="fixed top-0 left-0 w-full h-full flex justify-center items-center modal hidden">
                      <!--  <span class="close-button absolute top-2 right-2 cursor-pointer">&times;</span> -->

                        <!--
                          Background backdrop, show/hide based on modal state.
                      
                          Entering: "ease-out duration-300"
                            From: "opacity-0"
                            To: "opacity-100"
                          Leaving: "ease-in duration-200"
                            From: "opacity-100"
                            To: "opacity-0"      
                        -->
                        <div class="fixed inset-0 bg-gray-500 bg-opacity-75 transition-opacity"></div>
                      
                        <div class="fixed inset-0 z-10 overflow-y-auto">
                          <div class="flex min-h-full items-end justify-center p-4 text-center sm:items-center sm:p-0">
                            <!--
                              Modal panel, show/hide based on modal state.
                      
                              Entering: "ease-out duration-300"
                                From: "opacity-0 translate-y-4 sm:translate-y-0 sm:scale-95"
                                To: "opacity-100 translate-y-0 sm:scale-100"
                              Leaving: "ease-in duration-200"
                                From: "opacity-100 translate-y-0 sm:scale-100"
                                To: "opacity-0 translate-y-4 sm:translate-y-0 sm:scale-95"
                            -->
                            <div class="relative transform overflow-hidden rounded-lg bg-white text-left shadow-xl transition-all sm:my-8 sm:w-full sm:max-w-lg max-h-[80vh] overflow-y-auto">
                              <div class="bg-white px-4 pb-4 pt-5 sm:p-6 sm:pb-4">
                                <div class="sm:flex sm:items-start scrollbar-thin">
                                  <!-- boton cerrar -->
                                  <span class="close-button absolute top-2 right-2 cursor-pointer">&times;</span>
                                  <!-- SVG de eliminar-->
                                  {{-- <div class="mx-auto flex h-12 w-12 flex-shrink-0 items-center justify-center rounded-full bg-red-100 sm:mx-0 sm:h-10 sm:w-10">
                                    <svg class="h-6 w-6 text-red-600" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" aria-hidden="true">
                                      <path stroke-linecap="round" stroke-linejoin="round" d="M12 9v3.75m-9.303 3.376c-.866 1.5.217 3.374 1.948 3.374h14.71c1.73 0 2.813-1.874 1.948-3.374L13.949 3.378c-.866-1.5-3.032-1.5-3.898 0L2.697 16.126zM12 15.75h.007v.008H12v-.008z" />
                                    </svg>
                                  </div> --}}
                                  <div class="mt-3 text-center sm:ml-4 sm:mt-0 sm:text-left overflow-y-auto">
                                    <h3 class="text-base font-semibold leading-6 text-gray-900" id="modal-title" >DETALLE: {{$curso->CursoNombre}} </h3>
                                    <hr/><hr/>
                                    <div class="mt-2  overflow-y-auto" >
                                      <p class="text-sm text-gray-800"> <b style="font: italic">Descripción:</b> {{$curso->CursoDescr}} </p>
                 


            
                                  </div>
                                </div>
                              </div>
                              <div class="bg-gray-50 px-4 py-3 sm:flex sm:flex-row-reverse sm:px-6">
                                <button id="cerrarModal" type="button" class=" inline-flex w-full justify-center rounded-md bg-blue-600 px-3 py-2 text-sm font-semibold text-white shadow-sm hover:bg-red-500 sm:ml-3 sm:w-auto">Cerrar</button>
                                <button id="cerrarModal" type="button" class=" inline-flex w-full justify-center rounded-md bg-green-600 px-3 py-2 text-sm font-semibold text-white shadow-sm hover:bg-teal-300 sm:ml-3 sm:w-auto">Guardar</button>
                                {{-- <button type="button" class="mt-3 inline-flex w-full justify-center rounded-md bg-white px-3 py-2 text-sm font-semibold text-gray-900 shadow-sm ring-1 ring-inset ring-gray-300 hover:bg-gray-50 sm:mt-0 sm:w-auto">Cancel</button> --}}
                              </div>
                            </div>
                          </div>
                        </div>
                      </div>







                   <!-- termina  modal -->

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

        //script modal primero
    // openModalButton.addEventListener("click", () => {
    //   modal.classList.remove("hidden");
    // });
  
    closeModalButton.addEventListener("click", () => {
     modal.classList.add("hidden");
   });
  
   window.addEventListener("click", (event) => {
     if (event.target === modal) {
       modal.classList.add("hidden");
     }
   });

    //   //cerrarModal script
    // document.addEventListener('DOMContentLoaded', function () {
    //     const botonCerrar = document.getElementById('cerrarModal');
    //     const modal = botonCerrar.closest('.fixed');

    //     botonCerrar.addEventListener('click', function () {
          
    //       modal.classList.add("hidden");
    //     });
    // });
    
    document.addEventListener('DOMContentLoaded', function () {
        const botonAbrir = document.getElementById('openModalButton');
        const modal = document.querySelector(botonAbrir.getAttribute('data-target'));
        const botonCerrar = modal.querySelector('#cerrarModal');
        const fondoGris = modal.querySelector('.bg-gray-500');

        botonAbrir.addEventListener('click', function () {
            modal.classList.remove('hidden');
        });

        botonCerrar.addEventListener('click', function () {
            modal.classList.add('hidden');
        });

        fondoGris.addEventListener('click', function () {
            modal.classList.add('hidden');
        });
    });


    //termina cerrar modal

  </script>
  


                    @endsection

                </div>
                
            </div>
        </div>
    </div>
</x-app-layout>

