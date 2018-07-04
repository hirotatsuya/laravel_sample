<html>
<head>
    <title>User</title>
    <style>
    body { color:gray; }
    h1 { font-size:18pt; font-weight:bold; }
    </style>
</head>
<body>
    <h1>User</h1>
    <p><?php echo $message; ?></p>
    <form method="post" action="/user">
        <?php echo csrf_field(); ?> 
        <input type="text" name="name" placeholder="名前">
        <input type="text" name="email" placeholder="メールアドレス">
        <input type="text" name="password" placeholder="パスワード">
        <input type="submit">
    </form>
    <a href="/gotohello">gotohello</a>
</body>