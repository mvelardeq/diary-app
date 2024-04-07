@extends('layouts.app')
@section('title')
    Memories r
@endsection
@section('content')
    <div>
        <h2>Memories</h2>
        <p>{{ auth()->user()->username }}</p>

    </div>
@endsection
