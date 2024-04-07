@extends('layouts.app')
@section('title')
    Create Memory
@endsection
@section('scripts')
    <script defer src="{{ asset('assets/pages/memories/create/crear.js') }}"></script>
    <script src="{{ asset('assets/tinymce/js/tinymce/tinymce.min.js') }}" referrerpolicy="origin"></script>
@endsection
@section('content')
    <div>
        <h2>Make a Memory</h2>
    </div>
    <form method="post">
        <textarea id="mytextarea" placeholder="Write your memory"></textarea>
        <input type="submit" value="Save" class="w-full my-5 p-3 bg-amber-400 hover:cursor-pointer rounded-lg hover:bg-amber-500">
    </form>
@endsection
