@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">
                    Tableau de bord
                    <a href="{{ route('logout') }}" class="float-right">Déconnexion</a>
                </div>

                <div class="card-body">
                    @if (session('status'))
                        <div class="alert alert-success" role="alert">
                            {{ session('status') }}
                        </div>
                    @endif

                    Vous êtes connecté à votre tableau de bord.
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
