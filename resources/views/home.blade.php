@extends('layouts.master')

@section('content')
    <div class="container-fluid">
        <div class="row">
            <nav class="col-sm-3 col-md-2 d-none d-sm-block bg-light sidebar">
                <ul class="nav nav-pills flex-column">
                    <li class="nav-item">
                        <a class="nav-link active" href="#">Post <span class="sr-only">(current)</span></a>
                    </li>
                </ul>
                <ul class="nav nav-pills flex-column">
                    <li class="nav-item">
                        <a class="nav-link" href="#">Nav item again</a>
                    </li>
                </ul>
            </nav>

            <main role="main" class="col-sm-9 ml-sm-auto col-md-10 pt-3">
                <h1>Posts
                    <a href="{{ route('post.form') }}">
                        <button type="button" class="btn btn-primary btn-sm">Create Post</button>
                    </a>
                </h1>

                <table id="example" class="table table-striped table-bordered" style="width:100%">
                    <thead>
                        <tr>
                            <th>#</th>
                            <th>Title</th>
                            <th>Posted On</th>
                            <th>Posted By</th>
                            <th>Action</th>
                            
                        </tr>
                    </thead>
                    <tbody>
                            <?php $count=0 ?>
                        @foreach ($posts as $post)
                        <?php $count++ ?>
                        
                            <tr>
                                <td>{{$count}}</td>
                                <td>{{$post->title}}</td>
                                <td>{{$post->created_at->format('d/M/Y')}}</td>
                                <td>{{$post->user->name}}</td>
                            <td><a href="{{ route('post.edit',$post->id)  }}">Edit<a>&nbsp; &nbsp; <a href="{{ route('post.delete',['id'=>$post->id]) }}">Delete</a> </td>
                            </tr>
                        @endforeach
                    </tbody>
                </table>

                @if(Session::has('success'))
                <div class="row">
                    <div class="col-sm-6 col-md-4 col-md-offset-4 col-sm-offset-3">
                        <div id="message" class="alert alert-success">
                            {{ Session::get('success') }}
                        </div>
                    </div>
                </div>
            @endif
            </main>
        </div>
    </div>
@endsection