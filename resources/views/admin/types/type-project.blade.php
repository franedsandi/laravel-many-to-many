@extends('layouts.admin')

@section('content')
    <div class='container'>
        <h1>Projects List by Type holi</h1>

        <table class="table table-dark table-striped mt-5" >
            <thead>
          <tr>
            <th scope="col">ID</th>
            <th scope="col">Type</th>
            <th scope="col">Posts</th>
          </tr>
        </thead>
        <tbody>
            @foreach ($types as $type)
            <tr>
                <td>{{$type->id}}</td>
                <td>{{$type->name}}</td>
                <td>
                    <ul>
                        @foreach ($type->projects as $project)
                        <li>
                            <a href="{{route('admin.projects.show', $project)}}">{{$project->title}}</a>
                        </li>
                        @endforeach
                    </ul>
                </td>
            </tr>
            @endforeach
        </tbody>

        </table>
    </div>
@endsection
