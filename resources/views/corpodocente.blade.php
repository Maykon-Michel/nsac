@extends('layout.app')

@section('content')
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
            <td class="col-sm-2">
                <button type="button" onClick="sendEmailTo('ariane@gmail.com')" class="btn btn-success btn-block">
                    <span class="glyphicon glyphicon-share-alt btn-block"></span>
                </button>
            </td>
        </tr>
        </tbody>
    </table>
@endsection
