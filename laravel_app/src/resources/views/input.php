<html>
<head>
    <title>Sample</title>
    <style>
    body { color:gray; }
    h1 { font-size:18pt; font-weight:bold; }
    </style>
</head>
<body>
    <h1>Sample</h1>
    <p><?php echo $message; ?></p>
    <form method="post" action="/input">
        <?php echo csrf_field(); ?> 
        <input type="text" name="str">
        <input type="submit">
    </form>
    <a href="/gotohello">gotohello</a>
</body>