<?php
    require_once '../frm/init.php';
    
    $page = new Ftl_PageBO();
    $page->setTitle("Listado de formularios registrados");
    $page->loadSripts("tooltip,form,checkbox");
    $page->checkSession();
    $opciones = array (
        
        'dataSource'        => array (
            'class'         => 'Class_Registrado',
            'method'        => 'obtenerListado'
        ),
        'table'             => 'forms,xforms',
        'fields'                => array (
				'evento' => array('title'=>'Evento','type'=>'text','filter'=>true, 'export'=>true),		
				'dni'   => array('title'=>'DNI','type'=>'text','filter'=>true, 'export'=>true),
				'apellido'  => array('title'=>'Apellido','filter'=>true),
				'apellido2'=> array(    'title'=>'Apellido2','show'=>false,'export'=>true),
				'nombre'    => array('title'=>'Nombre','type'=>'text','filter'=>true),
				'estadocivil'  => array('title'=>'Estado Civil'),
				'fechanac'  => array('title'=>'Fecha de Nacimiento','export'=>true),			
				'codpostal'  => array('title'=>'Código Postal','export'=>true),
				'localidad'  => array('title'=>'Localidad','filter'=>true),
				'telefono'  => array('title'=>'Teléfono'),
				'email'  => array('title'=>'Email'),
				'timest'  => array('title'=>'Fecha y Hora'),
				'patente'  => array('title'=>'Matrícula'),
				'canthijos'  => array('title'=>'Hijos', 'export'=>true),
				'ocupacion'  => array('title'=>'Ocupación', 'export'=>true),			
				'deportes'  => array('title'=>'Deportes', 'export'=>true),			
				'auto'  => array('title'=>'Tiene auto', 'export'=>true),			
				'marca'  => array('title'=>'Marca','filter'=>true, 'export'=>true),			
				'modelo'  => array('title'=>'Modelo','filter'=>true, 'export'=>true),			
				'cambiaauto'  => array('title'=>'Cambia el auto', 'export'=>true),			
				'cmarca'  => array('title'=>'Nueva Marca','filter'=>true, 'export'=>true),			
				'cmodelo'  => array('title'=>'Nuevo Modelo','filter'=>true, 'export'=>true),			
				'masinfo'  => array('title'=>'Mas Info', 'export'=>true),			
				'suscribe'  => array('title'=>'Newsletter', 'export'=>true),			
				'aceptatyc'  => array('title'=>'Legales', 'export'=>true),			
				'registro'  => array('title'=>'Registrar en MyCitroen', 'export'=>true)
        ),

        'fieldId'               => 'id',
        
        'canOrder'          => false,
		'canDelete'         => true,
        'orderBy'           => 'timest|DESC',

        'showActions'       => true,
        
        'resPerPage'        => 100,

    );


    $list = new Ftl_ListBO( $opciones );
    

    $page->showTop();
    $list->show();
    $page->showFoot();
 ?>
