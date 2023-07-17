<!DOCTYPE html>
<html>
<head>
    <title>完了タスク一覧</title>
</head>
<body>
    <h1>完了タスク一覧</h1>

    <table border="1">
        <a href="{{ route('task.list') }}">タスク一覧に戻る</a>
        <tr>
            <th>タスク名</th>
            <th>期限</th>
            <th>重要度</th>
            <th>タスク終了日</th>
        </tr>
        @foreach ($completedTasks as $task)
        <tr>
            <td>{{ $task->name }}</td>
            <td>{{ $task->period }}</td>
            <td>{{ $task->getPriorityString() }}</td>
            <td>
                @if ($task->created_at)
                    {{ $task->created_at->setTimezone('Asia/Tokyo')->format('Y-m-d H:i:s') }}
                @else

                @endif
            </td>
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
    <a href="{{ route('logout') }}">ログアウト</a>
</body>
</html>
