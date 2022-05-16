
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('students') }}
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
    <form action="{{ route('students.update', $student->id) }}" method="POST" enctype="multipart/form-data">
        @csrf
        @method('PUT')
        <div class="mb-3">
          <label for="first_name" class="form-label">first_name</label>
          <input type="text" name="first_name" value="{{ old('first_name') ?? $student->first_name }}" class="form-control @error('first_name') is-invalid @enderror" id="first_name" aria-describedby="emailHelp">
          @error('first_name')
            <small class="text-danger">{{ $message }}</small>
          @enderror

        </div>
        <div class="mb-3">
          <label for="last_name" class="form-label">last_name</label>
          <input type="text" name="last_name" value="{{ old('last_name') ?? $student->last_name }}" class="form-control @error('last_name') is-invalid @enderror" id="last_name" aria-describedby="emailHelp">
          @error('title')
            <small class="text-danger">{{ $message }}</small>
          @enderror

        </div>
        <div class="mb-3">
          <label for="department_id" class="form-label">department_id</label>
          <input type="text" name="department_id" value="{{ old('department_id') ?? $student->department_id }}" class="form-control @error('department_id') is-invalid @enderror" id="department_id" aria-describedby="emailHelp">
          @error('department_id')
            <small class="text-danger">{{ $message }}</small>
          @enderror

        </div>
        <div class="mb-3">
          <label for="class" class="form-label">classe</label>
          <input type="text" name="class" value="{{ old('class') ?? $student->class }}" class="form-control @error('class') is-invalid @enderror" id="class" aria-describedby="emailHelp">
          @error('class')
            <small class="text-danger">{{ $message }}</small>
          @enderror

        </div>
        <div class="mb-3">
          <label for="state" class="form-label">state</label>
          <input type="text" name="state" value="{{ old('state') ?? $student->state }}" class="form-control @error('state') is-invalid @enderror" id="state" aria-describedby="emailHelp">
          @error('state')
            <small class="text-danger">{{ $message }}</small>
          @enderror

        </div>
   

        <button type="submit" class="btn btn-primary">Submit</button>
      </form>
