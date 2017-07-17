@if (session('message'))
<div class="alert alert-success">
  <a href="#" class="close" data-dismiss="alert" aria-label="close">&times;</a>
  {{ session('message') }}
</div>
@endif

@if (session('success'))
<div class="alert alert-success">
  <a href="#" class="close" data-dismiss="alert" aria-label="close">&times;</a>
  <h4>Success</h4>
  {{ session('success') }}
</div>
@endif

@if (session('error'))
<div class="alert alert-danger">
  <a href="#" class="close" data-dismiss="alert" aria-label="close">&times;</a>
  <h4>
    Error
  </h4>
  {{ session('error') }}
</div>
@endif

@if (count($errors) > 0)
<div class="alert alert-danger">
  <a href="#" class="close" data-dismiss="alert" aria-label="close">&times;</a>
  <h4>
    <strong>Error</strong> Por favor verifique o seguinte itens:
  </h4>
  <ul>
    @foreach ($errors->all() as $error)
    <li>{{ $error }}</li>
    @endforeach
  </ul>
</div>
@endif