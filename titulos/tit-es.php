<?php

$keywords = "yates, barcos, servicios, ferran, marine, mantenimiento, gpr-anitfouling, sistemas electricos, sistemas de navegacion, mecanica barcos, invernaje, reparacion yate";

if ($_SERVER['REQUEST_URI'] === '/yates-mallorca-servicios/'){
    
    $titulo = 'Yates Mallorca Reparacion Mantenimiento Almacenaje Antifouling Gpr';
    $descripcion = 'Ferran Marine Service empresa de yates en las baleares. Nos dedicamos al mantenimiento, reparación, instalación, ingeniería, almacenaje de yates de motor.';
   
}elseif ($_SERVER['REQUEST_URI'] === '/mantenimiento-yates-mallorca/'){
    
    $titulo = 'Mantenimiento Yates Mallorca Reparacion Invernaje Limpieza Custodia';
    $descripcion = 'Ferran Marine nos encargamos del mantenimiento de su yate para que usted lo pueda disfrutar cuando lo necesite, empresa con más de 15 años de experiencia';
   
    
}elseif ($_SERVER['REQUEST_URI'] === '/ingenieria-yates-mallorca/'){
    
    $titulo = 'Ingenieria Yates Mallorca Reparacion Motor Hidraulica Agua Helices';
    $descripcion = 'Ferran Marine nos encargamos de la ingeniería de su yate, reparación de motores, propulsores, hidráulica, sistema de aguas, helices, soldaduras, etc...';
   
   
}elseif ($_SERVER['REQUEST_URI'] === '/electricidad-yates-mallorca/'){
    
    $titulo = 'Electricidad Yates Mallorca Instalaciones Electronicas Electricas';
    $descripcion = 'Ferran Marine realizamos todo tipo de instalaciones electrónicas y eléctricas en su yate para que disfrute de la navegación en todo su esplendor';
    
}elseif ($_SERVER['REQUEST_URI'] === '/grp-antifouling-yates-mallorca/'){
    
    $titulo = 'Grp Antifouling Yates Mallorca Fibra Vidrio Gel Chorro Arena Pintura';
    $descripcion = 'Ferran Marine mantenimiento y pulido de cascos en yates Reparación de fibra de vidrio y gel, Pulido, Antifouling, Pintura con spray, Chorro Arena';
    
    
}elseif ($_SERVER['REQUEST_URI'] === '/almacenaje-transporte-yates-mallorca/'){
    
    $titulo = 'Invernaje Yates Mallorca Transporte Entregas Skipper Custodia';
    $descripcion = 'Ferran Marine Invernaje de Yates en Mallorca, nos encargamos de proteger su yate para que usted lo pueda disfrutar cuando lo necesite, Skipper Custodia';
    
}elseif ($_SERVER['REQUEST_URI'] === '/yates-mallorca-contacto/' ){
    
    $titulo = 'Yates Mallorca Contacto Reparacion Servicios Invernaje Ingeneria';
    $descripcion = 'Contacte con Ferran Marine Service empresa lider en el sector de la náutica, reparaciones de yates, invernaje, sistemas electricos, ingenieria, antifouling';
    
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


