<div>
    <div class="card">
        <div class="card-header">
            <div class="form control">
                <input wire:keydown='limpiar_page' wire:model='searh' class="form-control w-100" placeholder="EScriba un nombre">
            </div>
        </div>
        <div class="card-body">
            <table class="table table-striped">
                <thead>
                    <tr>
                        <th>Id</th>
                        <th>Nombre</th>
                        <th>Email</th>
                        <th></th>
                    </tr>
                </thead>
                <tbody>
                    @foreach ($users as $user)
                        <tr>
                            <th>{{$user->id}}</th>
                            <th>{{$user->name}}</th>
                            <th>{{$user->email}}</th>
                            <th width='10px'>
                                <a class="btn btn-primary" href="{{route('admin.users.edit', $user)}}">Editar</a>
                            </th>
                        </tr>
                    @endforeach

                </tbody>
            </table>
        </div>
        <div class="card-footer">
            {{$users->links()}}
        </div>
    </div>
</div>