<?php

namespace App;

enum AutomationAction: string
{
    case AutoAcceptBooking = 'auto_accept_booking';
    case SendEmail = 'send_email';
    case AddToContact = 'add_to_contact';
}
