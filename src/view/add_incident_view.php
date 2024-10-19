<!DOCTYPE html>
<html lang="fr">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Ajouter un Incident</title>
    <link href="https://cdn.jsdelivr.net/npm/tailwindcss@2.2.19/dist/tailwind.min.css" rel="stylesheet">

</head>

<body class="bg-gray-100">

    <?php require_once __DIR__ . '/menu.php'; ?>

    <div class="container mx-auto mt-8">
        <h1 class="text-3xl font-bold mb-4">Ajouter un incident</h1>
        <form action="/Incident_manager-main/public/create" method="POST">
            <textarea name="description" class="w-full p-2 border" placeholder="Décrire l'incident..."
                required></textarea>
            <button type="submit" class="bg-black text-white px-4 py-2 mt-2">Ajouter</button>
        </form>
    </div>
    <footer class="bg-gray-800 text-white text-center p-4 mt-4 fixed bottom-0 w-full">
        <p>&copy; <?php echo date("Y"); ?> Vincent. Tous droits réservés.</p>
    </footer>
</body>

</html>
