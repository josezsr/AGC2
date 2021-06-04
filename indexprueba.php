<div class="navbar-fixed color_nav">
        <nav class="color_nav">
            <div class="nav-wrapper">
                <div class="container">
                    <a href="index.php" class="brand-logo">
                        <img class="responsive-img" src="https://i.ibb.co/kXcf6KV/buaplogo.png" id="img1">
                    </a>

                    <a href="" data-target="menu-responsive" class="sidenav-trigger ">
                        <i class="material-icons">menu</i>
                    </a>

                    <ul class="right hide-on-med-and-down">

                        <li>
                            <a href="index.php">Inicio</a>
                        </li>
                        <li>
                            <a href="contacto.php">Contacto</a>
                        </li>
                        <li>
                            <a href="faq.php">FAQ</a>
                        </li>

                        <?php if (!isset($_SESSION['tipo'])) { ?>
                            <li>
                                <a class="dropdown-trigger" href="#!" data-target="dropdown1">

                                    <i class="material-icons ">account_circle
                                        <i class="material-icons right">arrow_drop_down</i>
                                    </i>
                                </a>
                            </li>
                            <?php } else {
                                if ($_SESSION['tipo'] == 0) { ?>
                                <li>
                                    <a class="dropdown-trigger" href="#!" data-target="dropdown2">
                                        ¡Bienvenido! <?php echo utf8_encode($_SESSION['nombre']); ?> (Profesor/a)
                                        <i class="material-icons right">arrow_drop_down</i>

                                    </a>
                                </li>

                            <?php } else if ($_SESSION['tipo'] == 1) { ?>

                                <li>
                                    <a class="dropdown-trigger" href="#!" data-target="dropdown2">
                                        ¡Bienvenido! <?php echo utf8_encode($_SESSION['nombre']); ?>
                                        <i class="material-icons right">arrow_drop_down</i>

                                    </a>
                                </li>

                            <?php } ?>
                        <?php } ?>
                    </ul>
                </div>
            </div>
        </nav>
    </div>

    <ul id="dropdown1" class="dropdown-content">
        <li>
            <a href="login.php">
                Inicia sesión
                <i class="material-icons left">person</i>
            </a>
        </li>
        <li class="divider"></li>
        <li>
            <a href="registro.php">
                ¡Registrate!
                <i class="material-icons left">library_books</i>
            </a>
        </li>
    </ul>

    <ul id="dropdown2" class="dropdown-content">


        <?php
        if ($_SESSION['tipo'] == 0) {
            ?>
            <li>
                <a href="paneladmin.php">
                    Panel de Ctrl
                    <i class="material-icons left">assessment</i>
                </a>
            </li>
        <?php
        } else {
            ?>
            <li>
                <a href="panelusuario.php">
                    Panel de Ctrl
                    <i class="material-icons left">assessment</i>
                </a>
            </li>
        <?php
        }
        ?>
        <li class="divider"></li>
        <li>
            <a href="actions/salir.php">
                Salir
                <i class="material-icons left">directions_walk</i>
            </a>
        </li>
    </ul>

    <ul class="sidenav blue-grey lighten-5" id="menu-responsive">
        <li>
            <div class="user-view">
                <div class="background">
                    <img id="side" src="https://i.ibb.co/VTfGs0Y/Rio-Escultorico.jpg">
                </div>
                <?php if (isset($_SESSION['tipo'])) { ?>
                    <span class="white-text name"><mark><?php echo utf8_encode($_SESSION['nombre']); ?></mark></span>
                    <span class="white-text email"><mark><?php echo  utf8_encode($_SESSION['correo']); ?></mark></span>
                <?php } ?>
                <div class="wallpaper"></div>
            </div>
        </li>



        <li><a class="subheader">Mapa de navegación</a></li>
        <li>
            <a href="index.php"><i class="material-icons">grade</i>Inicio</a>
        </li>

        <li>
            <a href="contacto.php"><i class="material-icons">contact_mail</i>Contacto</a>
        </li>

        <li>
            <a href="faq.php"><i class="material-icons">question_answer</i>FAQ</a>
        </li>

        <li>
            <div class="divider"></div>
        </li>

        <li><a class="subheader">Sesión</a></li>

        <?php if (!isset($_SESSION['tipo'])) { ?>
            <li>
                <a href="login.php"><i class="material-icons real">people</i>Iniciar Sesión</a>
            </li>

            <li>
                <a href="registro.php"><i class="material-icons real">create</i>Registrarse</a>
            </li>

        <?php } else { ?>

            <li>
                <?php
                    if ($_SESSION['tipo'] == 0) {
                        echo "<a href='paneladmin.php'><i class='material-icons real'>assessment</i>Panel de Control</a>";
                    } else {
                        echo "<a href='panelusuario.php'><i class='material-icons real'>assessment</i>Panel de Control</a>";
                    }
                    ?>

            </li>

            <li>
                <a href="actions/salir.php"><i class="material-icons real">directions_walk</i>Salir</a>
            </li>
        <?php } ?>
    </ul>