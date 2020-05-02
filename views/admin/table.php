<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="assets/css/styles.css?version=3">
    <link rel="icon" href="assets/images/icon.ico" type="image/x-icon" />
    <script src="assets/js/icons.js"></script>
    <title>Administrando o museu</title>
</head>

<body>

    <!--
// ─── SIDEBAR ────────────────────────────────────────────────────────────────────
-->

    <nav class="my-admin-navbar">
        <ul class="my-navbar-nav">
            <li class="logo">
                <a href="#" class="my-nav-link">
                    <span class="my-link-icon"><i class="fas fa-angle-double-right"></i></span>
                    <span class="my-link-text">Museu do Computador</span>
                </a>
            </li>
            <li class="my-nav-item">
                <a href="#" class="my-nav-link">
                    <span class="my-link-icon"><i class="fas fa-ethernet"></i></span>
                    <span class="my-link-text">Peças</span>
                </a>
            </li>
            <li class="my-nav-item">
                <a href="#" class="my-nav-link">
                    <span class="my-link-icon"><i class="fas fa-bell"></i></span>
                    <span class="my-link-text">Notificações</span>
                </a>
            </li>
            <li class="my-nav-item">
                <a href="#" class="my-nav-link">
                    <span class="my-link-icon"><i class="fas fa-user-edit"></i></span>
                    <span class="my-link-text">Meu usuário</span>
                </a>
            </li>
        </ul>
    </nav>

    <nav class="my-central-navbar">
        <div class="my-nav-item my-dropdown">
            <div class="dropdown">
                <a class="dropdown-toggle" href="#" id="dropdownMenuLink" data-toggle="dropdown" aria-haspopup="true" aria-expanded="true">
                    <span><i class="fas fa-bell"></i></span> <span class="my-notifications-quantity">1</span>
                </a>
                <div class="dropdown-menu" aria-labelledby="dropdownMenuLink">
                    <a class="dropdown-item" href="#">Nenhuma notificação</a>
                </div>
            </div>
        </div>
        <span class="my-nav-item"><i class="fas fa-user-edit"></i></span>
        <span class="my-nav-item"><i class="fas fa-power-off"></i></span>
    </nav>
    <main>
        <div class="my-table-container">
            <div class="my-table-header">
                <div id="left">
                    <h3>Acervo: categoria</h3>
                </div>
                <div id="right">
                    <button type="submit"><i class="fas fa-plus"></i></button>
                    <input type="text" id="search">
                    <button type="submit"><span class="search-icon"><i class="fas fa-search"></i></span></button>
                </div>
            </div>
            <div class="my-table">
                <table class="table table-hover">
                    <thead>
                        <tr>
                            <th scope="col">#</th>
                            <th scope="col">First</th>
                            <th scope="col">Last</th>
                            <th scope="col">Handle</th>
                            <th scope="col">Editar</th>
                            <th scope="col">Excluir</th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr>
                            <th scope="row">1</th>
                            <td>Mark</td>
                            <td>Otto</td>
                            <td>@mdo</td>
                            <td><button class="btn btn-primary"><i class="fas fa-edit"></i></button></td>
                            <td><button class="btn btn-primary"><i class="fas fa-trash"></i></button></td>
                        </tr>
                        <tr>
                            <th scope="row">2</th>
                            <td>Jacob</td>
                            <td>Thornton</td>
                            <td>@fat</td>
                            <td><button class="btn btn-primary"><i class="fas fa-edit"></i></button></td>
                            <td><button class="btn btn-primary"><i class="fas fa-trash"></i></button></td>

                        </tr>
                        <tr>
                            <th scope="row">3</th>
                            <td>Larry</td>
                            <td>the Bird</td>
                            <td>@twitter</td>
                            <td><button class="btn btn-primary"><i class="fas fa-edit"></i></button></td>
                            <td><button class="btn btn-primary"><i class="fas fa-trash"></i></button></td>

                        </tr>
                    </tbody>
                </table>
                <nav class="my-paginator">
                    <div class="my-left-paginator">
                        <span><i class="fas fa-angle-left"></i></span>
                    </div>
                    <div class="my-paginator-content">
                        <span class="my-number-paginator">
                            1
                        </span>
                    </div>
                    <div class="my-paginator-content">
                        <span class="my-number-paginator">
                            2
                        </span>
                    </div>
                    <div class="my-paginator-content">
                        <span class="my-number-paginator">
                            3
                        </span>
                    </div>
                    <div class="my-right-paginator">
                        <span><i class="fas fa-angle-right"></i></span>
                    </div>
                </nav>
            </div>
        </div>
    </main>


    <script src="https://code.jquery.com/jquery-3.4.1.slim.min.js" integrity="sha384-J6qa4849blE2+poT4WnyKhv5vZF5SrPo0iEjwBvKU7imGFAV0wwj1yYfoRSJoZ+n" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js" integrity="sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6" crossorigin="anonymous"></script>

</body>

</html>