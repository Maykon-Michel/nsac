@extends('layouts.app')

@section('content')
    <table class="table-striped table-hover container-fluid text-center visible-sm visible-md visible-lg" id="boletim">
        <thead>
        <tr>
            <th class="col-sm-3 text-center"></th>
            <th class="col-sm-2 text-center">1&ordm; Bimestre</th>
            <th class="col-sm-2 text-center">2&ordm; Bimestre</th>
            <th class="col-sm-2 text-center">3&ordm; Bimestre</th>
            <th class="col-sm-2 text-center">4&ordm; Bimestre</th>
            <th class="col-sm-1"></th>
        </tr>
        <tr>
            <th class="text-left">Matéria</th>
            <th class="row text-center">
                <div class="col-sm-4" data-toggle="tooltip" title="Média Bimestral">M.B.</div>
                <div class="col-sm-4" data-toggle="tooltip" title="Média da Turma">M.T.</div>
                <div class="col-sm-4" data-toggle="tooltip" title="Faltas">F.</div>
            </th>
            <th class="row text-center">
                <div class="col-sm-4" data-toggle="tooltip" title="Média Bimestral">M.B.</div>
                <div class="col-sm-4" data-toggle="tooltip" title="Média da Turma">M.T.</div>
                <div class="col-sm-4" data-toggle="tooltip" title="Faltas">F.</div>
            </th>
            <th class="row text-center">
                <div class="col-sm-4" data-toggle="tooltip" title="Média Bimestral">M.B.</div>
                <div class="col-sm-4" data-toggle="tooltip" title="Média da Turma">M.T.</div>
                <div class="col-sm-4" data-toggle="tooltip" title="Faltas">F.</div>
            </th>
            <th class="row text-center">
                <div class="col-sm-4" data-toggle="tooltip" title="Média Bimestral">M.B.</div>
                <div class="col-sm-4" data-toggle="tooltip" title="Média da Turma">M.T.</div>
                <div class="col-sm-4" data-toggle="tooltip" title="Faltas">F.</div>
            </th>
            <th class="row text-center">
                <div class="col-md-12" data-toggle="tooltip" title="Média Final">M.F.</div>
            </th>
        </tr>
        </thead>
        <tbody>
        @foreach(Auth::user()->dado->notas as $nota)
            <tr>
                <td class="text-left">{{ $nota->getDisciplina->abreviacao }}</td>
                <td class="row">
                    <div class="col-sm-4">{{ $nota->nb(1) }}</div>
                    <div class="col-sm-4">0</div>
                    <div class="col-sm-4">{{ $nota->fb1 }}</div>
                </td>
                <td class="row">
                    <div class="col-sm-4">{{ $nota->nb(2) }}</div>
                    <div class="col-sm-4">0</div>
                    <div class="col-sm-4">{{ $nota->fb2 }}</div>
                </td>
                <td class="row">
                    <div class="col-sm-4">{{ $nota->nb(3) }}</div>
                    <div class="col-sm-4">0</div>
                    <div class="col-sm-4">{{ $nota->fb3 }}</div>
                </td>
                <td class="row">
                    <div class="col-sm-4">{{ $nota->nb(4) }}</div>
                    <div class="col-sm-4">0</div>
                    <div class="col-sm-4">{{ $nota->fb4 }}</div>
                </td>
                <td>{{ $nota->nf() }}</td>
            </tr>
        @endforeach
        </tbody>
    </table>
    <div class="panel-group visible-xs">
        @foreach(Auth::user()->dado->notas as $nota)
            <div class="panel panel-primary">
                <div class="panel-heading" data-toggle="collapse" href="#{{ $nota->disciplina }}">
                    <h4 class="panel-title">
                        {{ $nota->getDisciplina->descricao }}
                        <strong class="pull-right" data-toggle="tooltip" title="Média Final"></strong>
                    </h4>
                </div>
                <div class="panel-collapse collapse" id="{{ $nota->disciplina }}">
                    <div class="panel-body text-center">
                        <div class="row">
                            <div class="col-xs-3"></div>
                            <div class="col-xs-3" data-toggle="tooltip" title="Média Bimestral">M.B.</div>
                            <div class="col-xs-3" data-toggle="tooltip" title="Média da Turma">M.T.</div>
                            <div class="col-xs-3" data-toggle="tooltip" title="Faltas">F.</div>
                        </div>
                        <div class="row">
                            <div class="col-xs-3" data-toggle="tooltip" title="Primeiro Bimestre">1&ordm; B</div>
                            <div class="col-xs-3">{{ $nota->nb(1) }}</div>
                            <div class="col-xs-3">00.0</div>
                            <div class="col-xs-3">{{ $nota->fb1 }}</div>
                        </div>
                        <div class="row">
                            <div class="col-xs-3" data-toggle="tooltip" title="Segundo Bimestre">2&ordm; B</div>
                            <div class="col-xs-3">{{ $nota->nb(2) }}</div>
                            <div class="col-xs-3">00.0</div>
                            <div class="col-xs-3">{{ $nota->fb2 }}</div>
                        </div>
                        <div class="row">
                            <div class="col-xs-3" data-toggle="tooltip" title="Terceiro Bimestre">3&ordm; B</div>
                            <div class="col-xs-3">{{ $nota->nb(3) }}</div>
                            <div class="col-xs-3">00.0</div>
                            <div class="col-xs-3">{{ $nota->fb3 }}</div>
                        </div>
                        <div class="row">
                            <div class="col-xs-3" data-toggle="tooltip" title="Quarto Bimestre">4&ordm; B</div>
                            <div class="col-xs-3">{{ $nota->nb(4) }}</div>
                            <div class="col-xs-3">00.0</div>
                            <div class="col-xs-3">{{ $nota->fb4 }}</div>
                        </div>
                    </div>
                </div>
            </div>
        @endforeach
    </div>
@endsection