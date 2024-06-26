@extends('layouts.app')

@section('content')
<div class="container">
    <h3 align="center" class="mt-5"></h3>
    <div class="row">
        <div class="col-md-2"></div>
        
        <div class="col-md-9">
            <div class="row">
            <div class="float-right">
            <!-- Button trigger modal -->
<button type="button" class="btn btn-primary" data-toggle="modal" data-target="#exampleModal">
 ADD Task
</button>
</div>
<!-- Modal -->
<div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">Task</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
      <div class="form-area">
            <form method="POST" action="{{ route('task.store') }}">
            @csrf
                    <div class="row">
                        <div class="col-md-6">
                            <label>Task name</label>
                            <input type="text" class="form-control" name="task_name" >
                        </div>

                        <div class="col-md-6">
                            <label>Project name</label>
                            <input type="text" class="form-control" name="project_name" >
                        </div>

                        <div class="col-md-6">
                            <label>Start Date</label>
                            <input type="date" class="form-control" name="start_date" >
                        </div>

                        <div class="col-md-6">
                            <label>Start Time</label>
                            <input type="time" class="form-control" name="start_time">
                        </div>

                        <div class="col-md-6">
                            <label>End Date</label>
                            <input type="date" class="form-control" name="end_date" id="end_date">
                        </div>

                        <div class="col-md-6">
                            <label>End Time</label>
                            <input type="time" class="form-control" name="end_time" id="end_time">
                        </div>

                       

                        <div class="col-md-6">
                            <label>Status</label>
                            <select class="form-control" name="status">
                            <option selected>select menu</option>
                            <option value="1">Pending</option>
                            <option value="2">In Progress</option>
                            <option value="3">Completed</option>
                            </select>
                        </div>


                       
                    </div>
                
            </div>

       
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
        <input type="submit" class="btn btn-info" value="Register">
      </div>
      </form>
    </div>
  </div>
</div>

            <table class="table mt-5">
                    <thead>
                      <tr>
                        <th scope="col">#</th>
                        <th scope="col">Task name</th>
                        <th scope="col">Project name</th>

                        <th scope="col">Start Date</th>
                        <th scope="col">Start Time</th>
           
                        <th scope="col">End Date</th>
                        <th scope="col">End Time</th>
                        <th scope="col">Status</th>
                        <th scope="col">Action</th>
                      </tr>
                    </thead>
                    <tbody>
                        @foreach ( $tasks as $key => $task )
                        <tr>
                            <td scope="col">{{ ++$key }}</td>
                            <td scope="col">{{ $task->task_name }}</td>
                            <td scope="col">{{ $task->project_name }}</td>
                            <td scope="col">{{ $task->start_date }}</td>
                            <td scope="col">{{ $task->start_time }}</td>
                            <td scope="col">{{ $task->end_date }}</td>
                            <td scope="col">{{ $task->end_time }}</td>
                            <td scope="col">{{ $task->status }}</td>

                            <td scope="col">
                            <a href="{{  route('task.edit', $task->id) }}">
                            <button class="btn btn-primary btn-sm">
                            <i class="fa fa-pencil-square-o" aria-hidden="true"></i> Edit
                            </button>
                            </a>

                            
                            <form action="{{ route('task.destroy', $task->id) }}" method="POST" style ="display:inline">
                             @csrf
                            @method('DELETE')
                            <button type="submit" class="btn btn-danger btn-sm">Delete</button>
                            </form>
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
@endsection

@push('css')


    <style>
        .form-area {
            padding: 20px;
            margin-top: 20px;
            background-color: #FFFF00;
        }
        .bi-trash-fill {
            color: red;
            font-size: 18px;
        }
        .bi-pencil {
            color: green;
            font-size: 18px;
            margin-left: 20px;
        }
    </style>
@endpush


