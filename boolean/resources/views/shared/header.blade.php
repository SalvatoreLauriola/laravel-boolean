<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Laravel Boolean</title>
    <link rel="stylesheet" href="{{ asset('css/app.css') }}">
</head>
<body>

    
    
    <header class="main-header">
        <nav class="navbar">
            <a href="{{ route('static-pages.home') }}" class="navbar-brand">Boolean</a>
            <ul>
                {{-- Metodo request rende attivo il menu cliccato --}}
                <li><a @if (Request::route()->getName() == 'static-pages.home') class="active" @endif
                href="{{ route('static-pages.home') }}">Home</a></li>
                <li><a href="#">Corso</a></li>
                
                <li><a @if (Request::route()->getName() == 'student,index') class="active" @endif
                href="{{ route('student.index') }}">Dopo il corso</a></li>
                <li><a href="#">Lezione gratuita</a></li>
                <li><a href="#">Candidature</a></li>
            </ul>
        </nav>
    </header>