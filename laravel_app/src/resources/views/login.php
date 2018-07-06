<!doctype html>
<html>
<head>
    <title>Login</title>
    <style>
        body { color:gray; }
        h1 { font-size:18pt; font-weight:bold; }
    </style>
</head>
<body>
    <h1>Login</h1>
    <form method="post" action="/login">
        <?php echo csrf_field(); ?>
        <div>
            ID: <input type="text" name="id" placeholder="ID">
        </div>
        <div>
            PASSWORD: <input type="password" name="password" placeholder="PASSWORD">
        </div>
        <input type="submit">
    </form>
</body>