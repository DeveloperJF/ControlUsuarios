@extends('layouts.app')

@section('content')
    <section class="section">
        <div class="section-header">
            <h3 class="page__heading">Inicio</h3>
        </div>
        <div class="section-body">
            <div class="row">

                <div class="col-sm-6 mb-3 mb-sm-0">
                    <div class="card bg-c-blue order-card">
                        <div class="card-body">
                            <h5 class="card-title">Usuarios</h5>
                            @php
                            use App\Models\User;
                            $cant_usuarios = User::count();
                            @endphp
                            <h2 class="text-right"><i class="fa fa-users f-left"></i><span>{{$cant_usuarios}}</span></h2>
                            <p class="card-text"><a href="/usuarios" class="text-white">Ver más</a></p>
                        </div>
                    </div>
                </div>

                <div class="col-sm-6">
                    <div class="card bg-c-green order-card">
                        <div class="card-body">
                            <h5 class="card-title">Roles</h5>
                            @php
                            use Spatie\Permission\Models\Role;
                            $cant_roles = Role::count();
                            @endphp
                            <h2 class="text-right"><i class="fa fa-user-lock f-left"></i><span>{{$cant_roles}}</span></h2>
                            <p class="card-text"><a href="/roles" class="text-white">Ver más</a></p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection
