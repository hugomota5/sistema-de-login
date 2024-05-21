<!-- Página Inicial -->
<!DOCTYPE html>
<html lang="pt-BR">

<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Sistema de Login</title>
    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="/lib/bootstrap-5.3.3-dist/css/bootstrap.min.css" />
    <!-- Custom CSS -->
    <link rel="stylesheet" href="/assets/css/styles.css" />
</head>

<body>
    <main id="login">
        <div class="container">
            <div class="login-row">
                <div class="login-column">
                    <div class="login-box">
                        <form id="login-form" class="form">
                            <div class="mb-3 form-floating">
                                <input type="email" class="form-control" id="floatingInput"
                                    placeholder="name@example.com" />
                                <label for="floatingInput">Usuário*</label>
                                <div id="emailHelp" class="form-text">
                                    Nunca compartilharemos seu usuário com mais ninguém.
                                </div>
                            </div>
                            <div class="mb-3 form-floating">
                                <input type="password" class="form-control" id="floatingPassword"
                                    placeholder="Password" />
                                <label for="floatingPassword">Password</label>
                            </div>
                            <div class="mb-3 form-check">
                                <input type="checkbox" class="form-check-input" id="exampleCheck1" />
                                <label class="form-check-label" for="exampleCheck1">Lembrar-me</label>
                            </div>
                            <button type="submit" class="btn btn-primary">Acessar</button>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </main>

    <!-- jQuery (opcional, se necessário para plugins) -->
    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
    <!-- Bootstrap JS Bundle (com Popper incluído) -->
    <script src="/lib/bootstrap-5.3.3-dist/js/bootstrap.min.js"></script>
    <!-- Custom JS -->
    <script src="/assets/js/scripts.js"></script>
</body>

</html>