@extends('layouts.app')

@section('content')
    <form action="{{ route('gallery.store') }}">
        <input type="text">
    </form>
@endsection
