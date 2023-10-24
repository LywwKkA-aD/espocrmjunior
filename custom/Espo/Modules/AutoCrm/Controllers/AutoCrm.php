<?php
namespace Espo\Modules\AutoCrm\Controllers;

use Espo\Core\Api\Request;
use Espo\Core\Api\Response;
use Espo\ORM\EntityManager;
use stdClass;

class AutoCrm
{    
    private EntityManager $entityManager;

    public function __construct(EntityManager $entityManager)
    {
        $this->entityManager = $entityManager;
    }

    public function getActionFindContacts(Request $request, Response $response): stdClass
      {
         $id = $request->getQueryParam('id');
         $lead = $this->entityManager->getEntityById('Lead', $id);
         $email = $lead->get('emailAddress');

         $contacts = $this->entityManager->getRepository('Contact')->where(['emailAddress' => $email])->find();
         
         $contactNames = [];
         foreach ($contacts as $contact) {
            $contactNames[] = $contact->get('firstName') . ' ' . $contact->get('lastName');
         }

         $result = new stdClass();
         $result->contactNames = $contactNames;
         
         return $result;
      }

}
