<!DOCTYPE html>
<html>
<head>
    <title>Todo App 7</title>
</head>
<body style="font-family: Arial, sans-serif; margin: 50px; background: #f4f4f4;">
    <div style="max-width: 500px; margin: auto; background: white; padding: 20px; border-radius: 8px;">
        <h2>Todo List App 7 (With Update)</h2>

        @if(session('success'))
            <p style="color: green; background: #e2f0d9; padding: 10px; border-radius: 5px;">{{ session('success') }}</p>
        @endif

        <form action="/todo7/add" method="POST" style="display: flex; margin-bottom: 20px;">
            @csrf
            <input type="text" name="title" placeholder="Enter task..." required style="flex: 1; padding: 10px; border: 1px solid #ccc; border-radius: 4px 0 0 4px;">
            <button type="submit" style="padding: 10px 20px; background: #28a745; color: white; border: none; border-radius: 0 4px 4px 0; cursor: pointer;">Add</button>
        </form>

        <table border="1" cellpadding="10" cellspacing="0" style="width: 100%; border-collapse: collapse;">
            <tr style="background: #eee;">
                <th>Task Name</th>
                <th>Actions</th>
            </tr>
            @foreach($tasks as $task)
            <tr>
                <td>{{ $task->title }}</td>
                <td>
                    <a href="/todo7/edit/{{ $task->id }}" style="color: orange; text-decoration: none; margin-right: 15px;">✏ Edit</a>
                    <a href="/todo7/delete/{{ $task->id }}" onclick="return confirm('Delete this?')" style="color: red; text-decoration: none;">❌ Delete</a>
                </td>
            </tr>
            @endforeach
        </table>
    </div>
</body>
</html>