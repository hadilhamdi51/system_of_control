
@include{layouts.homa}

<h2>Complaints details</h2>
<div class="card mb-3">
    <div class="card-body">
      <h5 class="card-title">{{ $reclamations->description }}<span class="badge bg-primary">{{ $reclamations->description }}</span></h5>
      <h5 class="card-title">{{ $reclamations->created_at }}<span class="badge bg-primary">{{ $reclamations->created_at}}</span></h5><br>
      <h5 class="card-title">{{ $reclamations->updated_at}}<span class="badge bg-primary">{{ $reclamations->updated_at}}</span></h5>
    </div>
  </div>
