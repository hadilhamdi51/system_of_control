
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('students') }}
        </h2>
    </x-slot>
    @if (Session::get('success'))
    <div class="alert alert-success alert-dismissible fade show" role="alert">
        <strong>{{Session::get('success')}}</strong>
        <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
      </div>
    @endif

<h2>Student details</h2>
<div class="card mb-3">
    <div class="card-body">
      <h5 class="card-title"><span class="badge bg-primary">{{ $students->last_name }}</span></h5>
      <h5 class="card-title"><span class="badge bg-primary">{{ $students->first_name }}</span></h5>
     <h5 class="card-title"><span class="badge bg-primary">{{ $students->department_id }}</span></h5>
      <h5 class="card-title"><span class="badge bg-primary">{{ $students->state}}</span></h5>
    </div>
  </div>
  