@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="form-group my-3">
            <input type="text" class="form-control" name="todo" id="todo" aria-describedby="todoHelpText"
                   placeholder="Enter a task. e.g: Water the plant">
            <small id="todoHelpText" class="form-text text-muted"></small>
        </div>
        <h4 class="mt-5">My To-Dos</h4>
        <ul class="list-group">
            <li class="list-group-item d-flex py-2">
                <div class="form-check">
                    <input type="checkbox" class="form-check-input" id="exampleCheck1">
                    <label class="form-check-label text-decoration-strike" for="exampleCheck1">Stay at home</label>
                </div>
                <button type="button" class="btn btn-link btn-sm py-0">
                    <i class="fa fa-trash"></i>
                </button>
            </li>

            <li class="list-group-item d-flex py-2">
                <div class="form-check">
                    <input type="checkbox" class="form-check-input" id="exampleCheck2">
                    <label class="form-check-label" for="exampleCheck2">Play with kids</label>
                </div>
                <button type="button" class="btn btn-link btn-sm py-0">
                    <i class="fa fa-trash"></i>
                </button>
            </li>
        </ul>
    </div>
@endsection
