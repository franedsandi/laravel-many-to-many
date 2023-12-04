@extends('layouts.admin')

@section('content')
    <div class="top d-flex align-items-center justify-content-between my-4">
        <h1>Projects List</h1>
        <a class="btn btn-light" href="{{route('admin.projects.create')}}">
            <i class="fa-solid fa-plus fa-beat-fade"></i>
            <span>Add new project</span>
        </a>
    </div>
    @if(session('deleted'))
    <div class="alert alert-danger">
        {{ session('deleted') }}
    </div>
    @endif
    <table class="table table-dark">
        <thead>
            <tr class="text-center">
                <th scope="col">id</th>
                <th scope="col">Title</th>
                <th scope="col">Type</th>
                <th scope="col">Description</th>
                <th scope="col">Actions</th>
            </tr>
        </thead>
        <tbody>
        @foreach ($projects as $project)
            <tr>
                <th>{{ $project->id }}</th>
                <td>{{ $project->title }}</td>
                <td>{{ $project->type?->name ?? '-' }}</td>
                <td>{{ $project->description }}</td>
                <td>
                    <div class="d-flex gap-2">
                        @include('generic_stuff.generic_show_buton', ['route' => route('admin.projects.show', $project)])
                        @include('generic_stuff.generic_edit_buton', ['route' => route('admin.projects.edit', $project)])
                        @include('generic_stuff.generic_delete_buton', ['route' => route('admin.projects.destroy', $project)])
                    </div>
                </td>
            </tr>
        @endforeach
        </tbody>
    </table>
    {{ $projects->links()}}
@endsection
