@extends('layouts.app')

@section('content')
<div class="container">
    <h3 align="center" class="mt-5"></h3>
    <div class="row">
        <div class="col-md-2"></div>
        
        <div class="col-md-9">
            


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
                            <td scope="col">
                                
                            
                                @if($task->status == 1)
                                   Progress
                                @elseif($task->status == 2)
                                   Pending
                               @else
                                   Completed
                               @endif
                       
                   
                   </td>






                            <td scope="col">
                           
  <button class="btn btn-primary btn-sm" data-toggle="modal" data-target="#exampleModal1{{ $task->id }}">
    <i class="fa fa-pencil-square-o" aria-hidden="true"></i> Manage
  </button>

  




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
          <form method="POST" action="{{ route('taskuser.update', $task->id) }}">
            @csrf
            @method('PATCH')
            <div class="row">

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


