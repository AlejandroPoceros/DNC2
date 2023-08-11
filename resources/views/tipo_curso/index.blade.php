<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Tipo de curso') }}
        </br>
             
        </h2>
        <a style="border-block-color: black" href="{{ route('dashboard') }}" class="btn btn-primary">Regresar</a>
    </x-slot>
    

    <div class="py-12" >
        
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            
            <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6 text-gray-900">
                    <table class="border">
                        <thead>
                        <tr class="border">
                            <td class="border px-4 py-2">ID del Tipo de curso </td>
                            <td class="border px-4 py-2">clave de Tipo de Cursso</td>
                            <td class="border px-4 py-2">Nombre del curso</td>
                            <td class="border px-4 py-2">Descripción</td>
                            <td class="border px-4 py-2">Comentarios</td>
                            <td class="border px-4 py-2">fecha de creacion</td>
                            <td class="border px-4 py-2">
                                <a href="{{ route('TipoCurso.create') }}" dir="rlt" class="flex-1">
                                    <button class="w-full rounded-full bg-green-500 text-white px-4 py-2">Crear</button>
                                </a>
                            </td>
                        </tr>
                        <thead>
                            <tbody>
                            @foreach ($tpcursos as $tpcurso)
                                 <tr>
                                    <td  class="border px-4 py-2">{{$tpcurso->TpCursoId}}</td>
                                    <td  class="border px-4 py-2">{{$tpcurso->TpCursoSiglas}}</td>
                                    <td  class="border px-4 py-2">{{$tpcurso->TpCursoNombre}}</td>
                                    <td  class="border px-4 py-2">{{$tpcurso->TpCursoDesc}}</td>
                                    <td  class="border px-4 py-2">{{$tpcurso->TpCursoComenc}}</td>
                                    <td  class="border px-4 py-2">{{$tpcurso->created_at}}</td>
                                   
                                    <td class="border px-4 py-2 flex space-x-2">
                                        <a href="{{ route('TipoCurso.edit', [$tpcurso->TpCursoId]) }}" dir="rlt" class="flex-1">
                                            <button class="w-full rounded-full bg-blue-500 text-white px-4 py-2">Editar</button>
                                        </a>
 
                                        <form action="{{route('TipoCurso.destroy', [$tpcurso->TpCursoId])}}" method="POST" class="w-full max-w-sm">
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
                
            </div>
        </div>
    </div>
</x-app-layout>
