<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Users</title>
    <link rel="stylesheet" href="<?php echo base_url('assets/css/style.css'); ?>">
</head>
<body>
    <h1>Users</h1>
    <a href="<?php echo site_url('user/create'); ?>">Create New User</a>
    <ul>
        <?php foreach ($users as $user): ?>
            <li>
                <?php echo htmlspecialchars($user['name']); ?> - <?php echo htmlspecialchars($user['email']); ?>
                <a href="<?php echo site_url('user/edit/' . $user['id']); ?>">Edit</a>
                <a href="<?php echo site_url('user/delete/' . $user['id']); ?>" onclick="return confirm('Are you sure?')">Delete</a>
            </li>
        <?php endforeach; ?>
    </ul>
</body>
</html>
