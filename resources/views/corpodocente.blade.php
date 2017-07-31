@extends('layouts.app')

@section('content')
      <!-- Modal -->
      <div id="modalEmail" class="modal fade">
        <div class="modal-dialog">
          <!-- Modal content-->
          <div class="modal-content">
            <div class="modal-header">
              <h4 class="modal-title title-inline">Contato</h4>
							<span class="glyphicon glyphicon-remove icon-modal" data-dismiss="modal" aria-hidden="true"></span>
            </div>
            <div class="modal-body">
              <form id="emailForm" action="#" method="post">
								<div class="row">
									<div class="col-md-6">
										<div class="form-group">
											<input type="text" class="form-control"	id="from"	name="from"	placeholder="De" disabled>
											<label for="from" class="control-label">De</label>
										</div>
									</div>
									<div class="col-md-6">
										<div class="form-group">
											<input type="text" class="form-control"	id="to"	name="to"	placeholder="Para" disabled>
											<label for="to" class="control-label">Para</label>
										</div>
									</div>
								</div>
								<hr>
								<div class="row">
									<div class="col-md-12">
										<div class="form-group">
											<input type="text" class="form-control"	id="title"	name="title" maxlength="50" placeholder="Assunto">
											<label for="title" class="control-label">Assunto</label>
										</div>
									</div>
									<div class="col-md-12">
										<div class="form-group">
											<textarea style="resize: none;" class="form-control" name="message" rows="8" maxlength="250" id="message"></textarea>
											<label for="message" class="control-label">Mensagem</label>
											<p id="length" class="show-length"><small>0/250</small></p>
										</div>
									</div>
									<div class="col-md-12">
										<div class="form-group">
											<input type="submit" id="send" class="btn btn-info btn-block" value="Enviar">
										</div>
									</div>
								</div>
              </form>
            </div>
            <div class="modal-footer">
              <button type="button" class="btn btn-default" data-dismiss="modal">Cancelar</button>
            </div>
          </div>
        </div>
      </div>

    <table class="table-hover container-fluid table-docente table-striped visible-sm visible-md visible-lg">
      <thead>
        <tr>
          <th class="col-sm-7">Professor</th>
          <th class="col-sm-5">E-mail</th>
          <th class="col-sm-2">Comunicar</th>
        </tr>
      </thead>
      <tbody>
        <tr>
          <td class="col-sm-7">Ariane</td>
          <td class="col-sm-5">ariane@gmail.com</td>
          <td class="col-sm-2"><button type="button" onClick="sendEmailTo('ariane@gmail.com')" class="btn btn-success btn-block"><span class="glyphicon glyphicon-share-alt"></span></button></td>
        </tr>
      </tbody>
    </table>

    <div class="panel-group visible-xs">
      <div class="panel panel-primary">
          <div class="panel-heading" data-toggle="collapse" href="#1">
              <h4 class="panel-title">
                Ariane
              </h4>
          </div>
          <div class="panel-collapse collapse" id="1">
              <div class="panel-body">
                <b>Email</b><br>ariane@gmail.com
                <button type="button" onClick="sendEmailTo('ariane@gmail.com')" class="btn btn-success btn-block btn-mobile">Contatar</button></td>
              </div>
          </div>
      </div>
    </div>
@endsection
