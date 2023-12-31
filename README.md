# AutoCrm Module for EspoCRM

This module adds a functionality to find contacts with the same email as the lead.
Documentation: https://docs.espocrm.com/development/

## Files

### `/client/custom/src/my-action-handler.js`
This JavaScript file defines the client-side action handler for the "Find Contacts" action. It sends a request to the `AutoCrm` controller to fetch the contacts and logs the returned names to the console.

### `/custom/Espo/Custom/Resources/metadata/clientDefs/Lead.json`
This JSON file defines the client-side metadata for the `Lead` entity, specifying the layout updates and the addition of the "Find Contacts" action.

### `/custom/Espo/Modules/AutoCrm/Controllers/AutoCrm.php`
This PHP file defines the `AutoCrm` controller, which handles the server-side logic for the "Find Contacts" action. It fetches the lead email, finds matching contacts, and returns their names.

### `/custom/Espo/Modules/AutoCrm/Resources/metadata/scopes/AutoCrm.json`
This JSON file defines the scope metadata for the `AutoCrm` module, specifying the module's entity types and their behaviors.

### `/custom/Espo/Modules/AutoCrm/Resources/routes.json`
This JSON file defines the routes for the `AutoCrm` module, mapping the "Find Contacts" action to its controller and method.

<img width="940" alt="image" src="https://github.com/LywwKkA-aD/espocrmjunior/assets/129105081/f701eb92-94ef-43de-8456-a2cc825ef6be">

<img width="379" alt="image" src="https://github.com/LywwKkA-aD/espocrmjunior/assets/129105081/fa7915e0-85c6-4954-a9e5-f47c7c068634">

<img width="1273" alt="image" src="https://github.com/LywwKkA-aD/espocrmjunior/assets/129105081/a42e12ef-ae19-4494-a1aa-f86ff5cb61c2">


