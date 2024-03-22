<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Archivos') }}
        </h2>
    </x-slot>
    


    <div class="py-5">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-xl sm:rounded-lg"> 
                    <div class="flex min-h-full flex-col justify-center px-6 py-5 lg:px-8">
                        <div class="sm:mx-auto sm:w-full sm:max-w-sm">
                            <img class="mx-auto h-20 w-auto" src="{{url('img/logo.png')}}" alt="Your Company">
                            <h3 class="mt-2 text-center text-xl font-bold leading-9 tracking-tight text-gray-700">Ingrese los archivos que enviara a la Direcccion de la Unidad Educativa Alemania</h3>
                        </div>

                        <div class="mt-2 sm:mx-auto sm:w-full sm:max-w-sm">  
                            <form class="space-y-6"  method="POST" action="{{route('file.update')}}" enctype="multipart/form-data">
                               @csrf
                                <div>
                                   <h5 class="text-gray-500">Documento</h5>
                                     <form class="max-w-sm mx-auto">
                                        <select name="description" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500">
                                          <option value="Info 1º Trimestre">Informe Trimestral</option>
                                          <option value="Centra 1º Trimestre">Centralizador Trimestral</option>
                                          <option value="Aprov. 1º Trimestre">Aprovechamiento Trimestral</option>
                                        </select>
                                      </form>
                                    <h5 class="text-gray-500">Archivo</h5>
                                    <div class="mt-2">
                                        <input name="files[]" multiple type="file" required class="block w-full rounded-md border-0 py-1.5 text-gray-900 shadow-sm ring-1 ring-inset ring-gray-300 placeholder:text-gray-400 focus:ring-2 focus:ring-inset focus:ring-indigo-600 sm:text-sm sm:leading-6">
                                    </div>
                                    <div class="mt-6">
                                        <button type="submit" class="flex w-full justify-center rounded-md bg-indigo-600 px-3 py-1.5 text-sm font-semibold leading-6 text-white shadow-sm hover:bg-indigo-500 focus-visible:outline focus-visible:outline-2 focus-visible:outline-offset-2 focus-visible:outline-indigo-600">Enviar Archivo</button>
                                    </div>
                                </div>
                            </form>
                        </div>
                    </div>
            </div>


            <div class="bg-gray-200 bg-opacity-25 overflow-hidden shadow-xl sm:rounded-lg">
                <div class="flex min-h-full flex-col justify-center px-6 py-5 lg:px-8">
                    <div class="flex items-center">
                        <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" class="w-6 h-6 stroke-gray-400">
                            <path stroke-linecap="round" stroke-linejoin="round" d="M12 6.042A8.967 8.967 0 006 3.75c-1.052 0-2.062.18-3 .512v14.25A8.987 8.987 0 016 18c2.305 0 4.408.867 6 2.292m0-14.25a8.966 8.966 0 016-2.292c1.052 0 2.062.18 3 .512v14.25A8.987 8.987 0 0018 18a8.967 8.967 0 00-6 2.292m0-14.25v14.25" />
                        </svg>
                        <h2 class="ms-3 text-xl font-semibold text-gray-900">
                            Historial de documentacion enviada
                        </h2>
                    </div>
            
                    <p class="text-gray-500 text-sm leading-relaxed">
                        En este espacio se muestran los diferentes documentos enviados a Direccion de la Unidad Educativa Alemania
                    </p>
            
                    <table class="table table-bordered text-center">
                       <thead>
                        <tr>
                            <th>id</th>
                            <th>Descripcion</th>
                            <th>Fecha</th>
                            <th>ver</th>
                            <th>eliminar</th>
                        </tr>
                       </thead>
                        <tbody class="text-gray-500 text-sm">
                        @foreach ($files as $file)
                        <tr>
                            <td>{{$file->id}}</td>
                            <td>{{$file->description}}</td>
                            <td>{{$file->created_at}}</td>
                            <td>
                                <a href="storage/{{Auth::id()}}/{{$file->name}}" class="btn btn-sm btm-outline-secondary"> ver</a>
                            </td>
                            <td>
                                <a href="" class="btn btn-sm btm-outline-danger"> eliminar</a>
                            </td>
                        </tr>
                        @endforeach
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
</x-app-layout>
