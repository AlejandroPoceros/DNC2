<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight py-3 ">
            {{ __('Empleado Registro Individual') }} </h2>
        
        <table class=" font-normal  text-gray-800 leading-tight py-2">
            <thead>
            <tr >
                <td >empleado</td>
                <td class="px-8">{{auth()->user()->name}}</td>
                
                
            </tr>
            <thead>
                <tbody >
            
                <tr>
                    <td><p>email   </p></td>
                    <td class="px-8">{{auth()->user()->id}}</td>
                </tr>
                <tr>
                    <td>puesto</td>
                    <td class="px-8">{{auth()->user()->id}}</td>
                </tr>
                <tr >
                    <td><p>departamento</p></td>
                    <td class="px-8">{{auth()->user()->id}}</td>
                </tr>
                    
                <tbody >
        </table>
             
        
        
             <a style="border-block-color: black" href="{{ route('dashboard') }}" class="btn btn-primary">
                <button class="  rounded-full bg-gray-500 text-white px-4 py-2">Regresar</button>
                </a>
        
       
    </x-slot>
    

    <div class="py-2" >
        
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            
            <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6 text-gray-900">
                    
                    <div class="hidden space-x-8 sm:-my-px sm:ml-10 sm:flex">
                        <x-nav-link :href="route('dashboard')" :active="request()->routeIs('dashboard')">
                            {{ __('Dashboard') }}
                        </x-nav-link>
                        <x-nav-link :href="route('dashboard')" :active="request()->routeIs('dashboard')">
                            {{ __('Dashboard') }}
                        </x-nav-link>
                        <x-nav-link :href="route('dashboard')" :active="request()->routeIs('dashboard')">
                            {{ __('Dashboard') }}
                        </x-nav-link>
                        
                    </div>

                </div>
                
            </div>
        </div>
    </div>
</x-app-layout>
