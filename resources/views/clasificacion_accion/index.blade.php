<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Clasificación de Acción') }}
        </br>
             
        </h2>
        <a style="border-block-color: black" href="{{ route('dashboard') }}" class="btn btn-primary">
            <button class="  rounded-full bg-gray-500 text-white px-4 py-2">Regresar</button>
            </a>    </x-slot>
    

    <div class="py-12" >
        
        
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            
            <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
                <div class="overflow-x-auto p-6 text-gray-900">
                    @section('css')
                    <link rel="stylesheet" href="https://cdn.datatables.net/1.13.6/css/jquery.dataTables.min.css">
                @endsection
                    <table id="clasifaccion" class="w-full border">
                        <thead>
                        <tr class="border">
                            <td class="border px-4 py-2">Nombre de la acción</td>
                            <td class="border px-4 py-2">Descripción</td>
                            <td class="border px-4 py-2">Comentario</td>
                            <td class="border px-4 py-2">Fecha de creacion</td>
                            <td class="border px-4 py-2">Ultima actualización</td>
                            <td class="border px-4 py-2">
                                <a href="{{ route('ClasifAccion.create') }}" dir="rlt" class="flex-1">
                                    <button class="w-full rounded-full bg-green-500 text-white px-4 py-2">Crear</button>
                                </a>
                            </td>
                        </tr>
                        <thead>
                            <tbody>
                            @foreach ($Clasificacion as $clasificacion)
                                 <tr>
                                    <td  class="border px-4 py-2">{{$clasificacion->ClasifAccionNombre}}</td>
                                    <td  class="border px-4 py-2">{{$clasificacion->ClasifAccionDescrip}}</td>
                                    <td  class="border px-4 py-2">{{$clasificacion->ClasifAccionComent}}</td>
                                    <td  class="border px-4 py-2">{{$clasificacion->created_at}}</td>
                                    <td  class="border px-4 py-2">{{$clasificacion->updated_at}}</td>
                                   
                                    <td class="border px-4 py-2 flex space-x-2">
                                        <a href="{{ route('ClasifAccion.edit', [$clasificacion->ClasifAccionId]) }}" dir="rlt" class="flex-1">
                                            <button class="w-full rounded-full bg-blue-500 text-white px-4 py-2">Editar</button>
                                        </a>

                                        <form action="{{route('ClasifAccion.destroy', [$clasificacion->ClasifAccionId])}}" method="POST" class="w-full max-w-sm">
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
                    

                </div>
                @section('js')
                          <script src="https://code.jquery.com/jquery-3.7.0.js"></script>
                          <script src="https://cdn.datatables.net/1.13.6/js/jquery.dataTables.min.js"></script>




                          <script>
                              new DataTable('#clasifaccion');
                          </script>
                          @endsection
            </div>
        </div>
    </div>
</x-app-layout>
