@extends('layouts.app')

@section('title', $performance->name)
@section('description', $performance->description)

@section('content')
    datum: {{ $performance->date }}<br>
    začátek: {!! $performance->beginning !!}<br>
    konec: {!! $performance->end !!}<br>
    cena: {!! $performance->price !!}<br>

@endsection