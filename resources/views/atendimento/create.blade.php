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
				<div class="panel-heading">Atendimento
					<a href="{{ route('atendimento') }}" title="Voltar para Atendimento" class="btn btn-default btn-xs pull-right">
						<i class="fa fa-fw fa-mail-reply" aria-hidden="true"></i>
						<span class="hidden-sm hidden-xs">Voltar para </span><span class="hidden-xs">Atendimento</span>
					</a>
				</div>
				<div class="panel-body">
					@include('partials.form-status')
					{!! Form::open(['route' => 'atendimento.criar','method'=>'PUT']) !!}
					<div class="col-xs-12 col-md-6">
						<div class="form-group">
							<label>Solicitante</label>
							<input class="form-control" placeholder="Solicitante" type="text"  name="solicitante" id="solicitante" />
						</div>
						<div class="row">
							<div class="form-group col-xs-12 col-sm-4">
								<label>Contrato</label>
								<input class="form-control" placeholder="Contrato" type="text"  name="contrato" id="contrato" />
							</div>
						</div>
						<div class="form-group">
							<label>Relato do Cliente</label>
							<textarea class="form-control" placeholder="Relato do Cliente" rows="3" name="relato" id="relato"></textarea>
						</div>
						<div class="form-group">
							<label>Observações</label>
							<textarea class="form-control" placeholder="Observações" rows="3" name="observacoes" id="observacoes"></textarea>
						</div>
					</div>
					<div class="col-xs-12 col-md-4">
						<div class="row">
							<div class="form-group col-xs-12 col-sm-6">
								<label>O.S.</label>
								<input class="form-control" placeholder="O.S." type="text"  name="os" id="os" />
							</div>
						</div>
						<div class="row">
							<div class="form-group col-xs-12 col-sm-12">
								<label>Nota</label>
								{!! Form::select('nota', ['' => '-', '1' => 'Resolvido', '2' => 'Transferido', '3' => 'Pendente'], null, ['class' => 'form-control']) !!}
							</div>
						</div>
						<div class="row">
							<div class="form-group col-xs-12 col-sm-12">
								<label>Status</label>
								{!! Form::select('status', ['' => '-', '1' => 'Ativo', '0' => 'Bloqueado'], null, ['class' => 'form-control']) !!}
							</div>
						</div>
						<div class="row">
							<div class="form-group col-xs-12 col-sm-12">
								<label>Data</label>
								<div class="input-group">
									<div class="input-group-addon">
										<i class="fa fa-calendar">
										</i>
									</div>
									<input class="form-control" id="data" name="data" placeholder="mm/dd/yyyy" type="text"/>
								</div>
							</div>
						</div>
					</div>
					<div class="col-xs-12 col-md-2">
						<div class="well">Aviso!
						Lorem ipsum dolor sit amet, consectetur adipiscing elit. Quisque hendrerit, risus vel consequat porta, justo ipsum iaculis nisi, a facilisis metus est vitae elit.</div>
					</div>

					<div class="col-xs-12 col-md-10">
						<hr>
						<button type="submit" class="btn btn-primary btn-md"><i class="fa fa-disk-o"></i> Salvar</button>
					</div>
					{!! Form::close() !!}
				</div>
			</div>
		</div>
	</div>
</div>
@endsection

@section('scripts')
<!-- Include Date Range Picker -->
<script type="text/javascript" src="{{ asset('js/bootstrap-datepicker.min.js') }}"></script>
<script type="text/javascript" src="{{ asset('js/bootstrap-datepicker.pt-BR.min.js') }}"></script>
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-datepicker/1.4.1/css/bootstrap-datepicker3.css"/>

<script>
    $(document).ready(function(){
        var date_input=$('input[name="data"]'); 
        var container=$('.bootstrap-iso form').length>0 ? $('.bootstrap-iso form').parent() : "body";
        date_input.datepicker({
            format: 'mm/dd/yyyy',
            container: container,
            todayHighlight: true,
            autoclose: true,
            language: "pt-BR",
        })
    })
</script>
@endsection
