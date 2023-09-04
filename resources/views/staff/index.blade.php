@extends('layouts.base')

@section('content')
<div class="container">
  <div class="row text-center">
    <h1>
      {{$day}}（{{$dow}}） {{$time}}
    </h1>
  </div>
  <div class="row my-3">
    <img src="{{ asset('img/bar-1.png') }}" alt="bar-1">
  </div>
  <div class="row">
    @foreach($staffs as $staff)
    <div class="card text-center mx-2 my-2" style="width: 13rem;">
      <div class="card-body">
        <h5 class="card-title">
          {{$staff['staff_id']}}
        </h5>
        <h5 class="card-subtitle mt-1 text-muted">
          @foreach($staff -> worktimes as $today_work_time)
          {{ $today_work_time -> action_time }}
          @endforeach
        </h5>
      </div>
    </div>
    @endforeach
  </div>
</div>
@endsection