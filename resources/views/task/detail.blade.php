@extends('layout')

{{--title--}}
@section('title')(詳細画面)@endsection

{{--main contents--}}
@section('contents')
    <h1>タスクの詳細閲覧</h1>
    @if (session('front.task_edit_succes') == true)
        タスクを編集しました！！<br>
    @endif
        
    タスク名 : {{ $task->name }}<br>
    期限 : {{ $task->period }}<br>
    重要度 : {{ $task->getPriorityString() }}<br>
    タスク詳細 : <pre>{{ $task->detail }}</pre><br>

        <hr>
        <menu label="リンク">
        <a href="/task/list">タスク一覧</a><br>
        <a href="/logout">ログアウト</a><br>
        </menu>
@endsection