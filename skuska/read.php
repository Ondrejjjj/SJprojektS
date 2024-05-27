<?php

require_once 'tourist_info.php'; // Importujeme triedu TouristInfo

class TouristInfoReader extends TouristInfo {
    public function renderPage() {
        $informations = $this->readTouristInfo(); // Použijeme metódu z dedenej triedy TouristInfo

        echo '<!DOCTYPE html>';
        echo '<html>';
        echo '<head>';
        echo '<title>Čítať turistické informácie</title>';
        echo '</head>';
        echo '<body>';

        echo '<h2>Turistické informácie:</h2>';

        echo '<table border="1">';
        echo '<tr>';
        echo '<th>ID</th>';
        echo '<th>Lokalita</th>';
        echo '<th>Typ</th>';
        echo '<th>Info</th>';
        echo '</tr>';

        foreach ($informations as $info) {
            echo '<tr>';
            echo '<td>' . $info['id'] . '</td>';
            echo '<td>' . $info['location'] . '</td>';
            echo '<td>' . $info['type'] . '</td>';
            echo '<td>' . $info['info'] . '</td>';
            echo '</tr>';
        }

        echo '</table>';
        echo '<br>';
        echo '<a href="info.php">Späť na formulár</a>';
        echo '</body>';
        echo '</html>';
    }
}

// Vytvoríme objekt pre zobrazenie turistických informácií
$reader = new TouristInfoReader();
$reader->renderPage();

?>
