{{--@extends('layouts.app')--}}
{{--@section('title','Home')--}}
{{--@section('meta-description', 'Home meta description')--}}
{{--@section('content')--}}
{{--<h1>Inicio</h1>--}}
{{--@endsection--}}
{{--@component('components.layouts')--}}
<x-layouts.app
    title="Home"
    meta-description="Home meta description" >
    {{--<x-slot name="title">--}}
    {{-- Home--}}
    {{--</x-slot>--}}
    {{--<x-slot>--}}

    <h1 class="my-4 font-serif text-3xl text-center text-sky-600 dark:text-sky-500">
        Home
    </h1>
    @auth
    {{--</x-slot>--}}
        <div class="text-red-500">
            Authenticated User: {{ Auth::user()->name }}
        </div>
    @endauth
</x-layouts.app>
{{--@endcomponent--}}
