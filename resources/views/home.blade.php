@extends('layout.app')

@section('content')
<div class="content-wrapper">
    <div class="content-header">
        <div class="container">
            <div class="row mb-2">
                <div class="col-sm-6">
                    
                </div>
            </div>
        </div>
    </div>

    <section class="content">
        <div class="container">
            <div class="row justify-content-center align-items-center">
                <div class="col-md-8">
                    <div class="card">
                        <div class="card-body">
                            <h3 class="text-center mb-4">Bienvenido al Panel de Control</h3>

                            <div class="text-center">
                                <i class="fas fa-5x fa-user-circle"></i>
                            </div>

                            <p class="text-center mt-4">
                                ¡Felicitaciones! Has iniciado sesión en el sistema.
                            </p>

                            @if (session('status'))
                                <div class="alert alert-success mt-4" role="alert">
                                    {{ session('status') }}
                                </div>
                            @endif
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
</div>
@endsection


