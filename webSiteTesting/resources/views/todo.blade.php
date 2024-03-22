@extends('layout')

@section('content')
    <h3 class="text-center font-monospace">Todo List</h3>
    <table class="table table-striped"">
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
                <form action={{ route('todo.updateCompleted',  ['id' => $todo->id]) }} method="POST">
                    @csrf
                    @method('PUT')
                    <button type="submit"><i class="bi bi-toggle-on"></i></button>
                </form>
                <form action={{ route('todo.delete',  ['id' => $todo->id]) }} method="POST">
                    @csrf
                    @method('PUT')
                    <button type="submit"><i class="bi bi-trash"></i></button>
                </form>
            </td>
          </tr>
          @endforeach
        </tbody>
      </table>
@endsection
