@extends ('layouts.app')

@section("title","Movies")


<div class="container mx-auto mt-4">
    <div class="row justify-content-between">
        @foreach($movies as $movie)
        <div class="card px-0 col-2 mx-1 mb-4">
          <div class="card-header">
            <strong>
            Title :
            </strong> {{ $movie->title }}
          </div>
          <ul class="list-group list-group-flush">
        <li class="list-group-item">
            <strong>
            Original Title :
            </strong>{{ $movie->original_title }}
        </li>
        <li class="list-group-item">
            <strong>
            Nationality :
            </strong>
            {{ $movie->nationality }}
        </li>
        <li class="list-group-item">
        <strong>
            Date :
        </strong>
                {{ $movie->date }}
        </li>
        <li class="list-group-item">
        <strong>
            Vote :
        </strong>
                {{ $movie->vote }}
        </li>
          </ul>
        </div>
        @endforeach
    </div>
</div>