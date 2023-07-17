@extends('layout')

{{-- タイトル --}}
@section('title')(購入済み「買うもの」一覧画面)@endsection

{{-- メインコンテンツ --}}
@section('contets')
        <h1>購入済み「買うもの」一覧</h1>
        <a href="/shopping_list/list">「買うもの」一覧に戻る</a><br>
        <table border="1">
        <tr>
            <th>「買うもの」名
            <th>購入日
        @foreach ($completedTasks as $task)
        <tr>
            <td>{{ $task->name }}</td>
            <td>{{ $task->created_at->format('Y/m/d') }}</td>
        </tr>
        @endforeach
    </table>

    <p>現在{{ $completedTasks->currentPage() }}ページ目</p>
    <p>
        @if ($completedTasks->onFirstPage())
    最初のページ / 前に戻る /
        @else
            <a href="{{ $completedTasks->url(1) }}">最初のページ</a> /
        @endif

        @if ($completedTasks->previousPageUrl())
            <a href="{{ $completedTasks->previousPageUrl() }}">前に戻る</a> /
        @endif

        @if ($completedTasks->hasMorePages())
            <a href="{{ $completedTasks->nextPageUrl() }}">次に進む</a>
        @endif
    </p>
    <hr> <!-- 横ライン -->
    <a href="/logout">ログアウト</a><br>
</body>
</html>
