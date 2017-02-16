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
                            <th>instructors</th>
                            <th>Date Input</th>
                          </tr>
                        </thead>
                        <tbody>
                          @foreach($courses as $key => $course)
                          <tr>
                            <td>{{ $key+1 }}</td>
                            <td>{{ $course->name }}</td>
                            <td>{{ $course->instructors->name }}</td>
                            <td>{{ $course->created_at }}</td>
                            <td>
                              <a href="/course/edit/{{ $course->id }}">EDIT</a>
                              |
                              <a href="/course/delete/{{ $course->id }}">DELETE</a>
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
