@extends('layout')
@section('content')
    <h3 class="text-center font-monospace">Next Todo</h3>
    <table class="table table-success table-striped">
        <thead>
          <tr>
            <th scope="col">#</th>
            <th scope="col">Title</th>
            <th scope="col">Description</th>
            <th scope="col">Completed</th>
            <th scope="col">Actions</th>
          </tr>
        </thead>
        <tbody>
            @foreach($todos as $todo)
            <tr>
                <th scope="row">{{ $todo->id }}</th>
                <td>{{ $todo->title }}</td>
                <td>{{ $todo->description }}</td>
                <td>{{ $todo->completed }}</td>
                <td>
                    <i class="bi bi-toggle-on"></i>
                    <i class="bi bi-trash"></i>
                </td>
            </tr>
          @endforeach
        </tbody>
      </table>
@endsection
