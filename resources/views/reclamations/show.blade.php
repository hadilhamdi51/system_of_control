
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('reclamations') }}
        </h2>
    </x-slot>
    @if (Session::get('success'))
    <div class="alert alert-success alert-dismissible fade show" role="alert">
        <strong>{{Session::get('success')}}</strong>
        <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
      </div>
    @endif

<h2>Complaints details</h2>
<div class="card mb-3">
    <div class="card-body">
      <h5 class="card-title">{{ $reclamations->description }}<span class="badge bg-primary">{{ $reclamations->description }}</span></h5>
      <h5 class="card-title">{{ $reclamations->created_at }}<span class="badge bg-primary">{{ $reclamations->created_at}}</span></h5><br>
      <h5 class="card-title">{{ $reclamations->updated_at}}<span class="badge bg-primary">{{ $reclamations->updated_at}}</span></h5>
    </div>
  </div>
