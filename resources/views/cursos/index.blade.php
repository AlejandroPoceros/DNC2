<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Crear Curso') }}
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
                            <td class="border px-4 py-2">curso id</td>
                            <td class="border px-4 py-2">clave del curso</td>
                            <td class="border px-4 py-2">fecha de inicio</td>
                            <td class="border px-4 py-2">fecha de fin</td>
                            <td class="border px-4 py-2">nombre del curso</td>
                            <td class="border px-4 py-2">descripción</td>
                            <td class="border px-4 py-2">clave del enfoque</td>
                            <td class="border px-4 py-2">clave del tipo de curso</td>
                            <td class="border px-4 py-2">objetivo</td>
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
                                    <td  class="border px-4 py-2">{{$curso->CursoId}}</td>
                                    <td  class="border px-4 py-2">{{$curso->CursoSiglas}}</td>
                                    <td  class="border px-4 py-2">{{$curso->CursoVigenciaIni}}</td>
                                    <td  class="border px-4 py-2">{{$curso->CursoVigenciaFin}}</td>
                                    <td  class="border px-4 py-2">{{$curso->CursoNombre}}</td>
                                    <td  class="border px-4 py-2">{{$curso->CursoDescr}}</td>
                                    <td  class="border px-4 py-2">{{$curso->TipoEnfoqueId}}</td>
                                    <td  class="border px-4 py-2">{{$curso->TipoCursoId}}</td>
                                    <td  class="border px-4 py-2">{{$curso->CursoObjetivo}}</td>
                                    <td class="border px-4 py-2 flex space-x-2">
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
                    

                </div>
                
            </div>
        </div>
    </div>
</x-app-layout>
