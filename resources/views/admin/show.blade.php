@extends('layouts.app')
@section('content')
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






@endsection