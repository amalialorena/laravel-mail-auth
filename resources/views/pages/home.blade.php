@extends('layouts.main-layout')
@section('content')
    hello from home!
    <videogames-component user="{{Auth::check()}}"></videogames-component>
@endsection