@extends('layout')

@section('title', 'Trang chủ')

@section('content')

<div>
        <div class="card">
            <div class="card-body">
            <table class="table">
                <thead>
                    <th>Id</th>
                    <th>title</th>
                    <th>thumbnail</th>
                    <th>author</th>
                    <th>publisher</th>
                    <th>Publication</th>
                    <th>Price</th>
                    <th>Quantity</th>
                    <th>Category_id</th>
                    <th>Thao tác</th>
                </thead>
                <tbody>
                    @foreach ($posts as $index => $post )
                        <tr>
                            <td>{{ $index+1 }}</td>
                            <td>{{ $post->title}}</td>
                            <td><img src="https://tse2.mm.bing.net/th?id=OIP.3RS85GyGZb46NrQHEwAq9wHaIB&pid=Api&P=0&h=220" alt="" width="100"></td>
                            <td>{{ $post->author}}</td>
                            <td>{{ $post->publisher}}</td>
                            <td>{{ $post->Publication}}</td>
                            <td>{{ $post->Price}}</td>
                            <td>{{ $post->Quantity}}</td>
                            <td>{{ $post->category_id}}</td>
                            <td>
                                <a href="{{route('detail', $post->id)}}" class="btn btn-danger">Chi tiết</a>
                                <button class="btn btn-warning">Sửa</button>
                                <button class="btn btn-primary">Xóa</button>
                            </td>
                        </tr>
                    @endforeach
                </tbody>
            </table>
        </div>
    </div>
    <a href="{{route('detail', $post->id)}}" class="btn btn-danger"><h3>{{ $post->title}}</h3></a>
</div>

@endsection