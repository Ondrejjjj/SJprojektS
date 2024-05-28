<?php

require_once 'tourist_info.php'; // Importujeme triedu TouristInfo

class TouristInfoReader extends TouristInfo {
    public function renderPage() {
        $informations = $this->readTouristInfo(); // Použijeme metódu z dedenej triedy TouristInfo

        echo '<!DOCTYPE html>';
        echo '<html>';
        echo '<head>';
        echo '<title>Čítať turistické informácie</title>';
        echo '<style>
                body {
                    font-family: Arial, sans-serif;
                    margin: 20px;
                    text-align: center;
                }

                h2 {
                    color: #4CAF50;
                }

                table {
                    width: 80%;
                    margin: 0 auto;
                    border-collapse: collapse;
                }

                th, td {
                    padding: 8px;
                    border: 1px solid #ddd;
                }

                th {
                    background-color: #f2f2f2;
                }

                a {
                    text-decoration: none;
                    color: #007bff;
                }

                a:hover {
                    text-decoration: underline;
                }
              </style>';
        echo '</head>';
        echo '<body>';

        echo '<h2>Turistické informácie:</h2>';

        echo '<table>';
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
