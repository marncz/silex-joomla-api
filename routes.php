<?php
$app = JFactory::getApplication('site');

require_once JPATH_BASE . '/components/com_contact/models/contact.php';
require_once JPATH_ADMINISTRATOR . '/components/com_contact/models/contacts.php';

$silex->get('/contacts', function () {

  $ContactModel = new ContactModelContacts();
  $contacts = $ContactModel->getItems();
  echo "<pre>";
  print_r ( $contacts );
  return true;

});
