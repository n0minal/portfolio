@extends('layouts.main')

@section('title', 'Contato')

@section('content')
<div class="row">
    <div class="col-sm-12">
    	<div class="panel panel-custom huge-top-spacer">
	            <div class="panel-heading">Formulário de Contato</div>
	            <div class="panel-body">
	            	<form action="{{ route('contact.submit') }}" method="POST">
	            		{{ csrf_field() }}
	            		<div class="row mini-top-spacer">
	            			<div class="col-sm-8 col-sm-offset-2">
	            				<div class="form-group">
	            					<label for="name">Digite seu nome:</label>
			            			<input id="name" type="text" name="name" class="form-control" required>
			            		</div>
	            			</div>
	            			<div class="col-sm-8 col-sm-offset-2">
	            				<div class="form-group">
	            					<label for="email">Digite seu email:</label>
	            					<input name="email" type="email" class="form-control" required>
	            				</div>
	            			</div>
	            			<div class="col-sm-8 col-sm-offset-2">
	            				<div class="form-group">
	            					<label for="phone">Digite seu telefone:</label>
			            			<input id="phone" type="text" name="phone" data-mask="(99) 9999-9999" class="form-control" required>
			            		</div>
	            			</div>
	            			<div class="col-sm-8 col-sm-offset-2">
	            				<div class="form-group">
	            					<label for="message">Digite sua mensagem:</label>
			            			<textarea name="message" class="form-control text-box" required></textarea>
			            		</div>
	            			</div>
	            			<div class="col-sm-8 col-sm-offset-2 text-center">
	            				<button type="submit" class="btn btn-custom align-self-center">Enviar Mensagem</button>
	            			</div>
	            		</div>            		            		
	            	</form>
	            </div><!-- end: .panel-body -->
	        </div><!-- end: .panel -->       
    </div><!-- end: .col-sm-12 -->
</div><!-- end: .row -->

<div class="modal fade" tabindex="-1" role="dialog">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
        <h4 class="modal-title">Mensagem Enviada com Sucesso</h4>
      </div>
      <div class="modal-body">
        <p id="modal-message">Sua mensagem foi enviada com sucesso, agradeço pelo contato, sua opinião é muito importante!</p>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
      </div>
    </div>
  </div>
</div>

@endsection
