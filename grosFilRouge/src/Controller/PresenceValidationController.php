<?php

namespace App\Controller;

use Doctrine\ORM\EntityManagerInterface;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use App\Entity\Eleve;
use App\Entity\Seances;
use App\Entity\Presence;

class PresenceValidationController extends AbstractController
{
    #[Route('/presence/validation', name: 'app_presence_validation')]
    public function index(Request $request): Response
    {
        $id = $request->query->get('id');

        return $this->render('presence_validation/index.html.twig', [
            'id' => $id
        ]);
    }
    



    #[Route('/presence/validation/submit', name:'app_presence_validation_submit')]
    public function submit(Request $request, EntityManagerInterface $entityManager)
{

        $name = $request->request->get("nom_eleve");
    $status = $request->request->get("status");
    // Récupération de l'élève en fonction de son nom
    $eleve = $entityManager->getRepository(Eleve::class)->findOneBy(["nom_eleve" => $name]);
    $referer = $request->headers->get('referer');
    $queryParams = [];
    if (!empty($referer)) {
        $queryParams = parse_url($referer, PHP_URL_QUERY);
        parse_str($queryParams, $queryParams);
    }
    
    $id = $queryParams['id'] ?? null;
    
    if (!$eleve) {
        return $this->redirectToRoute('app_presence_validation', ['error' => 'eleve_not_found','id' => $id]);
      }
    
    
    
    // // Récupération de la séance en cours
    $seance = $entityManager->getRepository(Seances::class)->findOneBy(["id" => $id]);
    
    
    
    if (!$seance) {
        throw $this->createNotFoundException('Aucune séance en cours.');
    }
    
    // Mise à jour de la table "presence"
    $presence = $entityManager->getRepository(Presence::class)->findOneBy([
        'eleve' => $eleve,
        'seances' => $seance
    ]);
    
    
    
        if (!$presence) {
            throw $this->createNotFoundException('Aucune présence trouvée pour l\'élève et la séance données.');
        }

        switch ($status) {
            case 'present':
                $presence->setValidationPresence(1);
                break;
            case 'absent-justifie':
                $presence->setValidationPresence(2);
                break;
            case 'absent' :
                $presence->setValidationPresence(0);
                break;
        }

        $entityManager->flush();

        return $this->redirectToRoute('app_presence_validation', ['error' => 'ok']);
    }



    }