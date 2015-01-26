<?php

function parseUrl()
{
    //ejemplo de lo que nos llega: /usuarios/update/id=0
    //ejemplo de lo que nos usamos:  /usuarios.php?action=update&id=0
    $actions = array('usuarios'=>array('select','insert','delete', 'update'));
    $request = array();    
    
    $url = $_SERVER['REQUEST_URI'];
    if(isset($url)){
        $url = explode("/", $url);
        
        // Si existe en la carpeta controllers
        if(file_exists('../modules/application/src/application/controllers/'.strtolower($url['1'])))
        {
            //si exise action de controller 
            if(isset($url[2]) && in_array(strtolower($url['2']), $actions[strtolower($url['1'])]))
            {
                $request = $url[1].".php?action=".$url[2];
                /*$request=array('controller'=>'x',
                    'action'=>'y',
                    'params'=>array('param1'=>'val1',
                        'param2'=>'val2')
                );*/
            }
        }
    }
   

    // 
   
    
    return $request;
}