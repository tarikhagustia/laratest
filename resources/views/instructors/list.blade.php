@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-12">
            <div class="panel panel-default">
                <div class="panel-heading">Instructors</div>

                <div class="panel-body">
                    <a href="/instructors/add" class="btn btn-primary">Add new</a>
                    <div class="table-responsive">
                      <table class="table table-striped">
                        <thead>
                          <tr>
                            <th>No</th>
                            <th>Name</th>
                            <th>Gender</th>
                            <th>Date Input</th>
                          </tr>
                        </thead>
                        <tbody>
                          @foreach($instructors as $key => $instructor)
                          <tr>
                            <td>{{ $key+1 }}</td>
                            <td>{{ $instructor->name }}</td>
                            <td>{{ $instructor->gender }}</td>
                            <td>{{ $instructor->created_at }}</td>
                            <td>
                              <a href="/instructors/edit/{{ $instructor->id }}">EDIT</a>
                              |
                              <a href="/instructors/delete/{{ $instructor->id }}">DELETE</a>
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
