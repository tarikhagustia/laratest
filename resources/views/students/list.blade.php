@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-12">
            <div class="panel panel-default">
                <div class="panel-heading">Studens</div>

                <div class="panel-body">
                    <a href="/students/add" class="btn btn-primary">Add new</a>
                    <div class="table-responsive">
                      <table class="table table-striped">
                        <thead>
                          <tr>
                            <th>No</th>
                            <th>Name</th>
                            <th>E-mail</th>
                            <th>Gender</th>
                            <th>Date Input</th>
                          </tr>
                        </thead>
                        <tbody>
                          @foreach($students as $key => $student)
                          <tr>
                            <td>{{ $key+1 }}</td>
                            <td>{{ $student->name }}</td>
                            <td>{{ $student->email }}</td>
                            <td>{{ $student->gender }}</td>
                            <td>{{ $student->created_at }}</td>
                            <td> <a href="/students/edit/{{ $student->id }}">EDIT</a> </td>
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
