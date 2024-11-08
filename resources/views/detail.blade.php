@extends('layout')

@section('title', $post->title)

@section('content')

<div>
        <div class="card">
            <div class="card-body">
            <div>
                <h3>{{ $post->title }}</h3>
                <div><img src="https://tse2.mm.bing.net/th?id=OIP.3RS85GyGZb46NrQHEwAq9wHaIB&pid=Api&P=0&h=220" alt="{{ $post->title}}" width="100"></div>
                <div>
                    {{ $post->author }}
                </div>
                <div>
                    {{ $post->publisher }}
                </div>
                <div>
                    {{ $post->Publication }}
                </div>
                <div>
                    {{ $post->Price }}
                </div>
                <div>
                    {{ $post->Quantity }}
                </div>
                <div>
                    {{ $post->category_id }}
                </div>
             </div>
        </div>
    </div>
</div>

@endsection