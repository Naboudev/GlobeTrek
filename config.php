<?php 
require 'vendor/autoload.php';
use Paydunya\Setup;
use Paydunya\Checkout\Store;


// configurer vos informations de compte PayDunya 

Setup::setMasterKey("twJA43mL-lcEO-up0f-tAwe-6F8xp8olM9hs");
Setup::setPrivateKey("test_private_388Wp3Fq6SaA1H6FJdV4EV6BFxv");
Setup::setPublicKey("test_public_PD2MEU7qQGAFgfLA7pYjHx9GtLq");
Setup::setToken("UaCrlNE94CwmJoptV3bK");

// informations sur votre entreprise ou site 

Store::setName("GlobeTrek");
Store::setTagline("Site de réservations");
Store::setPhoneNumber("755243969");
Store::setWebsiteUrl("http://localhost/projets/cohorte10/GlobeTrek/");
Store::setReturnUrl("http://localhost/projets/cohorte10/GlobeTrek/?page=retour_paiement");
Store::setCancelUrl("http://localhost/projets/cohorte10/GlobeTrek/?page=echec_paiement"); 