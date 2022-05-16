
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
        <!--<div class="mb-3">
          <label for="password" class="form-label">password</label>
          <input type="text" name="email" value="{{ old('password') ?? $user->password }}" class="form-control @error('password') is-invalid @enderror" id="password" aria-describedby="">
          @error('password')
            <small class="text-danger">{{ $message }}</small>
          @enderror

        </div>-->
       
        
       
        <button type="submit" class="btn btn-primary">Submit</button>
      </form>