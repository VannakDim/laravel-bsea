@extends('admin.layouts.admin')
@section('heading1','About')
@section('content')
  
<div class="card" style="margin:20px;">
  <div class="card-header"><h2>Edit About Information</h2></div>
  <div class="card-body">
       
      <form action="{{ url('/admin/page/about/' .$abouts->id) }}" method="post" enctype="multipart/form-data">
        {!! csrf_field() !!}
        @method("PATCH")
        <input type="hidden" name="id" id="id" value="{{$abouts->id}}" />
        
        @if ($abouts->title == 'image')
        <img src="/storage/app/img/{{ $abouts->description }}" alt="about image" id="cover" style="max-width: 200px"></br>
        <input type="file" name="description" id="input-file-now-custom-3" class="form-controll py-3"></br>
            {{-- <label>Image path</label></br> --}}
        @else
          <label>Title</label></br>
          <input type="text" name="title" value="{{$abouts->title}}" class="form-control"></br>
          <label>Description</label></br>
          <input type="text" name="description" value="{{$abouts->description}}" class="form-control"></br>
          <label>Class</label></br>
          <input type="text" name="class" value="{{$abouts->class}}" class="form-control"></br>
          <label>Icon as text</label></br>
          <input type="text" name="icon" value="{{$abouts->icon}}" class="form-control"></br>

        @endif
        
        <input type="submit" value="Update" class="btn btn-success mt-3"></br>
    </form>
    
  </div>
</div>

@stop