<?php

$keywords = "yachts, boats, services, ferran, marine, maintenance, gpr-anitfouling, electrical systems, navigation systems, boat mechanics, winter storage, yacht repair";

if ($_SERVER['REQUEST_URI'] === '/' OR $_SERVER['REQUEST_URI'] === '/index/'){
    
    $titulo = 'Yachts Mallorca Repair Maintenance Storage Antifouling Gpr';
    $descripcion = 'Ferran Marine Service yacht company in the Balearic Islands. We are dedicated to the maintenance, repair, installation, engineering, storage of motor yachts.';
    
}elseif ($_SERVER['REQUEST_URI'] === '/maintenance-yachts-mallorca/'){
    
    $titulo = 'Yacht Maintenance Mallorca Winter Repair Cleaning Custody';
    $descripcion = 'Ferran Marine we take care of the maintenance of your yacht so that you can enjoy it when you need it, a company with more than 15 years of experience';
    
}elseif ($_SERVER['REQUEST_URI'] === '/engineering-yachts-mallorca/' ){
    
    $titulo = 'Mallorca Yacht Engineering Repair Hydraulic Motor Water Propellers';
    $descripcion = 'Ferran Marine we take care of the engineering of your yacht, repair of engines, propellers, hydraulics, water system, propellers, welding, etc ...';
   
}elseif ($_SERVER['REQUEST_URI'] === '/electric-electronic-yachts-mallorca/'){
    
    $titulo = 'Electricity Yates Mallorca Electrical Electronic Installations';
    $descripcion = 'Ferran Marine we carry out all kinds of electronic and electrical installations on your yacht so that you can enjoy sailing in all its splendor';
    
}elseif ($_SERVER['REQUEST_URI'] === '/grp-antifouling-yachts-mallorca/' ){
    
    $titulo = 'Grp Antifouling Yachts Mallorca Fiber Glass Gel Sandblasting Paint';
    $descripcion = 'Ferran Marine maintenance and polishing of hulls on yachts Fiberglass and gel repair, Polishing, Antifouling, Spray painting, Sandblasting';
    
}elseif ($_SERVER['REQUEST_URI'] === '/storage-transport-yachts-mallorca/'){
    
    $titulo = 'Winter Yachts Mallorca Transport Deliveries Skipper Custody';
    $descripcion = 'Ferran Marine Invernaje de Yates in Mallorca, we take care of protecting your yacht so that you can enjoy it when you need it, Skipper Custodia';
    
}elseif ($_SERVER['REQUEST_URI'] === '/yachts-mallorca-contact/'){
    
    $titulo = 'Yachts Mallorca Contact Repair Services Wintering Engineering';
    $descripcion = 'Contact Ferran Marine Service, a leading company in the nautical sector, yacht repairs, winter storage, electrical systems, engineering, antifouling';
    
}elseif ($_SERVER['REQUEST_URI'] === '/politica-privacidad/'){
    
    $titulo = 'Politica de Privacidad Ferran Marine Services';
    $descripcion = 'Ferran Marine descubra nuestra política de privacidad, como tratamos los datos sensibles en nuestra empresa.';
    
}elseif ($_SERVER['REQUEST_URI'] === '/politica-cookies/'){
    
    $titulo = 'Politica de Cookies Ferran Marine Services';
    $descripcion = 'Ferran Marine descubra como tratamos las cookies en nuestra empresa según la legislación';
    
}elseif ($_SERVER['REQUEST_URI'] === '/error404/'){
    
    $titulo = 'Error 404 Ferran Marine Services';
    $descripcion = 'Ferran Marine Error 404';
    
}
