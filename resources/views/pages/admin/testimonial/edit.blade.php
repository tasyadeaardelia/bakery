@extends('layouts.post')
@section('title', 'Edit Post')

@section('content')
    <div class="page-content-wrapper">
        <div class="container-fluid">

            <div class="row">
                <div class="col-sm-12">
                    <div class="float-right page-breadcrumb">
                        <ol class="breadcrumb">
                            <li class="breadcrumb-item">
                                <a href="{{ route('dashboard') }}">Dashboard</a>
                            </li>
                            <li class="breadcrumb-item">
                                <a href="{{ route('post.index') }}">Posts</a>
                            </li>
                            <li class="breadcrumb-item">
                                <a href="{{ url()->current() }}">Edit Post</a>
                            </li>
                        </ol>
                    </div>
                    <h5 class="page-title">Edit post</h5>
                </div>
            </div>

            @if ($errors->any())
                <div class="alert alert-danger">
                    <ul>
                        @foreach ($errors->all() as $error)
                            <li>{{ $error }}</li>
                        @endforeach
                    </ul>
                </div>
            @endif

            <div class="row">
                <div class="col-12">
                    <div class="card m-b 30">
                        <div class="card-body">
                            <form method="post" enctype='multipart/form-data' action="{{ route('post.update', $post->id)}} ">
                            @method('PUT')
                            @csrf
                                <div class="form-group mb-4">
                                    <label for="judul">Judul</label>
                                    <input type="text" name="title" class="form-control border-0" placeholder="Judul" id="title" required value="{{ $post->title }}">
                                    <hr class="my-0" style="background-color: #fd6e77; height:1px; border:0;">
                                </div>
                                <div class="form-group mb-4">
                                    <label for="content">Content</label>
                                    <textarea name="content" id="elm1"></textarea>
                                </div>
                                <div class="form-group mb-4">
                                    <label for="tag">Post Tag</label>
                                    <br>
                                    <input type="text" data-role="tagsinput" name="tags" class="form-control tags">
                                </div>
                                <div class="form-group mb-4">
                                    <label for="Sampul">Sampul Post</label>
                                    {{-- <div class="dropzone">
                                        <div class="dz-message dropzoneDragArea" id="dropzoneDragArea">
                                            <span>Upload File</span>
                                            <div class="dropzone-previews" name="img">
                                            </div>
                                        </div>
                                    </div> --}}
                                    <br>
                                    <input type="file" name="image" accept="image/*">
                                </div>
                                <div class="form-group">
                                    <input type="hidden" name="authorId" value="{{ $post->authorId }}">
                                </div>
                                <div class="form-group mb-4">
                                    <label for="publishedAt">Published At</label>
                                    <input class="form-control" name="publishedAt" type="datetime-local" value="{{$post->publishedAt}}" id="example-datetime-local-input">
                                </div>
                                <div class="form-group mb-4">
                                    <label for="status">Status for this post</label>
                                    <select name="active" required class="form-control" id="" value="{{ $post->active }}">
                                        <option value="">Pilih status untuk post ini</option>
                                        <option value="1">1. Active</option>
                                        <option value="2">2. Draft</option>
                                    </select>
                                </div>
                                <div class="form-group">
                                    <input class="btn btn-danger" type="reset" value="Reset">
                                    <button class="btn btn-primary" type="submit">Submit</button>   
                                </div>
                            </form>
                            
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    
@endsection