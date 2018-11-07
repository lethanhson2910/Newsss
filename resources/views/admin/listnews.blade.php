@extends('admin.master')
@section('content')
<div id="content-wrapper">

    <div class="container-fluid">

        <!-- Breadcrumbs-->
        <ol class="breadcrumb">
            <li class="breadcrumb-item">
                <a href="#">Dashboard</a>
            </li>
            <li class="breadcrumb-item active">Tables</li>
        </ol>

        <!-- DataTables Example -->
        <div class="card mb-3">
            <div class="card-header">
                <i class="fas fa-table"></i>
                Data Table Example</div>
            <div class="card-body">
                <div class="table-responsive">
                    <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                        <thead>
                            <tr>
                                <th>Id</th>
                                <th>Title</th>
                                <th>Photo_Id</th>
                                <th>Body</th>
                                <th>Created_At</th>
                                <th>Updated_At</th>
                                <th>Action</th>
                            </tr>
                        </thead>
                        <tfoot>
                            <tr>
                                <th>Id</th>
                                <th>Title</th>
                                <th>Photo_Id</th>
                                <th>Body</th>
                                <th>Created_At</th>
                                <th>Updated_At</th>
                                <th>Action</th>
                            </tr>
                        </tfoot>
                        @foreach($post as $post)
                        <tr>
                            <th>{{$post->id}}</th>
                            <th>{{$post->title}}</th>
                            <th>{{$post->photo_id}}</th>
                            <th>{{$post->body}}</th>
                            <th>{{$post->created_at->diffForHumans()}}</th>
                            <th>{{$post->updated_at->diffForHumans()}}</th>
                            <th>
                                <a href="{{route('admin.edit',$post->id)}}"> Edit</a>
                                <a href="{{route('admin.delete',$post->id)}}"> Delete</a>
                            </th>
                        </tr>
                        @endforeach
                    </table>
                </div>
            </div>
        </div>

        <p class="small text-center text-muted my-5">
            <em>Design by SonLe</em>
        </p>

    </div>
    @endsection
