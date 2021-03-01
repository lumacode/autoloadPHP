<?php 

/* 
Cargamos los directorios en donde haremos la busqueda de clases
@array  
*/
const DIRECTORY_SEARCH = ['controllers', 'middlewares'];

function general_autoload($classname)
{

    foreach (DIRECTORY_SEARCH as $directory) 
    {
       /* 
        Comprobamos que exista el directorio antes de incluir 
       */
        if(is_file("$directory/$classname.php"))
        {
            include "$directory/$classname.php";
        }

    }
    
}

//Registramos el autoload de clases
spl_autoload_register('general_autoload');

