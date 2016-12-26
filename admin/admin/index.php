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
        'table'             => 'forms',
        'fields'                => array (
				'dni'   => array('title'=>'DNI','type'=>'text','filter'=>true, 'export'=>true),
				'nombre'    => array('title'=>'Nombre','type'=>'text','filter'=>true,'export'=>true),
				'apellido'  => array('title'=>'Apellido','filter'=>true,'export'=>true),
				'email'  => array('title'=>'Email','export'=>true),
                'localidad'  => array('title'=>'Localidad','filter'=>true,'export'=>true),
				'codpostal'  => array('title'=>'Código Postal','export'=>true),
				'telefono'  => array('title'=>'Teléfono','export'=>true),
				'estadocivil'  => array('title'=>'Estado Civil','export'=>true),
				'auto'  => array('title'=>'Tiene auto', 'export'=>true),			
				'marca'  => array('title'=>'Marca','filter'=>true, 'export'=>true),			
				'modelo'  => array('title'=>'Modelo','filter'=>true, 'export'=>true),			
				'patente'  => array('title'=>'Matrícula','export'=>true),
				'cambiaauto'  => array('title'=>'Cambia el auto', 'export'=>true),			
				'cmodelo'  => array('title'=>'Nuevo Modelo','filter'=>true, 'export'=>true),			
				'contacto'  => array('title'=>'Contacto en', 'export'=>true),				
				'testdrive'  => array('title'=>'Test Drive', 'export'=>true),
				'aceptatyc'  => array('title'=>'Acepta TyC', 'export'=>true),							
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
