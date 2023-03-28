@extends('layouts.app')

@section('jumbotron')
<div class="jumbotron">
</div>
@endsection

@section('card-container')
<div class="container">
    <span class="jumbotron-label">CURRENT SERIES</span>
    <div class="content">
        <div class="row row-cols-6">
            @foreach($comics as $comic)
            <div class="col">
                <div class="my-card">
                  <a href="{{ route('detail', ['index' => $loop->index]) }}">
                    <img src="{{ $comic['thumb'] }}" class="card-img-top" alt="{{ substr($comic['title'], 0, 8) }}...">
                  </a>
                    <div class="card-body">
                      <p class="card-text">
                        {{ strtoupper($comic['series']) }}
                      </p>
                    </div>
                  </div>
            </div>
            @endforeach
        </div>
        <div class="text-center">
            <button type="button" class="primary-btn">LOAD MORE</button>
        </div>
      </div>
    </div>
</div>
@endsection