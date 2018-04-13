@extends('layout')
@section('content')
        <div class="flex-center position-ref full-height">


            <div class="content">
                <div class="row">
                    <div class="col-md-6 offset-3">
                        <form action="/todos/create" method="post">
                            {{ csrf_field() }}
                            <input type="text" name="addEntry" placeholder="Create new todo">

                        </form>
                    </div>
                </div>
                @foreach($todos as $todo)
                <p>
                    {{$todo->todos}} <a href={{route('Todo.delete', ['id' => $todo->id])}}><button class="btn btn-danger">X</button> </a>
                    <a href={{route('todo.update', ['id' => $todo->id])}}><button class="btn btn-danger">Update</button> </a>
                </p>
                @endforeach
                
            </div>
        </div>


@endsection
