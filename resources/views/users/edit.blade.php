<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('users') }}
        </h2>
    </x-slot>
    @if ($errors->any())
        <div class="alert alert-danger">
            <ul>
                @foreach ($errors->all() as $error)
                    <li>{{ $error }}</li>
                @endforeach
            </ul>
        </div>

    @endif
    <form action="{{ route('users.update', $user->id) }}" method="post" enctype="multipart/form-data">
        @csrf
        @method('PUT')
        <div class="mb-3">
          <label for="name" class="form-label">name</label>
          <input type="text" name="name" value="{{ old('name') ?? $user->name }}" class="form-control @error('name') is-invalid @enderror" id="name" aria-describedby="emailHelp">
          @error('name')
            <small class="text-danger">{{ $message }}</small>
          @enderror

        </div>
        <div class="mb-3">
          <label for="email" class="form-label">email</label>
          <input type="text" name="email" value="{{ old('email') ?? $user->email }}" class="form-control @error('email') is-invalid @enderror" id="email" aria-describedby="emailHelp">
          @error('email')
            <small class="text-danger">{{ $message }}</small>
          @enderror

        </div>
        <div class="mb-3">
          <label for="email_verified_at" class="form-label">email_verified_at</label>
          <input type="text" name="email_verified_at" value="{{ old('email_verified_at') ?? $user->email_verified_at }}" class="form-control @error('email_verified_at') is-invalid @enderror" id="email" aria-describedby="emailHelp">
          @error('email_verified_at')
            <small class="text-danger">{{ $message }}</small>
          @enderror

        </div>
        <div class="mb-3">
          <label for="password" class="form-label">password</label>
          <input type="text" name="email" value="{{ old('password') ?? $user->password }}" class="form-control @error('password') is-invalid @enderror" id="password" aria-describedby="emailHelp">
          @error('password')
            <small class="text-danger">{{ $message }}</small>
          @enderror

        </div>
        <div class="mb-3">
          <label for="remember_token" class="form-label">remember_token</label>
          <input type="text" name="remember_token" value="{{ old('remember_token') ?? $user->remember_token }}" class="form-control @error('remember_token') is-invalid @enderror" id="remember_token" aria-describedby="emailHelp">
          @error('remember_token')
            <small class="text-danger">{{ $message }}</small>
          @enderror

        </div>
        <div class="mb-3">
          <label for="created_at" class="form-label">created at</label>
          <input type="text" name="created_at" value="{{ old('created_at') ?? $user->created_at }}" class="form-control @error('created_at') is-invalid @enderror" id="created_at" aria-describedby="emailHelp">
          @error('created_at')
            <small class="text-danger">{{ $message }}</small>
          @enderror

        </div>
        <div class="mb-3">
          <label for="update_at" class="form-label">update at</label>
          <input type="text" name="update_at" value="{{ old('update_at') ?? $user->update_at }}" class="form-control @error('update_at') is-invalid @enderror" id="update_at" aria-describedby="emailHelp">
          @error('update_at')
            <small class="text-danger">{{ $message }}</small>
          @enderror

        </div>
        <button type="submit" class="btn btn-primary">Submit</button>
      </form>
</x-app-layout>