@extends('admin.template')
@section('content')
<style>
    select.form-control.score {
    width: 80px;
}
</style>
<div class="row">
<form action="{{route('roundresult.store')}}" method="POST">   
{{csrf_field()}}

<input type="hidden" name="tournament_id" value="{{$round->tournament_id}}">
<input type="hidden" name="round_id" value="{{$round->id}}">

    <div class="col-md-12">
        <table class="table table-striped">
            <tr>
                <!-- <th>Player ID</th> -->
                <th>Team Name</th>
                <th>Score</th>
                <!-- <th>Opp ID</th> -->
                <th>Opponent Team Name</th>
            </tr>
            
            
            @foreach($a_players as $key => $player)
            @php 
                $oppAvai = array_key_exists($key,$b_players);
            @endphp
            <tr>
                <!-- <td>  {{$player['id']}}</td> -->
                <td>  {{$player['namewithInitial']}}</td>
                <td>
                    <div class="form-group">
                    <input type="hidden" name="player_id[]" value="{{$player['id']}}">
                    <input type="hidden" name="player_name[]" value="{{$player['namewithInitial']}}">
                    <input type="hidden" name="opp_id[]" value="{{($oppAvai)? $b_players[$key]['id'] : 0}}">
                    <input type="hidden" name="opp_name[]" value="{{($oppAvai)? $b_players[$key]['namewithInitial'] : 0}}">
                    <select class="form-control score" name="score[]">
                        <option value="2-0">2 - 0</option>
                        <option value="0-2">0 - 2</option>
                        <option value="1-1">1 - 1</option>
                        <option value="1f-0f">1f - 0f</option>
                        <option value="0f-1f">0f - 1f</option>
                    </select>
                    </div>
                </td>
                @if($oppAvai)
                    <!-- <td>{{$b_players[$key]['id']}}</td> -->
                    <td>{{$b_players[$key]['namewithInitial']}}</td>
                @else
                    <td></td>
                    <td></td>
                @endif

            </tr>
            @endforeach
        </table>
    </div>    
    <div class="col-md-4">
        <button type="submit">Save</button>
    </div>
</form>
</div>


    <!-- <form action= "{{URL('player')}}" method = "get">
        <input type ="Submit" value = "Do Next Round" />
    </form> -->
@endsection
