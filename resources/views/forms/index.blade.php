@extends('layouts.app')

@section('content')
  <div class="container">
    <div class="row">
      <div class="col-md-12">
        <div class="card">
          <div class="card-header">
            Computers
          </div>
          <div class="card-body">
              <table class="table table-striped table-bordered">
                  <thead>
                    <th>Item Name</th>
                    <th>Serial Name</th>
                    <th>Model Name</th>
                    <th>type</th>
                    <th>operating_system</th>
                    <th>hard_drive</th>
                    <th>Ram</th>
                    <th>processor</th>
                    <th>Actions</th>
                  </thead>
                  <tbody>
                    @foreach($computers as $computer)
                    <tr>
                      <td>{{ $computer->Item_Name}}</td>
                      <td>{{ $computer->Serial_Number}}</td>
                      <td>{{ $computer->model}}</td>
                      <td>{{ $computer->type}}</td>
                      <td>{{ $computer->operating_system}}</td>
                      <td>{{ $computer->hard_drive}}</td>
                      <td>{{ $computer->Ram}}</td>
                      <td>{{ $computer->processor}}</td>


                      <td>
                          <a href="{{route('forms.edit',$computer->id)}}" class="btn btn-warning">
                            Edit
                          </a>
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
@stop
