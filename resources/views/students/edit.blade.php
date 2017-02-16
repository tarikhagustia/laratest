@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-12">
            <div class="panel panel-default">
                <div class="panel-heading">Studens</div>

                <div class="panel-body">

                    <form class="" action="/students/edit" method="post">
                      {{ csrf_field() }}
                      <input type="hidden" name="id" value="{{ $students->id }}">
                      <div class="form-group">
                        <label for="name">Name : </label>
                        <input type="text" name="name" value="{{ $students->name }}" class="form-control">
                      </div>
                      <div class="form-group">
                        <label for="name">Email : </label>
                        <input type="email" name="email" value="{{ $students->email }}" class="form-control">
                      </div>
                      <div class="form-group">
                        <label for="name">Password : </label>
                        <input type="password" name="password" value="" class="form-control">
                      </div>
                      <div class="form-group">
                        <label for="name">Gender : </label>
                        <select class="form-control" name="gender">
                          <option value="male" @if ($students->gender == "male") selected @endif>Male</option>
                          <option value="female" @if ($students->gender == "female") selected @endif>Female</option>
                        </select>
                      </div>
                      <div class="form-group">
                        <label for="name">Active : </label>
                        <select class="form-control" name="active">
                          <option value="1" @if ($students->active == "1") selected @endif>Active</option>
                          <option value="0" @if ($students->active == "0") selected @endif>Non Active</option>
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
