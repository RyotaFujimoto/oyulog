@extends('layouts.app')
   
   @section('content')
   
    <table class="table table-bordered">
        <tr>
            <th>名前</th>
            <td>{{ $oyulog->name }}</td>
        </tr>
        <tr>
            <th>値段</th>
            <td>{{ $oyulog->price }}</td>
        </tr>
        <tr>
            <th>場所</th>
            <td>{{ $oyulog->place }}</td>
        </tr>
        <tr>
            <th>写真</th>
            <td>{{ $oyulog->image }}</td>
        </tr>
    </table>
    
      {!! link_to_route('oyulogs.edit', 'このログを編集', ['id' => $oyulog->id], ['class' => 'btn btn-default']) !!}
      
     
    {!! Form::model($oyulog, ['route' => ['oyulogs.destroy', $oyulog->id], 'method' => 'delete']) !!}
    {!! Form::submit('削除', ['class' => 'btn btn-danger']) !!}
    {!! Form::close() !!}
    
@endsection