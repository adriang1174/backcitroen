<?php
    require_once '../frm/init.php'; 
    

    $page = new Ftl_PageBO();
    $page->setCharsetEncoding(Ftl_CharsetEncoding::UTF8);

    $page->checkSession();
    $page->setTitle("Listado de formularios registrados CRM");
    $page->loadSripts("tooltip,form,checkbox");

    $opciones = array (
        
        'dataSource'        => array (
            'class'         => 'Class_Registrado',
            'method'        => 'obtenerListadoCRM'
        ),
        'table'             => 'forms,xforms',
        'fields'                => array (
				'evento' => array('title'=>'Evento','type'=>'text','filter'=>true, 'export'=>false),		
				'dni'   => array('title'=>'DNI','type'=>'text','filter'=>true, 'export'=>false),
				'filial'=> array(       'title'=>'Código Filial','show'=>false,'export'=>true),
				'idcliente'=> array(    'title'=>'ID Cliente','show'=>false,'export'=>true),
				'aplicacionsrc'=> array('title'=>'Aplicación SRC del ID Cliente','show'=>false,'export'=>true),
				'tipoidcliente'=> array('title'=>'Tipo ID Cliente','show'=>false,'export'=>true),
				'tipocliente'=> array(  'title'=>'Tipo Cliente','show'=>false,'export'=>true),
				'apellido'  => array('title'=>'Apellido','filter'=>true),
				'apellido2'=> array(    'title'=>'Apellido2','show'=>false,'export'=>true),
				'nombre'    => array('title'=>'Nombre','type'=>'text','filter'=>true),
				'estadocivil'  => array('title'=>'Estado Civil'),
				'c10'=> array(		   'title'=>'Apellido Contacto','show'=>false,'export'=>true),
				'c11'=> array(		   'title'=>'Nombre Contacto','show'=>false,'export'=>true),
				'fechanac'  => array('title'=>'Fecha de Nacimiento'),			
				'c13'=> array(		   'title'=>'Vía','show'=>false,'export'=>true),
				'c14'=> array(		   'title'=>'Complemento de dirección','show'=>false,'export'=>true),
				'codpostal'  => array('title'=>'Código Postal'),
				'localidad'  => array('title'=>'Localidad','filter'=>true),
				'c17'=> array(		   'title'=>'Región','show'=>false,'export'=>true),
				'c18'=> array(		   'title'=>'País','show'=>false,'export'=>true),
				'telefono'  => array('title'=>'Teléfono'),
				'c20'=> array(		   'title'=>'Teléfono2 Celular','show'=>false,'export'=>true),
				'c21'=> array(		   'title'=>'Teléfono2 Pro','show'=>false,'export'=>true),	
				'email'  => array('title'=>'Email'),
				'c23'=> array(		   'title'=>'Flag Acuerdo Utilización Información Personal','show'=>false,'export'=>true),
				'c24'=> array(		   'title'=>'Flag Rechazo Ofertas Promocionales(AP ES: Flag Acepta Ofertas Promocionales','show'=>false,'export'=>true),
				'c25'=> array(		   'title'=>'Flag Lista Roja','show'=>false,'export'=>true),
				'c26'=> array(		   'title'=>'Flag Prohibido email','show'=>false,'export'=>true),
				'c27'=> array(		   'title'=>'Producto Poseído','show'=>false,'export'=>true),
				'c28'=> array(		   'title'=>'Tamaño del Parque de la Sociedad','show'=>false,'export'=>true),
				'c29'=> array(		   'title'=>'Posesión de vehículo competencia','show'=>false,'export'=>true),
				'c30'=> array(		   'title'=>'Idioma Hablado','show'=>false,'export'=>true),
				'c31'=> array(		   'title'=>'Id PDV','show'=>false,'export'=>true),
				'c32'=> array(		   'title'=>'Tipo Id PdV','show'=>false,'export'=>true),
				'c33'=> array(		   'title'=>'ID Local','show'=>false,'export'=>true),
				'c34'=> array(		   'title'=>'Tipo Oportunidad','show'=>false,'export'=>true),
				'c35'=> array(		   'title'=>'Canal Oportunidad','show'=>false,'export'=>true),
				'c36'=> array(		   'title'=>'Fuente Oportunidad','show'=>false,'export'=>true),
				'timest'  => array('title'=>'Fecha y Hora'),
				'c38'=> array(		   'title'=>'Naturaleza Oportunidad','show'=>false,'export'=>true),
				'c39'=> array(		   'title'=>'Métier correspondiente','show'=>false,'export'=>true),
				'c40'=> array(		   'title'=>'Código Marketing','show'=>false,'export'=>true),
				'c41'=> array(		   'title'=>'Etiqueta Oportunidad','show'=>false,'export'=>true),
				'c42'=> array(		   'title'=>'Fecha de recontacto deseada','show'=>false,'export'=>true),
				'c43'=> array(		   'title'=>'Fecha Cita firme','show'=>false,'export'=>true),
				'c44'=> array(		   'title'=>'Fecha deseada','show'=>false,'export'=>true),
				'c45'=> array(		   'title'=>'Horario deseado','show'=>false,'export'=>true),
				'c46'=> array(		   'title'=>'2º fecha deseada','show'=>false,'export'=>true),
				'c47'=> array(		   'title'=>'2º Horario deseado','show'=>false,'export'=>true),
				'c48'=> array(		   'title'=>'Período de Intención de Compra','show'=>false,'export'=>true),
				'c49'=> array(		   'title'=>'Pedido APV','show'=>false,'export'=>true),
				'c50'=> array(		   'title'=>'información de financiamiento','show'=>false,'export'=>true),
				'c51'=> array(		   'title'=>'Medio contacto preferido','show'=>false,'export'=>true),
				'c52'=> array(		   'title'=>'Producto de interés','show'=>false,'export'=>true),
				'comentario2'=> array(		   'title'=>'Comentario Cliente','show'=>false,'export'=>true),
				'c54'=> array(		   'title'=>'Información CC','show'=>false,'export'=>true),
				'c55'=> array(		   'title'=>'Id Fiscal','show'=>false,'export'=>true),
				'c56'=> array(		   'title'=>'Número de contrato','show'=>false,'export'=>true),
				'c57'=> array(		   'title'=>'Nº vehículos mismo contrato','show'=>false,'export'=>true),
				'c58'=> array(		   'title'=>'Código modelo (LCDV)','show'=>false,'export'=>true),
				'c59'=> array(		   'title'=>'Acabado','show'=>false,'export'=>true),
				'c60'=> array(		   'title'=>'Clase vehículo','show'=>false,'export'=>true),
				'c61'=> array(		   'title'=>'Estado vehículo','show'=>false,'export'=>true),
				'c62'=> array(		   'title'=>'VIN','show'=>false,'export'=>true),
				'c63'=> array(		   'title'=>'Precio final','show'=>false,'export'=>true),
				'c64'=> array(		   'title'=>'Potencia fiscal','show'=>false,'export'=>true),
				'patente'  => array('title'=>'Matrícula'),
				'c66'=> array(		   'title'=>'Cantidad financiada','show'=>false,'export'=>true),
				'c67'=> array(		   'title'=>'Duración','show'=>false,'export'=>true),
				'c68'=> array(		   'title'=>'Kilometraje','show'=>false,'export'=>true),
				'c69'=> array(		   'title'=>'Prestaciones','show'=>false,'export'=>true),
				'c70'=> array(		   'title'=>'Mensualidad','show'=>false,'export'=>true),
				'c71'=> array(		   'title'=>'Fecha Fin de contrato','show'=>false,'export'=>true),
				'c72'=> array(		   'title'=>'Capital restante','show'=>false,'export'=>true),
				'c73'=> array(		   'title'=>'Flag MQ','show'=>false,'export'=>true),
				'canthijos'  => array('title'=>'Hijos', 'export'=>false),
				'ocupacion'  => array('title'=>'Ocupación', 'export'=>false),			
				'deportes'  => array('title'=>'Deportes', 'export'=>false),			
				'auto'  => array('title'=>'Tiene auto', 'export'=>false),			
				'marca'  => array('title'=>'Marca','filter'=>true, 'export'=>false),			
				'modelo'  => array('title'=>'Modelo','filter'=>true, 'export'=>false),			
				'cambiaauto'  => array('title'=>'Cambia el auto', 'export'=>false),			
				'cmarca'  => array('title'=>'Nueva Marca','filter'=>true, 'export'=>false),			
				'cmodelo'  => array('title'=>'Nuevo Modelo','filter'=>true, 'export'=>false),			
				'masinfo'  => array('title'=>'Mas Info', 'export'=>false),			
				'suscribe'  => array('title'=>'Newsletter', 'export'=>false),			
				'aceptatyc'  => array('title'=>'Legales', 'export'=>false),			
				'registro'  => array('title'=>'Registrar en MyCitroen', 'export'=>false)
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
