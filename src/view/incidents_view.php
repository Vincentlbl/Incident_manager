<!DOCTYPE html>
<html lang="fr" dir="ltr">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Liste des Incidents</title>
    <link href="https://cdn.jsdelivr.net/npm/tailwindcss@2.2.19/dist/tailwind.min.css" rel="stylesheet">
</head>

<body class="bg-gray-100">

    <?php require_once __DIR__ . '/menu.php'; ?>

    <div class="container mx-auto mt-8">
        <h1 class="text-3xl font-bold mb-4">Liste des incidents</h1>

        <?php
        $statuses = ['Ouvert', 'En cours', 'Résolu']; // Liste des statuts possibles

        foreach ($statuses as $status) {
            echo '<h2 class="text-xl font-bold mt-8">' . $status . ' :</h2>';
            echo '<ul>';

            // Afficher les incidents pour chaque statut
            foreach ($incidents as $incident) {
                if ($incident['status'] === $status) {
                    echo '<li class="mb-2">';
                    echo '<fieldset class="border border-gray-300 rounded p-4 bg-white shadow-md">';
                    echo '<legend class="font-bold text-lg">Incident #' . $incident['id'] . '</legend>';
                    echo '<p>' . $incident['description'] . ' - <em>' . $incident['status'] . '</em></p>';
                    echo '<span class="text-gray-500">[Créé le : ' . $incident['created_at'] . ']</span>';
                    echo '<div class="mt-2 flex">';
                    echo '<a href="http://localhost/projet_php/public/edit?id=' . $incident['id'] . '" class="text-blue-500 ">Modifier</a>';
                    echo '<a href="http://localhost/projet_php/public/delete?id=' . $incident['id'] . '" class="text-red-500 ml-2" onclick="return confirm(\'Voulez-vous vraiment supprimer cet incident ?\');">Supprimer</a>';
                    echo '</div>';
                    echo '</fieldset>';
                    echo '</li>';
                }
            }

            echo '</ul>';
        }
        ?>

        <?php if (empty($incidents)): ?>
            <p>Aucun incident trouvé.</p>
        <?php endif; ?>
    </div>

    <footer class="bg-gray-800 text-white text-center p-4 mt-4 fixed bottom-0 w-full">
        <p>&copy; <?php echo date("Y"); ?> Vincent. Tous droits réservés.</p>
    </footer>

</body>

</html>
