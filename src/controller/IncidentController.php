<?php
require_once __DIR__ . '/../Model/Incident.php';

class IncidentController {
    public function list() {
        $incidents = Incident::getAllGroupedByStatus();
        require_once __DIR__ . '/../View/incidents_view.php';
    }
    

    public function addForm() {
        require_once __DIR__ . '/../View/add_incident_view.php';
    }

    public function create() {
        $description = $_POST['description'] ?? '';
        if (!empty($description)) {
            Incident::create($description);
            header('Location: /Incident_manager-main/public/incidents');
            exit;
        } else {
            echo "La description de l'incident ne peut pas être vide.";
        }
    }

    public function editForm() {
        $id = $_GET['id'] ?? '';
        if (!empty($id)) {
            $incident = Incident::getById($id);
            if ($incident) {
                require_once __DIR__ . '/../View/edit_incident_view.php';
            } else {
                echo "Incident non trouvé.";
            }
        } else {
            echo "ID d'incident invalide.";
        }
    }

    public function update() {
        $id = $_POST['id'] ?? '';
        $description = $_POST['description'] ?? '';
        $status = $_POST['status'] ?? 'Ouvert';
        if (!empty($id) && !empty($description)) {
            Incident::update($id, $description, $status);
            header('Location: /Incident_manager-main/public/incidents');
            exit;
        } else {
            echo "ID ou description manquants.";
        }
    }

    public function delete() {
        $id = $_GET['id'] ?? '';
        if (!empty($id)) {
            Incident::delete($id);
            header('Location: /Incident_manager-main/public/incidents');
            exit;
        } else {
            echo "ID d'incident invalide.";
        }
    }
    
}
