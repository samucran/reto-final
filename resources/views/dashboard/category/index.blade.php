<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            <main>
                <div class="container py-4">
                    <h2>Pre asignaturas publicadas</h2>
                    <a href="{{ url('dashboard/category/create') }}" class="btn btn-primary btn-sm">Nueva pre asignatura</a>
                    <table class="table table-dark table-striaped">
                        <thead>
                            <tr>
                                <th>#</th>
                                <th>Nombre</th>
                                <th>Descripcion</th>
                                
                                <th>Editar</th>
                                <th>Eliminar</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach ($category as $category)
                            <tr>
                                <td>{{ $category->id }}</td>
                                <td>{{ $category->name }}</td>
                                <td>{{ $category->description }}</td>
                                
                                <td><a href="{{ ('category/'.$category->id.'/edit') }}" >Editar</a></td>
                                <td><a href="{{ ('category/'.$category->id.'/delete') }}" >Eliminar</a></td>
                                <td>
                                    <form action="{{ url('dashboard/category/'.$category->id) }}"method="category">
                                    @method("DELETE")
                                    @csrf
                                    <button class="bi bi-eraser-fill" type="submit"></button>
                                    </form>
            
                                </td>
                            </tr>
                                
                            @endforeach
                        </tbody>
                    </table>
            
            
                </div>
            </main>
            
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6 text-gray-900">
                    {{ __("Se muestran las pre asignaturas") }}
                </div>
            </div>
        </div>
    </div>
</x-app-layout>

