<?php

return [
    'about_assets_title'           => 'Acerca de los activos',
    'about_assets_text'            => 'Los activos son artículos rastreados por número de serie o placa de activo.  Suelen ser artículos de alto valor en los que es importante identificar un elemento específico.',
    'archived'  				=> 'Archivado',
    'asset'  					=> 'Activo',
    'bulk_checkout'             => 'Asignar activos',
    'bulk_checkin'              => 'Ingresar activos',
    'checkin'  					=> 'Ingresar activo',
    'checkout'  				=> 'Asignar activo',
    'clone'  					=> 'Clonar activo',
    'deployable'  				=> 'Utilizable',
    'deleted'  					=> 'Este activo fue eliminado.',
    'delete_confirm'            => '¿Está seguro de que desea eliminar este activo?',
    'edit'  					=> 'Editar activo',
    'model_deleted'  			=> 'Este modelo de activo ha sido eliminado. Debe restaurar este modelo antes de poder restaurar el activo.',
    'model_invalid'             => 'Este modelo para este activo es inválido.',
    'model_invalid_fix'         => 'El activo debe ser actualizado, use un modelo de activo válido antes de intentar ingresarlo, asignarlo o auditarlo.',
    'requestable'               => 'Puede solicitarse',
    'requested'				    => 'Solicitado',
    'not_requestable'           => 'No puede solicitarse',
    'requestable_status_warning' => 'No cambiar el estado solicitable',
    'restore'  					=> 'Restaurar activo',
    'pending'  					=> 'Pendiente',
    'undeployable'  			=> 'No utilizable',
    'undeployable_tooltip'  	=> 'Este activo tiene una etiqueta de estado que es no utilizable y no puede ser asignado en este momento.',
    'view'  					=> 'Ver activo',
    'csv_error' => 'Tiene un error en su archivo CSV:',
    'import_text' => '<p>Cargue un archivo CSV que contenga el historial de los activos. Los activos y los usuarios DEBEN existir ya en el sistema, o serán omitidos. La comparación de activos para importar el historial se realiza con la placa del activo. Intentaremos encontrar un usuario usando el nombre del usuario que proporcione y los criterios que seleccione a continuación. Si no selecciona ningún criterio, el sistema simplemente intentará usar el formato de nombre de usuario configurado en <code>Administrador &gt; Configuración General</code>.</p><p>Los campos incluidos en el CSV deben coincidir con los encabezados: <strong>Asset Tag, Name, Checkout Date, Checkin Date</strong>. Cualquier campo adicional será ignorado.</p><p>Checkin Date(Fecha de recepción): dejar en blanco o usar fechas futuras asignará los elementos al usuario asociado. Excluir la columna Checkin Date creará una fecha de recepción con la fecha de hoy.</p>    ',
    'csv_import_match_f-l' => 'Intente emparejar usuarios usando el formato <strong>nombre.apellido</strong> (<code>jane.smith</code>)',
    'csv_import_match_initial_last' => 'Intente emparejar los usuarios usando el formato <strong>inicial del nombre y apellido</strong> (<code>jsmith</code>)',
    'csv_import_match_first' => 'Intentar emparejar a los usuarios usando el formato <strong>primer nombre</strong> (<code>jane</code>)',
    'csv_import_match_email' => 'Intente emparejar los usuarios usando <strong>correo electrónico</strong> como nombre de usuario',
    'csv_import_match_username' => 'Intente emparejar los usuarios usando <strong>nombre de usuario</strong>',
    'error_messages' => 'Mensajes de error:',
    'success_messages' => 'Mensajes de éxito:',
    'alert_details' => 'Por favor vea abajo para más detalles.',
    'custom_export' => 'Personalizar exportación',
    'mfg_warranty_lookup' => 'Búsqueda del estado de garantía para :manufacturer',
    'user_department' => 'Departamento de Usuario',
];
