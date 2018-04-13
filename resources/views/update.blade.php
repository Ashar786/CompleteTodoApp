@extends('layout')
@section('content')
    <div class="flex-center position-ref full-height">


        <div class="content">
            <div class="row">
                <div class="col-md-6 offset-3">
                    <form action="/todos/save/{{$todos->id}}" method="post">
                        {{ csrf_field() }}
                        <input type="text" name="updateEntry" placeholder=  {{$todos->todos}}>

                    </form>
                </div>
            </div>


        </div>
    </div>


@endsection
