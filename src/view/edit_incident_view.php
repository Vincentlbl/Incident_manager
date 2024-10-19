<!DOCTYPE html>
<html lang="fr">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Modifier un Incident</title>
    <link href="https://cdn.jsdelivr.net/npm/tailwindcss@2.2.19/dist/tailwind.min.css" rel="stylesheet">

</head>

<body class="bg-gray-100">

    <?php require_once __DIR__ . '/menu.php'; ?>

    <div class="container mx-auto mt-8">
        <h1 class="text-3xl font-bold mb-4">Modifier un incident</h1>

        <?php if (!empty($incident)): ?>
            <form action="/projet_php/public/update" method="POST">
                <input type="hidden" name="id" value="<?php echo $incident['id']; ?>">
                <label for="description" class="block text-gray-700 text-sm font-bold mb-2">Description de l'incident</label>
                <textarea id="description" name="description" class="w-full p-2 border"><?php echo htmlspecialchars($incident['description']); ?></textarea>

                <label for="status" class="block text-gray-700 text-sm font-bold mb-2 mt-4">Statut</label>
                <select id="status" name="status" class="w-full p-2 border">
                    <option value="Ouvert" <?php echo ($incident['status'] == 'Ouvert') ? 'selected' : ''; ?>>Ouvert</option>
                    <option value="En cours" <?php echo ($incident['status'] == 'En cours') ? 'selected' : ''; ?>>En cours</option>
                    <option value="Résolu" <?php echo ($incident['status'] == 'Résolu') ? 'selected' : ''; ?>>Résolu</option>
                </select>

                <button type="submit" class="bg-blue-500 text-white px-4 py-2 mt-4">Mettre à jour</button>
            </form>
        <?php else: ?>
            <p class="text-red-500">Erreur : Incident introuvable.</p>
        <?php endif; ?>
    </div>

</body>

</html>
