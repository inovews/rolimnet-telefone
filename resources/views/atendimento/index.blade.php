@extends('layouts.app')

@section('content')
<div class="content-header">
	<div class="text-center">
		<h1>Atendimento</h1>
		<p class="lead text-center">Lorem ipsum dolor sit amet, consectetur adipiscing elit.</p>
	</div>
</div>
<div class="container">
	<div class="row">
		<div class="col-md-12">
			<div class="panel panel-default">
				<div class="panel-heading">Atendimento {{ @date("d/m/Y") }}
					<a href="{{ route('atendimento.criar') }}" title="Novo Atendimento" class="btn btn-default btn-sm pull-right">
						<i class="fa fa-fw fa-user-plus" aria-hidden="true"></i>
						Novo Atendimento
					</a>
				</div>
				<div class="panel-body">
					@include('partials.form-status')
					<table class="table table-striped">
						<thead>
							<tr>
								<th>Contrato</th>
								<th>Solicitante</th>
								<th>Relato</th>
								<th>O.S.</th>
								<th>Nota</th>
								<th>Status</th>
								<th>Observações</th>
								<th>Data</th>
								<th>Atualização</th>
								<th>Usuário</th>
							</tr>
						</thead>
						<tbody>
							@foreach ($atendimentos as $atendimento)
							<tr>
								<td>{{ $atendimento->contrato }}</td>
								<td>{{ $atendimento->solicitante }}</td>
								<td>{{ $atendimento->relato }}</td>
								<td>{{ $atendimento->os }}</td>
								<td>
									@if ($atendimento->nota == 1)
									<span class="label label-success">Resolvido</span>
									@elseif ($atendimento->nota == 2)
									<span class="label label-primary">Transferido</span>
									@elseif ($atendimento->nota == 3)
									<span class="label label-warning">Pendente</span>
									@endif 
								</td>
								<td>
									@if ($atendimento->status == 1)
									<span class="label label-success">Ativo</span>
									@elseif ($atendimento->status == 2)
									<span class="label label-danger">Bloqueado</span>
									@endif 
								</td>
								<td>{{ $atendimento->observacoes }}</td>
								<td>{{ $atendimento->created_at->format('d/m/Y')  }}</td>
								<td>{{ $atendimento->updated_at->format('d/m/Y')  }}</td>
								<td>{{ $atendimento->user->name }}</td>
							</tr>
							@endforeach
						</tbody>
					</table>
					{{ $atendimentos->links() }}
				</div>
				<div class="panel-footer">
				<a href="#" title="Relatórios" class="btn btn-default btn-sm" >Relatórios</a>
				</div>
			</div>
		</div>
	</div>
</div>
@endsection