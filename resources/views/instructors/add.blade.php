@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-12">
            <div class="panel panel-default">
                <div class="panel-heading">Instructors</div>

                <div class="panel-body">
                  @if (count($errors) > 0)
                    <div class="alert alert-danger">
                        <ul>
                            @foreach ($errors->all() as $error)
                                <li>{{ $error }}</li>
                            @endforeach
                        </ul>
                    </div>
                  @endif
                    <form class="" action="/instructors/add" method="post">
                      {{ csrf_field() }}
                      <div class="form-group">
                        <label for="name">Name : </label>
                        <input type="text" name="name" value="" class="form-control">
                      </div>
                      <div class="form-group">
                        <label for="name">Gender : </label>
                        <select class="form-control" name="gender">
                          <option value="male">Male</option>
                          <option value="female">Female</option>
                        </select>
                      </div>
                      <div class="form-group">
                        <button type="submit" name="button" class="btn btn-success">Save</button>
                      </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
