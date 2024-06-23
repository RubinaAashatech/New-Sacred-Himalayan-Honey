@extends('layouts2.superadmin')

@section('content')
    @if (Session::has('success'))
        <div class="alert alert-success">
            {{ Session::get('success') }}
        </div>
    @endif

    @if (Session::has('error'))
        <div class="alert alert-danger">
            {{ Session::get('error') }}
        </div>
    @endif

    <div class="row mb-2">
        <div class="col-sm-6">
            <h1 class="m-0">{{ $page_title }}</h1>
            <a href="{{ route('backend.blogpostscategories.create') }}" class="btn btn-primary mb-3">Add Blog Post Category</a>
        </div>
    </div>

    <table class="table table-bordered table-hover">
        <thead>
            <tr>
                <th>S.N</th>
                <th>Title</th>
                <th>Image</th>
                <th>Content</th>
                <th>Action</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($categories as $category)
                <tr data-widget="expandable-table" aria-expanded="false">
                    <td width="5%">{{ $loop->iteration }}</td>
                    <td>{{ $category->title }}</td>
                    <td>
                        <img id="preview{{ $loop->iteration }}" src="{{ asset('uploads/blogpostcategory/' . $category->image) }}" style="width: 150px; height:150px" />
                    </td>
                    <td>{{ Str::limit(strip_tags($summernoteContent->processContent($category->content)), 200) }}</td>
                    <td>
                        <!-- Edit Button -->
                        <a href="{{ route('backend.blogpostscategories.edit', $category->id) }}" class="btn btn-primary">Edit</a>

                        <!-- Delete Button -->
                        <button type="button" class="btn btn-danger" data-toggle="modal" data-target="#deleteModal{{ $category->id }}">Delete</button>

                        <!-- Delete Modal -->
                        <div class="modal fade" id="deleteModal{{ $category->id }}" tabindex="-1" role="dialog" aria-labelledby="deleteModalLabel{{ $category->id }}" aria-hidden="true">
                            <div class="modal-dialog" role="document">
                                <div class="modal-content">
                                    <div class="modal-header">
                                        <h5 class="modal-title" id="deleteModalLabel{{ $category->id }}">Delete Blog Post Category</h5>
                                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                            <span aria-hidden="true">&times;</span>
                                        </button>
                                    </div>
                                    <div class="modal-body">
                                        Are you sure you want to delete this category?
                                    </div>
                                    <div class="modal-footer">
                                        <form action="{{ route('backend.blogpostscategories.destroy', $category->id) }}" method="POST">
                                            @csrf
                                            @method('DELETE')
                                            <button type="submit" class="btn btn-danger">Delete</button>
                                        </form>
                                        <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </td>
                </tr>
            @endforeach
        </tbody>
    </table>
    
@endsection
