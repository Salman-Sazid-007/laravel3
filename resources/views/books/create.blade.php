@extends('layout')



@section('page-content')


<legend>Book List</legend>

<form method="post" action="{{route('books.store')}}">
    @csrf
    <div class="mb-3">
        <label class="form-label">Title</label>
        <input type="text" class="form-control" name="titlr" placeholder="Book title" value="{{old('titlr')}}" >
        @error('titlr')
            <div class="text-danger">{{$message}}</div>
        @enderror
    </div>
    <div class="mb-3">
        <label class="form-label">Author</label>
        <input type="text" class="form-control" name="author" placeholder="Book author" value="{{old('author')}}" >
        @error('author')
            <div class="text-danger">{{$message}}</div>
        @enderror
    </div>
    <div class="mb-3">
        <label class="form-label">ISBN</label>
        <input type="text" class="form-control" name="isbn" placeholder="Book isbn" value="{{old('isbn')}}" >
        @error('isbn')
            <div class="text-danger">{{$message}}</div>
        @enderror
    </div>
    <div class="mb-3">
        <label class="form-label">Stock</label>
        <input type="text" class="form-control" name="stock" placeholder="Book stock" value="{{old('stock')}}" >
        @error('stock')
            <div class="text-danger">{{$message}}</div>
        @enderror
    </div>
    <div class="mb-3">
        <label class="form-label">Price</label>
        <input type="text" class="form-control" name="price" placeholder="Book price" value="{{old('price')}}" >
        @error('price')
            <div class="text-danger">{{$message}}</div>
        @enderror
    </div>

    <div class="mb-3">
        <button type="submit" class="btn btn-primary">Save</button>
        <a href="{{route('books.index')}}" class="btn btn-danger">Back</a>
    </div>

</form>
@endsection