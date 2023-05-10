@extends('admin.layouts.admin')
@section('heading1','About')

@section('content')
    <div class="container">
        <div class="row" style="margin:20px;">
            <div class="col-12">
                <div class="card">
                    <div class="card-header">
                        <h2>About page</h2>
                    </div>
                    <div class="card-body">
                        <a href="{{ url('/admin/page/about/create') }}" class="btn btn-success btn-sm" title="Add New Post">
                            Add New
                        </a>
                        <br/>
                        <br/>
                        <div class="table-responsive">
                            <table class="table">
                                <thead>
                                    <tr>
                                        <th>#</th>
                                        <th>Title</th>
                                        <th>Description</th>
                                        <th>Actions</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @foreach($abouts as $about)
                                    <tr>
                                        <td>{{ $loop->iteration }}</td>
                                        <td width="20%">{{ $about->title }}</td>
                                        <td>{{ $about->description }}</td>
  
                                        <td width="20%">
                                            <a href="" title="View Post"><button class="btn btn-info btn-sm"><i class="fa fa-eye" aria-hidden="true"></i> View</button></a> 
                                            <a href="{{ url('/admin/page/about/' . $about->id .'/edit') }}" title="Edit Post"><button class="btn btn-primary btn-sm"><i class="fa fa-pencil-square-o" aria-hidden="true"></i> Edit</button></a> 
  
                                            <form method="POST" action="{{ url('/admin/page/about/' . $about->id) }}" accept-charset="UTF-8" style="display:inline">
                                                {{ method_field('DELETE') }}
                                                {{ csrf_field() }}
                                                <button type="submit" class="btn btn-danger btn-sm" title="Delete about" onclick="return confirm("Confirm delete?")"><i class="fa fa-trash-o" aria-hidden="true"></i> Delete</button>
                                            </form>
                                        </td>
                                    </tr>
                                @endforeach
                                </tbody>
                            </table>
                        </div>
  
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection