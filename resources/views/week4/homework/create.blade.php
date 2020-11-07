@extends('week4.homework.create')
@section('content')


<div class="container">
    <form action="{{ route('storeproducts') }}" method="POST">
        @csrf
        <input type="text" class="form-control" name="title" placeholder="Product">
        <textarea class="form-control" name="text" placeholder="Text"></textarea>
        <textarea class="form-control" name="short_description" placeholder="Short Description"></textarea>
        <button class="btn btn-primary w-100">save</button>
    </form>
</div>


@endsection
