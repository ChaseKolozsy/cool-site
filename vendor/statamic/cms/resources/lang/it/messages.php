<?php

return [
    'activate_account_notification_body' => 'Ricevi questa mail perché abbiamo ricevuto una richiesta di reimpostazione della password per il tuo account.',
    'activate_account_notification_subject' => 'Attiva il tuo account',
    'addon_has_more_releases_beyond_license_body' => 'È possibile aggiornare, ma sarà necessario effettuare l\'upgrade o acquistare una nuova licenza.',
    'addon_has_more_releases_beyond_license_heading' => 'Questo componente aggiuntivo ha più release oltre il limite di licenza.',
    'addon_list_loading_error' => 'Si è verificato un errore durante il caricamento dei componenti aggiuntivi. Riprova più tardi.',
    'asset_container_blueprint_instructions' => 'I progetti definiscono campi personalizzati aggiuntivi durante la modifica dei media.',
    'asset_container_create_folder_instructions' => 'Quando abilitato, fornisce all\'utente la possibilità di creare cartelle in questo container.',
    'asset_container_disk_instructions' => 'I dischi del filesystem identificano dove vengono salvati i file - in locale o in una posizione remota come Amazon S3. Possono essere configurati in `config/filesystems.php`',
    'asset_container_handle_instructions' => 'Utilizzato come riferimento a questo contenitore sul frontend. Non è semplice modificarlo successivamente.',
    'asset_container_intro' => 'I media risiedono in cartelle sul server o su altri servizi di archiviazione. Ognuna di queste posizioni viene chiamata contenitore.',
    'asset_container_move_instructions' => 'Quando abilitato, consente agli utenti di spostare file in questo contenitore.',
    'asset_container_quick_download_instructions' => 'Quando abilitato, aggiunge un pulsante per il download rapido nel gestore dei media.',
    'asset_container_rename_instructions' => 'Quando abilitato, consente agli utenti di rinominare i file in questo contenitore.',
    'asset_container_title_instructions' => 'Di solito un nome plurale, come "Immagini" o "Documenti"',
    'asset_folders_directory_instructions' => 'Ti consigliamo di evitare spazi e caratteri speciali per mantenere puliti i tuoi URL.',
    'blueprints_intro' => 'I progetti definiscono e organizzano i campi per creare modelli di contenuto per raccolte, form e altri tipi di dati.',
    'blueprints_title_instructions' => 'Di solito un nome singolare, come "Articolo" o "Prodotto"',
    'cache_utility_application_cache_description' => 'Cache unificata di Laravel utilizzata da Statamic, dai componenti aggiuntivi e dai pacchetti di Composer.',
    'cache_utility_description' => 'Gestisci e visualizza informazioni importanti sui vari livelli di cache di Statamic.',
    'cache_utility_image_cache_description' => 'La cache delle immagini memorizza copie di tutte le immagini trasformate e ridimensionate.',
    'cache_utility_stache_description' => 'La Stache è il content store di Statamic che funziona in modo molto simile a un database. Viene generato automaticamente dai tuoi file di contenuti.',
    'cache_utility_static_cache_description' => 'Le pagine statiche bypassano  Statamic e vengono renderizzate direttamente dal server per il massimo delle prestazioni.',
    'collection_configure_date_behavior_private' => 'Privato - Nascoste dagli elenchi, non accessibili tramite URL',
    'collection_configure_date_behavior_public' => 'Pubblico - Sempre visibili',
    'collection_configure_date_behavior_unlisted' => 'Non in elenco: Nascoste dagli elenchi, accessibili tramite URL',
    'collection_configure_dated_instructions' => 'Le date di pubblicazione possono essere utilizzate per pianificare e far scadere i contenuti.',
    'collection_configure_handle_instructions' => 'Utilizzato come riferimento a questa raccolta sul frontend. Non è semplice modificarlo successivamente.',
    'collection_configure_intro' => 'Una raccolta è un gruppo di voci correlate che condividono comportamento, attributi e impostazioni.',
    'collection_configure_layout_instructions' => 'Imposta il layout predefinito di questa raccolta. Le voci possono sovrascrivere questa impostazione con un campo `template` chiamato `layout`. È insolito cambiare questa impostazione.',
    'collection_configure_template_instructions' => 'Imposta il template predefinito di questa raccolta. Le voci possono sovrascrivere questa impostazione con un campo `template`.',
    'collection_configure_title_instructions' => 'Consigliamo un nome plurale, come "Articoli" o "Prodotti".',
    'collection_next_steps_configure_description' => 'Configura URL e percorsi, definisci progetti, comportamenti relativi alla data, ordinamento e altre opzioni.',
    'collection_next_steps_create_entry_description' => 'Crea la prima voce o alcuni segnaposto temporanei, dipende da te.',
    'collection_next_steps_documentation_description' => 'Ulteriori informazioni sulle raccolte, su come funzionano e su come configurarle.',
    'collection_next_steps_scaffold_description' => 'Generare rapidamente progetti vuoti e template frontend in base al nome della raccolta.',
    'collection_scaffold_instructions' => 'Scegli quali risorse generare. I file esistenti non verranno sovrascritti.',
    'collections_amp_instructions' => 'Abilita le Accelerated Mobile Pages (AMP). Aggiunge automaticamente route e URL per le voci di questa raccolta. Ulteriori informazioni nella [documentazione](https://statamic.dev/amp)',
    'collections_blueprint_instructions' => 'Le voci in questa raccolta possono utilizzare uno qualsiasi di questi progetti.',
    'collections_default_publish_state_instructions' => 'Le nuove voci di questa raccolta verranno pubblicate come impostazione predefinita invece di essere in "bozza".',
    'collections_future_date_behavior_instructions' => 'Come dovrebbero comportarsi le voci con date future.',
    'collections_links_instructions' => 'Le voci in questa raccolta possono contenere collegamenti (reindirizzamenti) ad altre voci o URL.',
    'collections_mount_instructions' => 'Scegli una voce su cui montare questa raccolta. Ulteriori informazioni nella [documentazione](https://statamic.dev/collections-and-entries#mounting).',
    'collections_orderable_instructions' => 'Abilita l\'ordinamento manuale attraverso il trascinamento.',
    'collections_past_date_behavior_instructions' => 'Come dovrebbero comportarsi le voci con date passate.',
    'collections_route_instructions' => 'La route definisce il pattern URL delle voci.',
    'collections_sort_direction_instructions' => 'Direzione di ordinamento predefinita.',
    'collections_taxonomies_instructions' => 'Collega le voci di questa raccolta alle tassonomie. I campi verranno aggiunti automaticamente alle form di pubblicazione.',
    'email_utility_configuration_description' => 'Le impostazioni del servizio mail sono presenti in <code>:path</code>',
    'email_utility_description' => 'Controlla la configurazione del servizio mail ed invia email di test.',
    'expect_root_instructions' => 'Considera la prima pagina dell\'albero come "radice" o "homepage".',
    'field_conditions_instructions' => 'Quando mostrare o nascondere questo campo.',
    'field_desynced_from_origin' => 'Non sincronizzato con l\'originale. Clicca per sincronizzare e ripristinare il valore originale.',
    'field_synced_with_origin' => 'Sincronizzato con l\'originale. Clicca o modifica il campo per annullare la sincronizzazione.',
    'field_validation_instructions' => 'Puoi utilizzare tutte le regole di validazione di Laravel.',
    'fields_blueprints_description' => 'I progetti definiscono i campi per strutture di contenuti come raccolte, tassonomie, utenti e form.',
    'fields_display_instructions' => 'L\'etichetta del campo visualizzata nel Pannello di controllo.',
    'fields_fieldsets_description' => 'I fieldset sono raggruppamenti di campi semplici, flessibili e completamente opzionali che aiutano a organizzare campi riutilizzabili preconfigurati.',
    'fields_handle_instructions' => 'La variabile del campo nel template.',
    'fields_instructions_instructions' => 'Visualizzate sotto l\'etichetta del campo. È supportato il formato Markdown.',
    'fields_listable_instructions' => 'Visibilità di questo campo come colonna negli elenchi.',
    'fieldset_import_fieldset_instructions' => 'Fieldset da importare.',
    'fieldset_import_prefix_instructions' => 'Il prefisso che deve essere applicato a ciascun campo quando vengono importati. per esempio. eroe_',
    'fieldset_intro' => 'I fieldset sono raggruppamenti di campi riutilizzabili all\'interno dei progetti.',
    'fieldset_link_fields_prefix_instructions' => 'Prefisso applicato ad ogni campo collegato al fieldset. Utile se desideri importare gli stessi campi più volte.',
    'fieldsets_title_instructions' => 'Generalmente descrive quali campi saranno presenti al suo interno, come "Blocco Immagine"',
    'focal_point_instructions' => 'Impostare un punto focale consente il ritaglio dinamico di foto con un soggetto che rimane nel frame.',
    'focal_point_previews_are_examples' => 'Le anteprime di ritaglio sono solo di esempio',
    'forgot_password_enter_email' => 'Inserisci il tuo indirizzo mail così da poterti inviare il link per reimpostare la password.',
    'form_configure_blueprint_instructions' => 'Scegli tra i progetti esistenti o creane uno nuovo.',
    'form_configure_email_from_instructions' => 'Lascia vuoto per utilizzare il valore predefinito',
    'form_configure_email_html_instructions' => 'Il template per la versione html di questa mail.',
    'form_configure_email_instructions' => 'Configura le mail da inviare alla ricezione di una nuova richiesta.',
    'form_configure_email_reply_to_instructions' => 'Lascia vuoto per utilizzare la mail del mittente',
    'form_configure_email_subject_instructions' => 'Oggetto della mail',
    'form_configure_email_text_instructions' => 'Il template per la versione testuale di questa mail.',
    'form_configure_email_to_instructions' => 'Email del destinatario.',
    'form_configure_handle_instructions' => 'Utilizzato come riferimento di questa form sul frontend. Non è semplice modificarlo successivamente.',
    'form_configure_honeypot_instructions' => 'Nome campo da utilizzare come Honeypot. Gli Honeypot sono campi speciali utilizzati per ridurre lo spam da parte dei bot.',
    'form_configure_intro' => 'Le form vengon utilizzare per raccogliere informazioni dai visitatori ed inviare eventi e notifiche in caso di nuovi invii.',
    'form_configure_store_instructions' => 'Disabilita per interrompere il salvataggio degli invii. Gli eventi e le notifiche saranno comunque inviati.',
    'form_configure_title_instructions' => 'Di solito un invito all\'azione, come "Contattaci".',
    'getting_started_widget_blueprints' => 'I progetti definiscono i campi personalizzati utilizzati per creare e archiviare i tuoi contenuti.',
    'getting_started_widget_collections' => 'Le raccolte contengono i diversi tipi di contenuto del tuo sito.',
    'getting_started_widget_docs' => ' Impara ad utilizzare Statamic utilizzando le sue funzionalità nel modo giusto.',
    'getting_started_widget_header' => 'Introduzione a Statamic',
    'getting_started_widget_intro' => 'Per iniziare a costruire il tuo nuovo sito Statamic, ti consigliamo di iniziare con questi passaggi.',
    'getting_started_widget_navigation' => 'Crea elenchi multilivello di link che possono essere utilizzati per barre di navigazione, footer e così via.',
    'getting_started_widget_reminder' => 'Ricorda: <b>Statamic è un software commerciale</b> e potrebbe essere necessario acquistare una licenza appropriata per continuare a utilizzare Statamic dopo la fine del periodo beta.',
    'git_disabled' => 'L\'integrazione di Statamic Git è attualmente disabilitata.',
    'git_nothing_to_commit' => 'Niente da impegnare, percorsi di contenuto puliti!',
    'git_utility_description' => 'Gestisci i contenuti monitorati da Git.',
    'global_search_open_using_slash' => 'Posizionati sulla ricerca globale usando il tasto <kbd>/</kbd>',
    'global_set_config_intro' => 'I Global Set gestiscono i contenuti disponibili nell\'intero sito, come i dettagli dell\'azienda, le informazioni di contatto o le impostazioni del frontend.',
    'globals_blueprint_instructions' => 'Gestisce i campi da visualizzare durante la modifica delle variabili.',
    'globals_configure_handle_instructions' => 'Utilizzato come riferimento a questo Global Set sul frontend. Non è semplice modificarlo successivamente.',
    'globals_configure_intro' => 'Un Global Set è un gruppo di variabili disponibili in tutte le pagine del frontend.',
    'globals_configure_title_instructions' => 'Consigliamo un nome che ne rappresenti il contenuto. Ad esempio: "Marchio" o "Azienda"',
    'licensing_error_invalid_domain' => 'Dominio non valido',
    'licensing_error_invalid_edition' => 'La licenza è per l\'edizione :edition',
    'licensing_error_no_domains' => 'Nessun dominio specificato',
    'licensing_error_no_site_key' => 'Nessuna chiave di licenza del sito',
    'licensing_error_outside_license_range' => 'Licenza valida per le versioni :start e :end',
    'licensing_error_unknown_site' => 'Sito sconosciuto',
    'licensing_error_unlicensed' => 'Licenza mancante',
    'licensing_production_alert' => 'Ti preghiamo di acquistare o inserire una chiave di licenza valida per questo sito nel rispetto del Contratto di Licenza.',
    'licensing_sync_instructions' => 'I dati da statamic.com vengono sincronizzati ogni ora. Forza una sincronizzazione per visualizzare le modifiche che hai apportato.',
    'licensing_trial_mode_alert' => 'Stai usufruendo di funzionalità a pagamento o componenti aggiuntivi che richiedono la licenza prima di pubblicare questo sito. Divertiti!',
    'licensing_utility_description' => 'Visualizza e risolvi i dettagli della licenza.',
    'max_depth_instructions' => 'Imposta il numero massimo di livelli di profondità di una pagina. Lascia vuoto per nessun limite.',
    'max_items_instructions' => 'Imposta il numero massimo di voci selezionabili.',
    'navigation_configure_collections_instructions' => 'Abilita il collegamento alle voci in queste raccolte.',
    'navigation_configure_handle_instructions' => 'Utilizzato come riferimento a questo menu sul frontend. Non è semplice modificarlo successivamente.',
    'navigation_configure_intro' => 'I menu sono elenchi multi-livello di collegamenti che possono essere utilizzati per creare barre di navigazione, footer, sitemap e così via.',
    'navigation_configure_settings_intro' => 'Abilita il collegamento alle raccolte, imposta una profondità massima e altri comportamenti.',
    'navigation_configure_title_instructions' => 'Consigliamo un nome che corrisponda a dove verrà utilizzato, ad esempio "Menu principale" o "Menu footer".',
    'navigation_documentation_instructions' => 'Ulteriori informazioni sulla creazione, la configurazione e il render dei menu.',
    'navigation_link_to_entry_instructions' => 'Aggiungi un link a una voce. Abilita il collegamento a raccolte aggiuntive nell\'area di configurazione.',
    'navigation_link_to_url_instructions' => 'Aggiungi un link a qualsiasi URL interno o esterno. Abilita il collegamento alle voci nella configurazione del menu.',
    'outpost_error_422' => 'Errore durante la comunicazione con statamic.com.',
    'outpost_error_429' => 'Troppe richieste a statamic.com.',
    'outpost_issue_try_later' => 'Si è verificato un problema durante la comunicazione con statamic.com. Per favore riprova più tardi.',
    'phpinfo_utility_description' => 'Controlla la configurazione di PHP ed i moduli installati.',
    'publish_actions_create_revision' => 'Verrà creata una revisione basata sulla copia di lavoro. L\'attuale revisione non cambierà.',
    'publish_actions_current_becomes_draft_because_scheduled' => 'Poiché la revisione corrente viene pubblicata e hai selezionato una data futura, una volta inviata, la revisione funzionerà come una bozza fino alla data selezionata.',
    'publish_actions_publish' => 'Le modifiche alla copia di lavoro verranno applicate alla voce e sarà pubblicata immediatamente.',
    'publish_actions_schedule' => 'Le modifiche alla copia di lavoro verranno applicate alla voce ed apparirà pubblicata nella data selezionata.',
    'publish_actions_unpublish' => 'L\'attuale revisione non sarà pubblicata.',
    'reset_password_notification_body' => 'Ricevi questa mail perché abbiamo ricevuto una richiesta di reimpostazione della password per il tuo account.',
    'reset_password_notification_no_action' => 'Se non hai richiesto la reimpostazione della password, non sono necessarie ulteriori azioni.',
    'reset_password_notification_subject' => 'Reimposta la password',
    'role_change_handle_warning' => 'La modifica dell\'handle non aggiornerà i riferimenti negli utenti e nei gruppi.',
    'role_handle_instructions' => 'Gli handle vengono utilizzati come riferimento a questo ruolo nel frontend. Non può essere facilmente modificato.',
    'role_intro' => 'I ruoli sono gruppi di autorizzazioni di accesso e permessi di azione che possono essere assegnati a utenti e gruppi di utenti.',
    'role_title_instructions' => 'Di solito un nome singolare, come Editor o Admin.',
    'search_utility_description' => 'Gestisci e visualizza informazioni importanti sugli indici di ricerca di Statamic.',
    'session_expiry_enter_password' => 'Inserisci la password per continuare da dove eri rimasto',
    'session_expiry_logged_out_for_inactivity' => 'Sei stato disconnesso perché risulti inattivo da un po\'.',
    'session_expiry_logging_out_in_seconds' => 'Risulti inattivo da un po\'e verrai disconnesso tra :seconds secondi. Clicca per estendere la sessione.',
    'session_expiry_new_window' => 'Apertura in una nuova finestra. Torna dopo aver effettuato l\'accesso.',
    'tab_sections_instructions' => 'I campi in ciascuna sezione saranno raggruppati in schede. Crea nuovi campi, riutilizza campi esistenti o importa interi gruppi di campi da fieldset esistenti.',
    'taxonomies_blueprints_instructions' => 'I termini di questa tassonomia possono utilizzare uno qualsiasi di questi progetti.',
    'taxonomies_collections_instructions' => 'Le raccolte che utilizzano questa tassonomia.',
    'taxonomy_configure_handle_instructions' => 'Utilizzato come riferimento a questa tassonomia sul frontend. Non è semplice modificarlo successivamente.',
    'taxonomy_configure_intro' => 'Una tassonomia è un sistema di classificazione dei dati in base ad un insieme di caratteristiche uniche, come categoria o colore.',
    'taxonomy_configure_title_instructions' => 'Ti consigliamo di utilizzare un sostantivo plurale, come "Categorie" o "Tags".',
    'taxonomy_next_steps_configure_description' => 'Configura nomi, associa raccolte, definisci progetti e altro.',
    'taxonomy_next_steps_create_term_description' => 'Crea il primo termine o inserisci dei termini come segnaposto, dipende da te.',
    'taxonomy_next_steps_documentation_description' => 'Ulteriori informazioni sulle tassonomie, su come funzionano e su come configurarle.',
    'try_again_in_seconds' => '{0,1}Riprova adesso.|Riprova tra :count secondi.',
    'updates_available' => 'Sono disponibili degli aggiornamenti!',
    'user_groups_handle_instructions' => 'Utilizzato come riferimento a questo gruppo sul frontend. Non è semplice modificarlo successivamente.',
    'user_groups_intro' => 'I gruppi di utenti consentono di organizzare gli utenti e applicare ruoli basati su autorizzazioni.',
    'user_groups_role_instructions' => 'Assegna ruoli per fornire agli utenti di questo gruppo tutte le autorizzazioni corrispondenti.',
    'user_groups_title_instructions' => 'Di solito un sostantivo plurale, come Editori o Fotografi',
    'user_wizard_account_created' => 'L\'account utente è stato creato.',
    'user_wizard_email_instructions' => 'L\'indirizzo e-mail funge anche da nome utente e deve essere univoco.',
    'user_wizard_intro' => 'Gli utenti possono essere assegnati a ruoli che personalizzano le loro autorizzazioni, accesso e capacità in tutto il Pannello di controllo.',
    'user_wizard_invitation_body' => 'Attiva il tuo nuovo account Statamic su :site per iniziare a gestire questo sito web. Per motivi di sicurezza, il link seguente scade dopo :expiry ore. Successivamente, contatta l\'amministratore del sito per richiedere una nuova password.',
    'user_wizard_invitation_intro' => 'Invia una mail di benvenuto con i dettagli di attivazione dell\'account al nuovo utente.',
    'user_wizard_invitation_share' => 'Copia queste credenziali e condividile con <code>:email</code> tramite il tuo metodo preferito.',
    'user_wizard_invitation_share_before' => 'Dopo la creazione dell\'utente, verranno forniti i dettagli da condividere con <code>:email</code> tramite il tuo metodo preferito.',
    'user_wizard_invitation_subject' => 'Attiva il tuo nuovo account Statamic su :site',
    'user_wizard_name_instructions' => 'Puoi lasciare il nome vuoto se vuoi che l\'utente lo compili.',
    'user_wizard_roles_groups_intro' => 'Gli utenti possono essere assegnati a ruoli che personalizzano le loro autorizzazioni, accesso e capacità in tutto il Pannello di controllo.',
    'user_wizard_super_admin_instructions' => 'I Super Admin hanno il controllo completo e l\'accesso a tutto il pannello di controllo. Concedi saggiamente questo ruolo.',
];