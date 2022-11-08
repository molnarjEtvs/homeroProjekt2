@extends('layouts.master')
@section('title','Főoldal')
@section('content')
     @include('menu')
    <div class="container">
        <div class="row">
            <div class="col-12">
                <div>
                    <table class="table table-sm table-dark table-striped table-hover">
                        <tr>
                            <th>#</th>
                            <th>Terem név</th>
                            <th>Hőmérséklet</th>
                            <th>Rögzítés ideje</th>
                        </tr>
                        @foreach ($list as $item)
                            <tr>
                                <td>{{ $item->h_id }}</td>
                                <td>{{ $item->nev }}</td>
                                <td>{{ $item->homerseklet }}</td>
                                <td>{{ $item->datum_ido }}</td>
                            </tr> 
                        @endforeach   
                    </table>
                </div>
            </div>
        </div>
    </div>
@endsection