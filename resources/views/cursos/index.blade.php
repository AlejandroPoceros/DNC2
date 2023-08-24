<x-app-layout>


  <x-slot name="header">
      <h2 class="font-semibold text-xl text-gray-800 leading-tight ">
          {{ __('Cursos') }}


      </h2>
      <a style="border-block-color: black" href="{{ route('dashboard') }}" class="btn btn-primary">
          <button class="  rounded-full bg-gray-500 text-white px-4 py-2">Regresar</button>
      </a>
  </x-slot>


  <div class="py-1">

      <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">

          <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg mx-auto">
              <div class=" overflow-x-auto p-6 text-gray-900">
                  @section('css')
                      <link rel="stylesheet" href="https://cdn.datatables.net/1.13.6/css/jquery.dataTables.min.css">
                  @endsection
                  <table id="cursos" class="overflow-x-auto w-full ">
                      <thead>
                          <tr class="border">
                              <td class="border px-4 py-2">Nombre del curso</td>
                              <td class="border px-4 py-2">Nombre del enfoque</td>
                              <td class="border px-4 py-2">Nombre del tipo de Curso</td>
                              <td class="border px-4 py-2">Nombre de la accion</td>
                              <td class="border px-4 py-2">Fecha de creación</td>
                              <td class="border px-4 py-2">Ultima Actualización</td>
                              <td class="border px-4 py-2">
                                  <a href="{{ route('Cursos.create') }}" dir="rlt" class="flex-1">
                                      <button
                                          class="w-full rounded-full bg-green-500 text-white px-4 py-2">Crear</button>
                                  </a>
                              </td>
                          </tr>
                          <thead>
                          <tbody>
                              @foreach ($cursos as $curso)
                              {{-- @foreach($enfoques as $enfoque)
                              @foreach($tipocursos as $tipocurso)
                              @foreach($clasificaciones as $clasificacion) --}}
                                  <tr>
                                      <td class="border px-4 py-2">{{ $curso->CursoNombre }}</td>
                                      <td class="border px-4 py-2">{{ $curso->tipoenfoquenombre}}</td>
                                      <td class="border px-4 py-2">{{ $curso->tipocursonombre }}</td>
                                      <td class="border px-4 py-2">{{ $curso->clasifaccionnombre }}</td>
                                      <td class="border px-4 py-2">{{ $curso->created_at }}</td>
                                      <td class="border px-4 py-2">{{ $curso->updated_at }}</td>
                                      <td class="border px-4 py-2 flex space-x-2">
                                          {{-- boton detalle --}}

                                          <button id="openModalButton" data-target="#modal"
                                              class="w-full rounded-full bg-gray-500 text-white px-4 py-2"
                                              data-curso-id="{{ $curso->CursoId}}" data-curso-dec="{{ $curso->CursoDescr}}"
                                              curso-nombre="{{$curso->CursoNombre}}" curso-objetivo="{{$curso->CursoObjetivo}}"
                                              curso-temario="{{$curso->CursoTemario}}" curso-comentarios="{{$curso->CursoComentario}}"
                                              curso-actualizacion="{{$curso->updated_at}}" curso-creacion="{{$curso->created_at}}"
                                               >
                                              Detalle
                                          </button>

                                          {{-- boton detalle --}}

                                          <a href="{{ route('Cursos.edit', [$curso->CursoId]) }}" dir="rlt"
                                              class="flex-1">
                                              <button
                                                  class="w-full rounded-full bg-blue-500 text-white px-4 py-2">Editar</button>
                                          </a>

                                          <form action="{{ route('Cursos.destroy', [$curso->CursoId]) }}"
                                              method="POST" class="w-full max-w-sm">
                                              @csrf
                                              @method('DELETE')
                                              {{-- <a href="{{ route('Cursos.destroy', [$curso->CursoId]) }}" dir="rlt" class="flex-1"> --}}
                                              <button
                                                  class="w-full rounded-full bg-red-500 text-white px-4 py-2">Eliminar</button>
                                              {{-- </a>    --}}
                                          </form>

                                      </td>
                                  </tr>
                              @endforeach
                              

                      <tbody>
                  </table>
                  <!-- comienza modal -->

                

                  <div id="modal"
                      class="fixed top-0 left-0 w-full h-full flex justify-center items-center modal hidden">
                    
                      <div class="fixed inset-0 bg-gray-500 bg-opacity-75 transition-opacity"></div>

                      <div class="fixed inset-0 z-10 overflow-y-auto">
                          <div
                              class="flex min-h-full items-end justify-center p-4 text-center sm:items-center sm:p-0">
                             
                              <div
                                  class="relative transform overflow-hidden rounded-lg bg-white text-left shadow-xl transition-all sm:my-8 sm:w-full sm:max-w-lg max-h-[80vh] overflow-y-auto">
                                  <div class="bg-white px-4 pb-4 pt-5 sm:p-6 sm:pb-4">
                                      <div class="sm:flex sm:items-start scrollbar-thin">
                                          <!-- boton cerrar -->
                                          <span
                                              class="close-button absolute top-2 right-2 cursor-pointer">&times;</span>
                                         
                                          <div class="mt-3 text-center sm:ml-4 sm:mt-0 sm:text-left overflow-y-auto">
                                              <h3 class="text-base font-semibold leading-6 text-gray-900"
                                                  id="modal-title">DETALLE:  </h3>
                                              <hr />
                                              <hr />
                                              <div class="mt-2  overflow-y-auto">
                                                  <p class="text-sm text-gray-800"> <b
                                                          style="font: italic">Descripción: </b>
                                                     
                                                      <h1  id="modal-content"></h1>



                                              </div>
                                          </div>
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
                              document.addEventListener('DOMContentLoaded', function() {
                                  const openModalButtons = document.querySelectorAll('#openModalButton');
                                  const modal = document.querySelector('#modal');
                                  const closeButton = modal.querySelector('.close-button');

                                  openModalButtons.forEach(button => {
                                      button.addEventListener('click', function() {
                                          var cursoId = button.getAttribute('data-curso-id');
                                          var cursoNombre = button.getAttribute('curso-nombre');
                                          var descripcion = button.getAttribute('data-curso-dec'); 
                                          var objetivo = button.getAttribute('curso-objetivo'); 
                                          var temario = button.getAttribute('curso-temario'); 
                                          var comentarios = button.getAttribute('curso-comentarios'); 
                                          var creacion = button.getAttribute('curso-creacion'); 
                                          var actualizacion = button.getAttribute('curso-actualizacion'); 
                                         
                                          
                                          const modalTitle = modal.querySelector('#modal-title');
                                          const modalContent = modal.querySelector('#modal-content');
                                          modalTitle.textContent = 'DETALLE: ' + cursoNombre;
                                          modalContent.innerHTML = `
                                            <p>${descripcion}</p>
                                            
                                            <p class="text-sm text-gray-800"><b style="font: italic">Objetivo:</b></p>
                                            <p>${objetivo}</p>
                                            <p class="text-sm text-gray-800"><b style="font: italic">Temario:</b></p>
                                            <p>${temario}</p>
                                            <p class="text-sm text-gray-800"><b style="font: italic">Comentarios:</b></p>
                                            <p>${comentarios}</p>
                                            <p class="text-sm text-gray-800"><b style="font: italic">Fecha de creación:</b></p>
                                            <p>${creacion}</p>
                                            <p class="text-sm text-gray-800"><b style="font: italic">Ultima actualización:</b></p>
                                            <p>${actualizacion}</p>
                                            

                                            `;

    
                                          
                                        
                                          // Update other modal content elements with cursoDetails...

                                          // Show the modal
                                          modal.classList.remove('hidden');
                                      });
                                  });

                                  closeButton.addEventListener('click', function() {
                                      modal.classList.add('hidden');
                                  });

                                  window.addEventListener('click', (event) => {
                                      if (event.target === modal) {
                                          modal.classList.add('hidden');
                                      }
                                  });
                              });
                          </script>
                      @endsection

                  </div>

              </div>
          </div>
      </div>
</x-app-layout>