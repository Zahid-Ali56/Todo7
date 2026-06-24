<!DOCTYPE html>
<html>
<head>
    <title>Edit Task</title>
</head>
<body style="font-family: Arial, sans-serif; margin: 50px; background: #f4f4f4;">
    <div style="max-width: 500px; margin: auto; background: white; padding: 20px; border-radius: 8px; box-shadow: 0px 0px 10px rgba(0,0,0,0.1);">
        <h2>Edit Task</h2>

        <form action="/todo7/update/<?php echo e($task->id); ?>" method="POST">
            <?php echo csrf_field(); ?>
            <input type="text" name="title" value="<?php echo e($task->title); ?>" required style="width: 95%; padding: 10px; margin-bottom: 15px; border: 1px solid #ccc; border-radius: 4px;">
            <br>
            <button type="submit" style="padding: 10px 20px; background: #007bff; color: white; border: none; border-radius: 4px; cursor: pointer;">Update Task</button>
            <a href="/todo7" style="margin-left: 10px; color: gray; text-decoration: none;">Cancel</a>
        </form>
    </div>
</body>
</html><?php /**PATH C:\Users\user\Desktop\my-stable-app\resources\views/todo7_edit.blade.php ENDPATH**/ ?>