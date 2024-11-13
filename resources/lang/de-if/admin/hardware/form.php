<?php

return [
    'bulk_delete'		=> 'Massenlöschung von Assets bestätigen',
    'bulk_restore'      => 'Massenwiederherstellung von Assets bestätigen', 
  'bulk_delete_help'	=> 'Überprüfe die nachfolgenden Assets für die Massenlöschung. Sobald diese gelöscht sind, können diese zwar wiederhergestellt werden, sind aber dem aktuellen Nutzer nicht mehr zugeordnet.',
  'bulk_restore_help'	=> 'Überprüfe die Assets für die Massenwiederherstellung. Sobald sie wiederhergestellt sind, werden diese Assets nicht mit Benutzern assoziiert, denen sie zuvor zugewiesen wurden.',
  'bulk_delete_warn'	=> 'Du bist im Begriff :asset_count Assets zu löschen.',
  'bulk_restore_warn'	=> 'Sie sind dabei, :asset_count Assets wiederherzustellen.',
    'bulk_update'		=> 'Massenaktualisierung von Assets',
    'bulk_update_help'	=> 'Diese Eingabemaske erlaubt dir die Aktualisierung von mehreren Assets zugleich. Fülle die Felder aus, die du ändern möchtest. Alle leeren Felder bleiben unverändert. ',
    'bulk_update_warn'	=> 'Du bearbeitest die Eigenschaften eines Assets.|Du bearbeitest die Eigenschaften von :asset_count Assets.',
    'bulk_update_with_custom_field' => 'Beachte, dass die Assets :asset_model_count verschiedene Arten von Modellen sind.',
    'bulk_update_model_prefix' => 'Auf Modellen', 
    'bulk_update_custom_field_unique' => 'Dies ist ein einzigartiges Feld und kann nicht bearbeitet werden.',
    'checkedout_to'		=> 'Herausgegeben an',
    'checkout_date'		=> 'Herausgabedatum',
    'checkin_date'		=> 'Rücknahmedatum',
    'checkout_to'		=> 'Herausgeben an',
    'cost'				=> 'Einkaufspreis',
    'create'			=> 'Asset erstellen',
    'date'				=> 'Kaufdatum',
    'depreciation'	    => 'Abschreibung',
    'depreciates_on'	=> 'Abgeschrieben am',
    'default_location'	=> 'Standard-Standort',
    'default_location_phone' => 'Standard-Telefon',
    'eol_date'			=> 'Ende der Nutzungsdauer',
    'eol_rate'			=> 'EOL Rate',
    'expected_checkin'  => 'Erwartetes Rückgabedatum',
    'expires'			=> 'Ablaufdatum',
    'fully_depreciated'	=> 'Komplett Abgeschrieben',
    'help_checkout'		=> 'Um das Asset sofort zuzuweisen, wähle "Bereit zum Herausgeben" in der Status-Liste aus. ',
    'mac_address'		=> 'MAC-Adresse',
    'manufacturer'		=> 'Hersteller',
    'model'				=> 'Modell',
    'months'			=> 'Monate',
    'name'				=> 'Asset Name',
    'notes'				=> 'Notizen',
    'order'				=> 'Auftragsnummer',
    'qr'				=> 'QR-Code',
    'requestable'		=> 'Benutzer dürfen dieses Asset anfordern',
    'redirect_to_all'   => 'Zurück zu allen :type',
    'redirect_to_type'   => 'Gehe zu :type',
    'redirect_to_checked_out_to'   => 'Gehe von herausgegeben zu',
    'select_statustype'	=> 'Status Typ auswählen',
    'serial'			=> 'Seriennummer',
    'status'			=> 'Status',
    'tag'				=> 'Asset Tag',
    'update'			=> 'Asset Update',
    'warranty'			=> 'Garantie',
        'warranty_expires'		=> 'Garantie Ablaufdatum',
    'years'				=> 'Jahre',
    'asset_location' => 'Standort des Assets aktualisieren',
    'asset_location_update_default_current' => 'Standardort und aktuellen Standort aktualisieren',
    'asset_location_update_default' => 'Nur den Standardort aktualisieren',
    'asset_location_update_actual' => 'Nur eigentlichen Standort aktualisieren',
    'asset_not_deployable' => 'Dieses Asset ist nicht verfügbar und kann nicht herausgegeben werden.',
    'asset_not_deployable_checkin' => 'Dieser Asset-Status ist nicht einsetzbar, da mit diesem das Asset eingecheckt wird.',
    'asset_deployable' => 'Dieses Asset ist verfügbar und kann herausgegeben werden.',
    'processing_spinner' => 'Verarbeitung... (Dies kann bei großen Dateien etwas Zeit in Anspruch nehmen)',
    'optional_infos'  => 'Optionale Informationen',
    'order_details'   => 'Bestellinformationen',
    'calc_eol'    => 'If nulling the EOL date, use automatic EOL calculation based on the purchase date and EOL rate.',
];
