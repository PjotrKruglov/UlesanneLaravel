@extends('layouts.app') <!-- lehe vormistamine -->

@section('content') <!-- lehe sisu -->
    <h1 class="text-center bg-primary">Films</h1>
    @if(empty($films)) <!-- filmid puuduvad -->
        <p>There are no films</p>
    @else
        @foreach ($films as $film) <!-- iga filmi jaoks linki printimine -->
            <div class="list-group">
                <!--<a href="films/{{$film->film_id}}" class="list-group-item list-group-item-info">{{$film->title}}</a>-->
                <a href="{{URL::to('films/'.$film->film_id)}}" class="list-group-item list-group-item-info">{{$film->title}}</a>     
            </div>
        @endforeach
    @endif
@stop
