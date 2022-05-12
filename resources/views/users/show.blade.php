<x-app-layout>
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

<h2>users details</h2>
<div class="card mb-3">
    <div class="card-body">
      <h5 class="card-title">{{ $user->name }}<span class="badge bg-primary">{{ $user->>name }}</span></h5>
      <h5 class="card-title">{{ $user->email }}<span class="badge bg-primary">{{ $user->>email }}</span></h5>
      <h5 class="card-title">{{ $user->email_verified_at }}<span class="badge bg-primary">{{ $user->>email_verified_at }}</span></h5>
      <h5 class="card-title">{{ $user->password }}<span class="badge bg-primary">{{ $user->>password }}</span></h5>
      <h5 class="card-title">{{ $user->remember_token }}<span class="badge bg-primary">{{ $user->>remember_token }}</span></h5>
      <h5 class="card-title">{{ $user->created_at }}<span class="badge bg-primary">{{ $user->>created_at}}</span></h5>
      <h5 class="card-title">{{ $user->updated_at}}<span class="badge bg-primary">{{ $user->>updated_at}}</span></h5>
      <p class="card-text">{{ $post->body }}</p>
      <p class="card-text"><small class="text-muted">{{ $post->created_at }}</small></p>
    </div>
  </div>
</x-app-layout>