@extends('admin.template')
@section('content')

<form action="{{route('tournament.show',$tournament->id)}}"></form>
<div class="container my-2">
    <div class="card">
        <div class="card-body">
            <div class="container my-2">
                <div class="col-md-15">
                        <table class="table table-striped table-responsive-md">
                            <tr>
                                <th>Tournament ID</th>
                                <th>Tournament Name</th>
                                <th>Tournament Type</th>
                                
                                <th>Start Date</th>
                                <th>End Date</th>
                                <th>Tiebreak</th>
                            </tr>
                            <tr>
                                <td> {{$tournament->id}} </td>
                                <td> {{$tournament->name}} </td>
                                <td> {{$tournament->type}} </td>
                                <td> {{$tournament->startDate}} </td>
                                <td> {{$tournament->endDate}} </td>
                                <td> {{$tournament->tiebreakname}} </td>
                            </tr>
                           
                        </table>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection

