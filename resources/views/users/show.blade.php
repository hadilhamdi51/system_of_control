
<x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('users') }}
        </h2>
    </x-slot>
    @if (Session::get('success'))
    <div class="alert alert-success alert-dismissible fade show" role="alert">
        <strong>{{Session::get('success')}}</strong>
        <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
      </div>
    @endif

<h2>user details</h2>
<div class="card mb-3">
    <div class="card-body">
      <h5 class="card-title">{{ $users->name }}<span class="badge bg-primary">{{ $users->name }}</span></h5>
      <h5 class="card-title">{{ $users->email }}<span class="badge bg-primary">{{ $users->email}}</span></h5><br>
      
    </div>
  </div>

