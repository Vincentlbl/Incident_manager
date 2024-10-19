<!DOCTYPE html>
<html lang="fr">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Liste des Incidents</title>
    <link href="https://cdn.jsdelivr.net/npm/tailwindcss@2.2.19/dist/tailwind.min.css" rel="stylesheet">
    <link rel="stylesheet" href="/projet_php/css/style.css">

</head>

<body class="bg-gray-100">

    <?php require_once __DIR__ . '/menu.php'; ?>

    <div class="container mx-auto mt-8">
        <h1 class="text-3xl font-bold mb-4">Liste des incidents</h1>

        <?php if (!empty($incidents)): ?>
            <ul>
                <?php foreach ($incidents as $incident): ?>
                    <li class="mb-2">
                        <fieldset class="border border-gray-300 rounded p-4 bg-white shadow-md">
                            <legend class="font-bold text-lg">Incident #<?php echo $incident['id']; ?></legend>
                            <p><?php echo $incident['description']; ?> - <em><?php echo $incident['status']; ?></em></p>
                            <span class="text-gray-500">[Créé le : <?php echo $incident['created_at']; ?>]</span>
                            <div class="mt-2">
                                <a href="http://localhost/projet_php/public/edit?id=<?php echo $incident['id']; ?>"
                                    class="text-blue-500">Modifier</a>
                                <a href="http://localhost/projet_php/public/delete?id=<?php echo $incident['id']; ?>"
                                    class="text-red-500"
                                    onclick="return confirm('Voulez-vous vraiment supprimer cet incident ?');">Supprimer</a>
                            </div>
                        </fieldset>
                    </li>
                <?php endforeach; ?>
            </ul>


        <?php else: ?>
            <p>Aucun incident trouvé.</p>
        <?php endif; ?>
    </div>

    <footer class="bg-gray-800 text-white text-center p-4 mt-4 fixed bottom-0 w-full ">
        <p>&copy; <?php echo date("Y"); ?> Vincent. Tous droits réservés.</p>
    </footer>

</body>

</html>

