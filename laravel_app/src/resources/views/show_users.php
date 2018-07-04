<html>
<head>
    <title>Show Users</title>
    <style>
        body { color:gray; }
        h1 { font-size:18pt; font-weight:bold; }
    </style>
</head>
<body>
    <h1>Show Users</h1>
    <table>
    <tr><th>ID</th><th>NAME</th><th>EMAIL</th><th>PASSWORD</th></tr>
    <?php foreach($users as $user){ ?>
    <tr>
        <td><?php echo $user->id; ?></td>
        <td><?php echo $user->name; ?></td>
        <td><?php echo $user->email; ?></td>
        <td><?php echo $user->password; ?></td>
    </tr>
    <?php } ?>
    </table>
    <a href="/user">insert user</a>
</body>