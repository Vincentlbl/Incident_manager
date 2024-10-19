<?php
class HomeController {
    public function index() {
        require_once __DIR__ . '/../View/menu.php';
        
        echo '<!DOCTYPE html>';
        echo '<html lang="fr">';
        echo '<head>';
        echo '<meta charset="UTF-8">';
        echo '<meta name="viewport" content="width=device-width, initial-scale=1.0">';
        echo '<title>Accueil</title>';
        echo '<link href="https://cdn.jsdelivr.net/npm/tailwindcss@2.2.19/dist/tailwind.min.css" rel="stylesheet">';
        echo '<link rel="stylesheet" href="/projet_php/css/style.css">';
        echo '</head>';
        echo '<body class="bg-gray-100">';
        
        echo '<div class="container mx-auto mt-8">';
        echo '<h1 class="text-3xl text-center font-bold mb-4">Bienvenue sur la page d\'accueil du gestionnaire d\'incidents 🐱‍👤</h1>';
        echo '<p>Cliquez sur le menu pour naviguer vers les autres sections :</p>';
        echo '<ul class="list-disc pl-5">';
        echo '<li><a href="/projet_php/public/incidents" class="text-blue-500">Voir la liste des incidents</a></li>';
        echo '<li><a href="/projet_php/public/add" class="text-blue-500">Ajouter un incident</a></li>';
        echo '</ul>';
        echo '</div>';
        
        echo '<footer class="bg-gray-800 text-white text-center p-4 mt-4 fixed bottom-0 w-full">';
        echo '<p>&copy; ' . date("Y") . ' Vincent. Tous droits réservés.</p>';
        echo '</footer>';
        
        
        echo '</body>';
        echo '</html>';
    }
}
