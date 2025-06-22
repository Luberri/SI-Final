<?php
namespace app\controllers;

use app\models\TicketModel;
use Flight;

class TicketController {
    public function search() {
        $idClient = Flight::request()->query->idClient ?? null;
        $statut = Flight::request()->query->statut ?? null;
        $priorite = Flight::request()->query->priorite ?? null;
        $ticket = new TicketModel();

        $tickets = $ticket->search($idClient, $statut, $priorite);
        $clients = $ticket->getAllClients();
        // Flight::render('template', $data);

        Flight::render('template', [
            'tickets' => $tickets,
            'clients' => $clients,
            'selectedClient' => $idClient,
            'selectedStatut' => $statut,
            'selectedPriorite' => $priorite,
            'page' => 'ticket_search'
        ]);
    }
}