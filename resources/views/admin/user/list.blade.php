@extends('admin.layout')

{{-- メインコンテンツ --}}
@section('contets')
        <h1>ユーザー一覧</h1>
        <table border="1">
            <tr>
                <th>ユーザーID
                <th>ユーザー名
                <th>タスク件数
    @foreach ($users as $user)
            <tr>
                <td>{{ $user->id }}
                <td>{{ $user->name }}
                <td>{{ $user->task_num }}
    @endforeach
        </table>
@endsection