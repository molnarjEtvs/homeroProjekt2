@extends('layouts.master')
@section('title','Főoldal')
@section('content')
     @include('menu')
    <div class="container">
        <div class="row">
            <h1>Aktualitások</h1>

            <div class="col-6">
                <div class="bg-dark text-white p-3 rounded">
                    <h1>Település info</h1>
                    <select name="" id="telepules" class="form-select" onchange="idojarasAdatok();">
                        @foreach ($telepulesek as $item)
                            <option value="{{$item->lat}}|{{$item->lon}}">{{$item->nev}}</option>
                        @endforeach
                    </select>

                    <h2 id="tp">N/A</h2>
                    <h3><span id="temp">N/A</span>&deg;C</h3>
                    <img src="" id="kep"><br>
                    Széladatok:<br>
                    Sebesség: <span id="wind_speed">N/A</span> km/h<br>
                    Fok: <span id="wind_deg">N/A</span>&deg;<br>
                    Lökésérték: <span id="wind_gust">N/A</span> m/s
                </div>
            </div>

            @foreach ($aktualis as $item)
                <div class="col-3">
                    <div class="text-center text-white rounded p-3
                    @if($item->homerseklet<=15)
                        bg-primary
                    @elseif($item->homerseklet>15 && $item->homerseklet<=18)
                        bg-success
                    @else
                        bg-danger
                    @endif
                    ">
                        <span class="fw-bold display-4">{{$item->homerseklet}}&deg; C</span>
                        <br>
                        {{$item->nev}}
                        <br>
                        {{$item->datum_ido}}
                    </div>
                </div>
            @endforeach
        </div>
    </div>
     
<script>

$(document).ready(function(){
    idojarasAdatok();
});

function idojarasAdatok(){
    var latLon = $("#telepules").val();
    $.ajax({
            url:"./idojaras-lekeres",
            type:"POST",
            headers:{
                "X-CSRF-TOKEN":$('meta[name="csrf-token"]').attr("content")
            },
            data:{"latLon":latLon},
            cache:false,
            async:false,
            beforeSend:function(){
                
            },
            success:function(d){
                var telepules = d.data.telepules;
                var temp = d.data.temp;
                var wind_speed = d.data.wind_speed;
                var wind_deg = d.data.wind_deg;
                var kepUrl = d.data.kepUrl;
                $("#tp").html(telepules);
                $("#temp").html(temp);
                $("#wind_speed").html(wind_speed);
                $("#wind_deg").html(wind_deg);
                $("#kep").attr("src",kepUrl);
            }
        });



    
}

</script>

@endsection