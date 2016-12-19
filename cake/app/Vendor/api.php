<?php6

class cwConfig {

}

/**
 * Company CW API class
 */
class Company {

  function getCompany($clientid) {
    if(!$clientid) {throw new Exception("No Client ID Specified!", 1);};

    $cw = new cwAPI();
    $cw->setAction('GetCompany');
    $options = array('id' => $clientid); // ConnectWise RecID
    $cw->setParameters($options);

    return $cw->makeCall();
  }
}

/**
 * Ticket CW API class
 */
class Ticket {

  function getTicket($ticketid) {
    if(!$ticketid) {throw new Exception("No Ticket ID Specified!", 1);};

    $cw = new cwAPI();
    $cw->setAction('GetServiceTicket');
    $options = array('ticketId' => $ticketid); // ConnectWise RecID
    $cw->setParameters($options);

    return $cw->makeCall();
  }

  function getTicketScheduleEntry($ticketid) {
    if(!$ticketid) {throw new Exception("No Ticket ID Specified!", 1);};

    $cw = new cwAPI();
    $cw->setAction('GetTicketScheduleEntry');
    $options = array('id' => $ticketid);
    $cw->setParameters($options);

    return $cw->makeCall();
  }
}

/**
 *
 */
class Agreement {

  function getAgreement($agreementID) {
    if(!$agreementID) {throw new Exception("No Agreement ID Specified!", 1);};

    $cw = new cwAPI();
    $cw->setAction('GetAgreement');
    $options = array('id' => $agreementID);
    $cw->setParameters($options);

    return $cw->makeCall();  }
}

 ?>
