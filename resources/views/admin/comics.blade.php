@extends('admin.series')
@section('list-title', 'Your Comics')
@section('list-buttons')
    <a href="{{ route('admin.comics.create') }}" class="btn btn-success ml-3">Add comic</a>
@endsection
@section('list')
    <div class="list">
        @foreach($comics as $comic)
            <div class="item">
                <h5 class="mb-0"><a href="{{ route('admin.comics.show', $comic->slug) }}">{{ $comic->name }}</a></h5>
                <span class="small">
                    <a href="{{ route('admin.comics.chapters.create', $comic->slug) }}">Add chapter</a>
                    @if(Auth::user()->hasPermission("manager"))
                        <span class="spacer">|</span>
                        <a href="{{ route('admin.comics.destroy', $comic->id) }}"
                           onclick="event.preventDefault(); document.getElementById('destroy-comic-form-{{ $comic->id }}').submit();">
                            Delete comic</a>
                        <form id="destroy-comic-form-{{ $comic->id }}" action="{{ route('admin.comics.destroy', $comic->id) }}"
                            method="POST" class="d-none">
                            @csrf
                            @method('DELETE')
                        </form>
                    @endif
                    <span class="spacer">|</span><a href="#">Read</a>
                </span>
            </div>
        @endforeach
    </div>
@endsection