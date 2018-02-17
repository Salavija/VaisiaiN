@extends('layouts.default')
@section('content')

<div class="container" style="text-align: center;">
    @if ($errors->any())
        <div class="alert alert-danger">
            <ul>
                @foreach ($errors->all() as $error)
                    <li>{{ $error }}</li>
                @endforeach
            </ul>
        </div>
    @endif
    
    <form action="{{ route('order.post') }}" method="POST">
        {{ csrf_field() }}

        <select class="form-control" name="product"> 
            @foreach ($products as $product)
                <option value="{{ $product->id }}"> {{ $product->title }} </option>
            @endforeach
        </select>

        <input class="form-control" type="text" name="first_name" placeholder="First Name">
        <input class="form-control" type="text" name="last_name" placeholder="Last Name">
        <input class="form-control" type="number" name="volume" placeholder="Volume">
        <input type="submit" class="btn" value="Make order">
    </form>
</div>
@stop
