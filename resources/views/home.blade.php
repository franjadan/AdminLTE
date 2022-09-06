@extends('adminlte::page')

@section('title', 'Inicio')

@section('plugins.Sweetalert2', true) <!-- Añadido plugin para usarlo en esta página -->

@section('content_header')
    <h1>Tablero</h1>
@stop

@section('content')
    <div class="card">
        <div class="card-header">
            <h1 class="card-title">Hola mundo</h1>
        </div>
        <div class="card-body">
            <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Laboriosam earum itaque aliquid quod nihil sequi soluta, cupiditate, sunt debitis cumque quo totam quis tempora quae fugit dolorum officia ab similique.</p>
        </div>
    </div>

    <div class="card">
        <div class="card-header">
            <h1 class="card-title">Hola mundo</h1>
        </div>
        <div class="card-body">
            <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Laboriosam earum itaque aliquid quod nihil sequi soluta, cupiditate, sunt debitis cumque quo totam quis tempora quae fugit dolorum officia ab similique.</p>
        </div>
    </div>

    <div class="card">
        <div class="card-header">
            <h1 class="card-title">Hola mundo</h1>
        </div>
        <div class="card-body">
            <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Laboriosam earum itaque aliquid quod nihil sequi soluta, cupiditate, sunt debitis cumque quo totam quis tempora quae fugit dolorum officia ab similique.</p>
        </div>
    </div>

    <div class="card">
        <div class="card-header">
            <h1 class="card-title">Hola mundo</h1>
        </div>
        <div class="card-body">
            <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Laboriosam earum itaque aliquid quod nihil sequi soluta, cupiditate, sunt debitis cumque quo totam quis tempora quae fugit dolorum officia ab similique.</p>
        </div>
    </div>

    <div class="card">
        <div class="card-header">
            <h1 class="card-title">Hola mundo</h1>
        </div>
        <div class="card-body">
            <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Laboriosam earum itaque aliquid quod nihil sequi soluta, cupiditate, sunt debitis cumque quo totam quis tempora quae fugit dolorum officia ab similique.</p>
        </div>
    </div>

    <div class="card">
        <div class="card-header">
            <h1 class="card-title">Hola mundo</h1>
        </div>
        <div class="card-body">
            <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Laboriosam earum itaque aliquid quod nihil sequi soluta, cupiditate, sunt debitis cumque quo totam quis tempora quae fugit dolorum officia ab similique.</p>
        </div>
    </div>
@stop

@section('css')
    <link rel="stylesheet" href="/css/admin_custom.css">
@stop

@section('js')
    <script>
        //Añadir código necesario para utilizar el plugin
        Swal.fire(
        'Good job!',
        'You clicked the button!',
        'success'
        );
    </script>
@stop
