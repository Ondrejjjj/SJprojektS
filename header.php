<header class="bg-dark fixed-top">
      <!-- navigacny bar -->
        <nav class="navbar navbar-expand-lg navbar-dark bg-dark justify-content-left">
            <img src="img/vlajkad.jpg" width="30" height="30" class="d-inline-block align-top" alt="Logo">
            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav"
                aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse justify-content-center" id="navbarNav">
                <ul class="navbar-nav">
                    <li class="nav-item active">
                        <a class="nav-link" href="index.php" target="_blank">Domov</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="stranka1.php" target="_blank">Informácie</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="stranka2.php" target="_blank">Galeria</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="stranka3.php" target="_blank">Kontakt</a>
                    </li>
                    <?php
                // Ak je používateľ prihlásený, zobrazíme tlačidlo na odhlásenie
                if(isset($_SESSION['username'])) {
                    echo '<li class="nav-item"><a class="nav-link" href="logout.php">Odhlásenie</a></li>';
                } else {
                    // Ak používateľ nie je prihlásený, zobrazíme tlačidlo na prihlásenie
                    echo '<li class="nav-item"><a class="nav-link" href="login.php">Prihlásenie</a></li>';
                }
                ?>
                </ul>
            </div>
        </nav>
        

        </header>