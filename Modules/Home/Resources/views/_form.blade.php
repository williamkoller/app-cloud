@extends('home::layouts.master')
@section('content')
    <title>Form Home</title>
    <div class="container-fluid">
        <h1>Form Home</h1>
        <form class="form-group" method="POST"
            @if($home->id > 0)
                action="{{ route('admin.home.update', ['id' => $home->id]) }}"
            @else
                action="{{ route('admin.home.doCreate') }}"
            @endif
        >
            @csrf
            <label for="name">Name: </label>
            <input class="form-control" placeholder="Name" style="width: 20%; padding-right: auto; background-color: whitesmoke;" type="text" name="name" value="{{ $home->name }}">
            <br>
            <hr>
            <label for="title">Title: </label>
            <input class="form-control" placeholder="Title" style="width: 20%; padding-right: auto; background-color: whitesmoke;" type="text" name="title" value="{{ $home->title }}">
            <br>
            <hr>
            <label for="comment">Description: </label>
            <textarea class="form-control" id="comment" rows="2" typeof="text" name="description" style="color: black; width: 20%">{{ $home->description }}</textarea>
            <br>
            <hr>
            <div class="col-sm-4">
                <div class="form-group" style="padding-top: 05%; margin-right: 20%;">
                    @if($home->id > 0)
                        <button type="submit" class="btn btn-success m">Salvar</button>
                    @else
                        <button type="submit" class="btn btn-info mb-2" style="float: none; margin-left: auto;">Create new</button>
                    @endif
                </div>

            </div>
        </form>
    </div>
@stop
@section('scripts')

@stop
