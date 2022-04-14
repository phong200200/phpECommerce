@extends('admin.main')
@section('head')
<script src="https://cdn.ckeditor.com/ckeditor5/33.0.0/classic/ckeditor.js"></script>
@endsection
@section('content')
<form action="" method="POST">
    <div class="card-body">
        <div class="form-group">
            <label for="menu">Product Name</label>
            <input type="text" name="name" value="{{ $product -> name }}" class="form-control" placeholder="Enter Name">
        </div>
        <div class="form-group">
            <label>Categories</label>
            <select name="parent_id" class="form-control">
                <option value="0">Category</option>
                @foreach($categories as $item)
                    <option value="{{ $item -> id }}">{{ $item -> namecate}}</option>
                @endforeach
            </select>
        </div>

        <div class="form-group">
            <label>Description</label>
            <textarea name="description"></textarea>
        </div>

        <div class="form-group">
            <label>Details Decriptions</label>
            <textarea name="content" id="content">{{ $product -> description }}</textarea>
        </div>

        <div class="form-group">
            <label>Activate</label>
            <div class="custom-control custom-radio">
                <input class="custom-control-input" value="1" type="radio" id="active"
                    name="active" {{ $product -> active == 0? 'checked=""': ""}}>
                <label for="active" class="custom-control-label">Active</label>
            </div>
            <div class="custom-control custom-radio">
                <input class="custom-control-input" value="0" type="radio" id="no_active" 
                    name="active" {{ $product -> active == 0? 'checked=""': ""}}>
                <label for="no_active" class="custom-control-label">No active</label>
            </div>
        </div>
        <div class="form-check">
            <input type="checkbox" class="form-check-input" id="exampleCheck1">
            <label class="form-check-label" for="exampleCheck1">Check me out</label>
        </div>
    </div>
    <!-- /.card-body -->

    <div class="card-footer">
        <button type="submit" class="btn btn-primary">Save Changes</button>
    </div>
    @csrf
</form>
@endsection
@section('footer')
<script>
    CKEDITOR.replace('content');
</script>
@endsection