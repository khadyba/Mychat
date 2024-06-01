@extends('layouts/navbar')

@section('content')
<div class="container mt-4">
        <div class="row justify-content-center">
            <div class="col-md-8">
                <div class="card">
                    <div class="card-header">Bienvenue sur MyChat</div>
                    <div class="card-body">
                        <p>MyChat est une application de messagerie instantanée inspirée de WhatsApp.</p>
                        <p>Pour commencer, veuillez vous connecter ou créer un compte :</p>
                        <div class="text-center">
                            <a href="{{ route('login') }}" class="btn btn-primary mr-3">Connexion</a>
                            <a href="{{ route('register') }}" class="btn btn-secondary">Inscription</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
