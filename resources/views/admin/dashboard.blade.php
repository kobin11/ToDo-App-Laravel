@extends('layouts.app')

@section('content')
<div class="container">
    <h3 align="right" class="mt-5"></h3>
    <div class="row">
        <div class="col-md-2"></div>
        
        <div class="col-md-10">
            <div class="row">
            <div class="float-right">
            <!-- Button trigger modal -->
<button  type="button" class="btn btn-primary" data-toggle="modal" data-target="#exampleModal">
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
                            <option value="2">Progress</option>
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
                       
           
                        <th scope="col">End Date</th>
  
                        <th scope="col">Status</th>
                        <th scope="col">Show</th>
                        <th scope="col">Assign</th>
                        
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
                            <td scope="col">{{ $task->end_date }}</td>

                            <td scope="col">
                                     @if($task->status == 1)
                                        Pending
                                     @elseif($task->status == 2)
                                     Progress
                                    @else
                                        Completed
                                    @endif
                        
                        </td>

                 <td scope="col">

                 <button type="button" class="btn btn-success" data-toggle="modal" data-target="#showModal{{ $task->id }}">
                         Show
                    </button>

                </td>

                <td scope="col">

                <button type="button" class="btn btn-warning" data-toggle="modal" data-target="#assignTaskModal{{ $task->id }}">
                         Assign
                    </button>
                    </td>
<!-- Modal -->
<div class="modal fade" id="showModal{{ $task->id }}" tabindex="-1" role="dialog" aria-labelledby="showModal{{ $task->id }}" aria-hidden="true">
                <div class="modal-dialog" role="document">
                    <div class="modal-content">
                       
                        <div class="modal-body">
                            
                        <div class="card mt-5">
  <h2 class="card-header">Show Task</h2>
  <div class="card-body">
  
    <div class="d-grid gap-2 d-md-flex justify-content-md-end">
        <a class="btn btn-primary btn-sm" href="{{ route('admin.dashboard') }}"><i class="fa fa-arrow-left"></i> Back</a>
    </div>
  
    <div class="row">
        
       <div class="col-xs-12 col-sm-12 col-md-12">
            <div class="form-group">
                <strong>Task Name : </strong> <br/>
                {{ $task->task_name }}
            </div>
        </div>

        <div class="col-xs-12 col-sm-12 col-md-12 mt-2">
            <div class="form-group">
                <strong>Project Name : </strong> <br/>
                {{ $task->project_name }}
            </div>
        </div>

       <div class="col-xs-12 col-sm-12 col-md-12">
            <div class="form-group">
                <strong>Start Date :</strong> <br/>
                {{ $task->start_date }}
            </div>
        </div>
        
        <div class="col-xs-12 col-sm-12 col-md-12 mt-2">
            <div class="form-group">
                <strong>Start Time :</strong> <br/>
                {{ $task->start_time }}
            </div>
        </div>

        <div class="col-xs-12 col-sm-12 col-md-12 mt-2">
            <div class="form-group">
                <strong>End Date :</strong> <br/>
                {{ $task->end_date }}
            </div>
        </div>

        <div class="col-xs-12 col-sm-12 col-md-12 mt-2">
            <div class="form-group">
                <strong>End Time :</strong> <br/>
                {{ $task->end_time }}
            </div>
        </div>

        <div class="col-xs-12 col-sm-12 col-md-12 mt-2">
            <div class="form-group">
                <strong>End Time :</strong> <br/>
                {{ $task->status }}
            </div>
        </div>


    </div>
  
  </div>
</div>








                        </div>
                    
                    </div>
                </div>
</div>

      

<!-- Modal Close -->























<!-- Modal -->
<div class="modal fade" id="assignTaskModal{{ $task->id }}" tabindex="-1" role="dialog" aria-labelledby="assignTaskModalLabel{{ $task->id }}" aria-hidden="true">
                <div class="modal-dialog" role="document">
                    <div class="modal-content">
                        <div class="modal-header">
                            <h5 class="modal-title" id="assignTaskModalLabel{{ $task->id }}">Assign Task</h5>
                            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                <span aria-hidden="true">&times;</span>
                            </button>
                        </div>
                        <div class="modal-body">
                            <form action="{{ route('tasks.assignTask', ['task' => $task->id]) }}" method="POST">
                                @csrf
                                <div class="form-group">
                                    <label for="user_id">Employee</label>
                                    <select name="user_id" id="user_id" class="form-control">
                                        @foreach($employees as $employee)
                                            <option value="{{ $employee->id }}">{{ $employee->name }}</option>
                                        @endforeach
                                    </select>
                                  
                                </div>

                                <div class="form-group">

                                    <label style="color:red">Employee : </label>
                                  
                                         <label style="color:blue;font-weight:bold;">{{ $task->user->name ?? 'No user assigned' }}</label>
                                </div>


                                <div class="modal-footer">
                                    <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                                    <input type="submit" class="btn btn-info" value="Assign">

                                    
                                </div>

                               


                            </form>

                            <form action="{{ route('tasks.removeTask', ['task' => $task->id]) }}" method="POST">
                                    @csrf
                                        <button type="submit" class="btn btn-danger">Remove</button>
                                 </form>


                        </div>
                    

                    </div>
                    </div>

      

<!-- Modal Close -->



<td scope="col">
  <button class="btn btn-primary btn-sm" data-toggle="modal" data-target="#exampleModal1{{ $task->id }}">
    <i class="fa fa-pencil-square-o" aria-hidden="true"></i> Edit
  </button>

  <form action="{{ route('task.destroy', $task->id) }}" method="POST" style ="display:inline">
                             @csrf
                            @method('DELETE')
                            <button type="submit" class="btn btn-danger btn-sm">Delete</button>
                            </form>
</td>


<div class="modal fade" id="exampleModal1{{ $task->id }}" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel{{ $task->id }}" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel{{ $task->id }}">Task</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
        <div class="form-area">
          <form method="POST" action="{{ route('task.update', $task->id) }}">
            @csrf
            @method('PATCH')
            <div class="row">
              <div class="col-md-6">
                <label>Task name</label>
                <input type="text" class="form-control" name="task_name" value="{{ $task->task_name }}">
              </div>

              <div class="col-md-6">
                <label>Project name</label>
                <input type="text" class="form-control" name="project_name" value="{{ $task->project_name }}">
              </div>

              <div class="col-md-6">
                <label>Start Date</label>
                <input type="date" class="form-control" name="start_date" value="{{ $task->start_date }}">
              </div>

              <div class="col-md-6">
                <label>Start Time</label>
                <input type="time" class="form-control" name="start_time" value="{{ $task->start_time }}">
              </div>

              <div class="col-md-6">
                <label>End Date</label>
                <input type="date" class="form-control" name="end_date" id="end_date" value="{{ $task->end_date }}">
              </div>

              <div class="col-md-6">
                <label>End Time</label>
                <input type="time" class="form-control" name="end_time" id="end_time" value="{{ $task->end_time }}">
              </div>

              <div class="col-md-6">
                <label>Status</label>
                <select class="form-control" name="status">
                  <option selected>select menu</option>
                  <option value="1" {{ $task->status == 1 ? 'selected' : '' }}>Pending</option>
                  <option value="2" {{ $task->status == 2 ? 'selected' : '' }}>In Progress</option>
                  <option value="3" {{ $task->status == 3 ? 'selected' : '' }}>Completed</option>
                </select>
              </div>
            </div>
            <div class="modal-footer">
              <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
              <button type="submit" class="btn btn-primary">Save changes</button>
            </div>
          </form>
        </div>
      </div>
    </div>
    </div>









    


                            
                            
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


