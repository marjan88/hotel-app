@extends('app')

@section('content')
<div class="row">
    <h2>Reserve a room</h2>
    <form class="form-inline" action="{{route('accommodation.store')}}" method="POST">
        <input type="hidden" name="_token" value="{{csrf_token()}}" >
        <div class="form-group col-md-6">
            <label for="day">Start date</label>
            <select id="day_start" name="day" class="form-control">
                @for($i = 1; $i <= 31; $i ++)
                <option value="{{$i}}">{{$i}}</option>
                @endfor
            </select>
            <select  name="month_start" class="form-control">
                <option value="1">January</option>
                <option value="2">February</option>
                <option value="3" >March</option>
                <option value="4">April</option>
                <option value="5">May</option>
                <option value="6">June</option>
                <option value="7">July</option>
                <option value="8">August</option>
                <option value="9">September</option>
                <option value="10">October</option>
                <option value="11">November</option>
                <option value="12">December</option>
            </select>
            <select  name="year_start" class="form-control">
                @for($i = 2015; $i <= 2020; $i ++)
                <option value="{{$i}}">{{$i}}</option>
                @endfor
            </select>
        </div>
        <div class="form-group  col-md-6">
            <label for="day">End date</label>
            <select id="day_end" name="day_end" class="form-control">
                @for($i = 1; $i <= 31; $i ++)
                <option value="{{$i}}">{{$i}}</option>
                @endfor
            </select>
            <select name="month_end" class="form-control">
                <option value="1">January</option>
                <option value="2">February</option>
                <option value="3">March</option>
                <option value="4">April</option>
                <option value="5">May</option>
                <option value="6">June</option>
                <option value="7">July</option>
                <option value="8">August</option>
                <option value="9">September</option>
                <option value="10">October</option>
                <option value="11">November</option>
                <option value="12">December</option>
            </select>
            <select name="year_end" class="form-control">
                @for($i = 2015; $i <= 2020; $i ++)
                <option value="{{$i}}">{{$i}}</option>
                @endfor
            </select>
            <button type="submit" class="btn btn-primary">Reserve</button>
        </div>

    </form>

</div>
@stop

