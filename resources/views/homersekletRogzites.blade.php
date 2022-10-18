@extends('layouts.master')
@section('title','Főoldal')
@section('content')
     @include('menu')
    <div class="container">
        <div class="row">
            <div class="col-12">
                <div class="bg-primary p-3 text-white">
                    <h1>Hőmérséklet rögzítése</h1>
                    <form method="POST">
                        @csrf
                        <div class="my-3">
                            <label for="t_id">Terem száma:</label>
                            <select name="t_id" id="t_id" class="form-select">
                                <option value="0">Válassz!</option>
                                @foreach ($termek as $egyTerem)
                                    <option value="{{ $egyTerem->t_id }}">{{ $egyTerem->nev }}</option>
                                @endforeach
                            </select>
                        </div>

                        <div class="my-3">
                            <label for="homerseklet">Hőmérséklet (celsisus):</label>
                            <input type="number" class="form-control" name="homerseklet" id="homerseklet">
                        </div>

                        <div class="my-3">
                            <button type="submit" class="btn btn-light">Rögzítés</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
@endsection