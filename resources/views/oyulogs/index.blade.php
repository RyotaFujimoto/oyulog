@extends('layouts.app')
    
@section('content')

    <h1>温泉一覧</h1>

    @if (count($oyulogs) > 0)
        <table class="table table-striped">
            <thead>
                <tr>
                    <th>ID</th>
                    <th>名前</th>
                    <th>値段</th>
                    <th>場所</th>
                    <th>写真</th>
                </tr>
            </thead>
            <tbody>
                @foreach ($oyulogs as $oyulog)
                    <tr>
                        <td>{!! link_to_route('oyulogs.show', $oyulog->id, ['id' => $oyulog->id]) !!}</t>
                        <td>{{ $oyulog->name }}</td>
                        <td>{{ $oyulog->price }}</td>
                        <td>{{ $oyulog->place }}</td>
                        <td>{{ $oyulog->image }}</td>
                    </tr>
                @endforeach
            </tbody>
        </table>
    @endif
    {!! link_to_route('oyulogs.create', '温泉を登録', null, ['class' => 'btn btn-primary']) !!}
@endsection