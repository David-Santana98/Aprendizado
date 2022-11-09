<html>

<head>
    <title>PHP Test</title>
</head>

<body>
    <?php require_once 'session.php'; ?>
    <h1> A sua sessão foi iniciada em
        <?php echo $_SESSION['ultimo_login'] ?> e você ja fez
        <?php echo $_SESSION['reqs'] ?> requisições
    </h1>
  


</body>

</html>