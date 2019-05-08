<?php 
  require_once("view/template.php");
?>

<body class="text-center">
    <form class="form-signin">
        <img class="mb-4" src="../img/download.png" alt="" width="72" height="72">
        <h1 class="h3 mb-3 font-weight-normal">Logar ao Sistema</h1>
        <label for="inputEmail" class="sr-only">Email address</label>
        <input type="email" id="inputEmail" class="form-control" placeholder="Email address" required autofocus>
        <label for="inputPassword" class="sr-only">Password</label>
        <input type="password" id="inputPassword" class="form-control" placeholder="Password" required>
        
        <button class="btn btn-lg btn-primary btn-block" type="submit">Sign in</button>
        <p class="mt-5 mb-3 text-muted">&copy;2019</p>
    </form>
</body>
</html>