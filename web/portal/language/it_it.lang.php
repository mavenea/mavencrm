<?php
/*************************************
 * SPDX-FileCopyrightText: 2009-2020 Vtenext S.r.l. <info@vtenext.com> 
 * SPDX-License-Identifier: AGPL-3.0-only  
 ************************************/


$app_strings = Array(
'customerportal'=>'Portale Clienti',
'LBL_LOGIN'=>'Accedi',
'LBL_USER_NAME'=>'Utente:',
'LBL_PASSWORD'=>'Password',
'LNK_HOME'=>'Home',
'LBL_WELCOME'=>'Benvenuto',
'LNK_LOGOUT'=>'Esci',
'LBL_KEEP_ME_LOGGED_IN'=>'Ricordami', // crmv@173153
'--none--'=>'',
		
'MSG_UNSUBSCRIBE'=>'Disiscrizione effettuata con successo',
'ER_MSG_UNSUBSCRIBE'=>'Disiscrizione non effettuata',
'MSG_CONF_UNSUBSCRIBE'=>'Vuoi disiscriverti?',
		
//Tickets Language Strings
//Welcome
'LBL_WELCOME'=>'Benvenuto nella tua area riservata',
'LBL_WELCOME_SERVICE'=>'Menu Servizi:',
/*crmv@57342*/
'LBL_NEW_TICKET'=>'Nuova richiesta di assistenza',
'NEW_TICKET'=>'Nuova richiesta',
'LBL_MY_TICKET'=>'Tue richieste',
'LBL_MODIFY_PROFILE' =>'I miei dati',	
'UPDATE_PROFILE' =>'Aggiorna dati',	
//crmv@57342e	
'LBL_UNSUBSCRIBE'=>'Disiscrizione',
'LBL_MY_OPEN_TICKETS'=>'Miei Tickets Aperti',
'LBL_CLOSED_TICKETS'=>'Tickets Chiusi',
'TICKETID'=>'Ticketid',
'TICKET_TITLE'=>'Titolo',
'TICKET_PRIORITY'=>'Priorit&agrave;',
'TICKET_STATUS'=>'Stato',
'TICKET_CATEGORY'=>'Categoria',
'TICKET_MATCH' =>'Match',
'LBL_NONE_SUBMITTED'=>'Nessun Ticket Inviato',
'LBL_CREATE_NEW_TICKET'=>'Crea Nuovo Ticket',
'LBL_PRODUCT_NAME'=>'Nome Prodotto',
'LBL_SERVICE_CONTRACTS'=>'Servizi a Contratto',
'LBL_TICKET_PRIORITY'=>'Priorit&agrave; Ticket',
'LBL_TICKET_SEVERITY'=>'Importanza Ticket',
'LBL_TICKET_CATEGORY'=>'Categoria Ticket',
'LBL_DESCRIPTION'=>'Descrizione',
'LBL_CLOSE_TICKET'=>'Ok, risolto',
'LBL_COMMENT_BY'=>'Commento di',
'NO_ATTACHMENTS'=>'Nessun allegato',
'LBL_ATTACHMENT_NAME'=>'Nome allegato', // crmv@173153
'LBL_FILE_UPLOADERROR'=>'Errore caricamento file :',
'LBL_ATTACH_FILE'=>'Allega un file',
'LBL_ATTACH'=>'Allega', // crmv@173271
'NONE' =>'Nessuno',
'LBL_SEARCH'=>'Cerca',
'LBL_TICKETS'=>'Tickets',
'LBL_STATUS_CLOSED'=>'Closed',//Do not convert this label. This is used to check the status. If the status 'Closed' is changed in vteCRM server side then you will give the exact value of status 'Closed' which is in vteCRM server.
'LBL_NEW_INFORMATION'=>'Prego inserisci le informazioni richieste nello spazio sottostante per inviare un ticket.',
'LBL_TICKET_ID'=>'Ticket Id',
'LBL_STATUS'=>'Stato',
'LBL_ON'=>'on',
'LBL_NOTSET_UPLOAD_DIR'=>'Devi configurare una cartella valida per l\'upload dei file nel file di configurazione del portale!!',
'LBL_GIVE_VALID_FILE'=>'Prego fornisci un file valido per il caricamento!',
'LBL_UPLOAD_FILE_LARGE'=>'Spiacente, il file caricato eccede le dimensioni massime. Prova con un file piu\' piccolo',
'LBL_PROBLEM_UPLOAD'=>'Problemi nel caricare il file. Prova di nuovo!',
'LBL_FILE_HAS_NO_CONTENTS'=>'Il file non ha contenuto, impossibile caricarlo',
'LBL_UPLOAD_VALID_FILE'=>'Prego carica un file valido.',
'LBL_PROBLEM_IN_TICKET_SAVING'=>'<br> Problemi nel salvare il Ticket. Prego controlla sia stato creato',
'LBL_ALL'=>'Tutti',
'LBL_ANY'=>'Qualunque',
//Tickets Block Name
'Ticket Information'=>'Informazioni Ticket',
'Description Information'=>'Informazioni Descrittive',
'Solution Information'=>'Informazioni Soluzione',
/*crmv@57342*/
/*'LBL_TICKET_COMMENTS' =>'Commenti',*/
'LBL_UPLOAD_PICTURE' => 'Carica un\'immagine (opzionale)',
/*crmv@57342*/
'LBL_NO_COMMENTS' => 'Non ci sono commenti',
'LBL_TICKET_COMMENTS' =>'Cronologia',
'LBL_ADD_COMMENT'=>'Aggiungi un commento',
'LBL_ATTACHMENTS'=>'Allegati',
//Tickets Fields
'Title' =>'Titoli',
'Assigned To' =>'Assegnato A',
'Priority' =>'Priorit&agrave;',
'Severity' =>'Importanza',
'Hours' =>'Ore',
'Days' =>'Giorni',
/*crmv@57342
'Ticket No' =>'Ticket No',*/
'Ticket No' =>'Codice richiesta di assistenza',		
/*crmv@57342e*/
'Related to' =>'Collegato A',
'Product Name' =>'Nome Prodotto',
'Status' =>'Stato',
'Category' =>'Categoria	',
'Description' =>'Descrizione',
'Solution' =>'Soluzione',

//My settings
'LBL_CHANGE_PASSWORD'=>'Modifica password',
'LBL_OLD_PASSWORD'=>'Vecchia Password',
'LBL_NEW_PASSWORD'=>'Nuova Password',
'LBL_CONFIRM_PASSWORD'=>'Conferma Password',
'LBL_MY_DETAILS'=>'Miei Dettagli',
'LBL_LAST_LOGIN'=>'Ultimo Accesso',
'LBL_SUPPORT_START_DATE'=>'Data Inizio Supporto',
'LBL_SUPPORT_END_DATE'=>'Data Fine Supporto',
'MSG_PASSWORD_CHANGED'=>'Password modificata con successo.',
'MSG_ENTER_NEW_PASSWORDS_SAME'=>'Le password non coincidono',
'MSG_YOUR_PASSWORD_WRONG'=>'Vecchia password errata.',

//Added fields for Knowledge Base details
'LBL_KNOWLEDGE_BASE'=>'Faq',
'LBL_COMMENTS'=>'Commenti',
'LNK_CATEGORY'=>'Categoria',
'LNK_PRODUCTS'=>'Prodotti',
'LBL_SEARCH_RESULT'=>'Risultati ricerca:',
'LBL_NO_FAQ_IN_THIS_CATEGORY'=>'Non ci sono articoli in questa categoria.',
'LBL_NO_FAQ_IN_THIS_PRODUCT'=>'Non ci sono articoli in questo prodotti.',
'LBL_NO_FAQ'=>'Non ci sono articoli.',
'LBL_NO_FAQ_IN_THIS_SEARCH_CRITERIA'=>'Non ci sono articoli che corrispondono al criterio di ricerca.',
'LBL_PRODUCT'=>'Prodotto',
'LBL_ADDED_ON'=>'Aggiunto il : ',
'LBL_FAQ_ID'=>'Faq Id',
'LBL_PRINT_THIS_PAGE'=>'Stampa questa pagina',
'LBL_EMAIL_THIS_PAGE'=>'Invia pagina via mail',
'LBL_ADD_TO_FAVORITES'=>'Aggiungi ai favoriti',
'LBL_RECENTLY_CREATED'=>'Articoli creati recentemente',
'LBL_CREATED_DATE'=>'Data creazione',
'LBL_MODIFIED_DATE'=>'Data modifica',
'KBASE_DETAILS'=>'Le Faq &egrave; organizzate su categorie e prodotti, Prego seleziona la categoria o il prodotto che ti interessano.
Puoi anche cercare sulla base di parole chiave.',
'LBL_DOCUMENTS' =>'Documenti collegati',
'LBL_FAQ_TITLE' =>'Faq Titoli',
'LBL_FAQ_DETAIL'=>'Faq Dettagli',
'LBL_ARTICLE_INTERESTED'=>'Ecco un articolo che ti potrebbe interessare:',
'LBL_PRESS_CNTR_D'=>'Premi Ctrl+D',

//Contacts
'Contact Information'=>'Informazioni Contatto',
'Customer Portal Information'=>'Informazioni Portale Clienti',
'Address Information'=>'Informazioni Indirizzo',
'Description Information'=>'Informazioni Descrizione',
'Custom Information'=>'Informazioni Personalizzate',

'First Name'=>'Nome',
'Contact Id'=>'ID Contatto',
'Office Phone'=>'Telefono Ufficio',
'Last Name'=>'Cognome',
'Mobile'=>'Mobile',
'Lead Source'=>'Fonte Lead',
'Home Phone'=>'Telefono Abitazione',
'Other Phone'=>'Altro Telefono',
'Department'=>'Dipartimento',
'Faq'=>'Faq',
'Email'=>'Email',
'Mailing Street'=>'Indirizzo (Spedizione)',
'Mailing Po Box'=>'BOX (Spedizione)',
'Mailing City'=>'Citt&agrave; (Spezione)',
'Mailing State'=>'Provincia (Spedizione)',
'Mailing Postal Code'=>'Codice (Spedizione)',
'Mailing Country'=>'Stato (Spedizione)',
'Mailing Zip'=>'Zip (Spedizione)',
'Other Zip'=>'Altro Zip',
'Other Street'=>'Altro Indirizzo',
'Other Po Box'=>'Altro BOX',
'Other City'=>'Altra Citt&agrave;',
'Other State'=>'Altra Provincia',
'Other Postal Code'=>'Altro Codice',
'Other Country'=>'Altro Stato',
'Description Information'=>'Informazione Descrizione',
'LBL_CONTACTS'=>'Contatti',
'Assistant'=>'Assistante',
'Birthdate'=>'Data di nascista',
'Assistant Phone'=>'Telefono Assistente',
'Reports To'=>'Riporta A',
'Yahoo Id'=>'Yahoo Id',
'Do Not Call'=>'Non chiamare',
'Reference'=>'Referenza',
'Support End Date'=>'Data Fine Supporto',

//products
'LBL_PRODUCT_INFORMATION'=>'Prodotti ',
//Product Block Name
'Product Information'=>'Informazioni Prodotto',
'Pricing Information:'=>'Informazioni Prezzo:',
'Stock Information:'=>'Informazioni Scorte:',
'Description Information'=>'Informazioni Descrizione',
//Products Fields
'Product Name'=>'Nome Prodotto',
'Product Active'=>'Prodotto Attivo',
'Sales Start Date'=>'Data Inizio Vendite',
'Product Category'=>'Categoria Prodotto',
'Sales End Date'=>'Data Fine Vendite',
'Vendor Name'=>'Nome Fornitore',
'Vendor PartNo'=>'Part Number Fornitore',
'Product Sheet'=>'Scheda Prodotto',
'Product No'=>'Prodotto Nr',
'Part Number'=>'Part Number',
'Manufacturer'=>'Produttore',
'Support Start Date'=>'Data Inizio Supporto',
'Support Expiry Date'=>'Data Fine Supporto',
'Website'=>'Sito Web',
'Mfr PartNo'=>'Part Number Produttore',
'Serial No'=>'Numero di Serie',
'GL Account'=>'GL Account',
'Unit Price'=>'Prezzo Unitario',
'Commission Rate'=>'Tasso Commissione',
'Usage Unit'=>'Unit&agrave; uso',
'Qty/Unit'=>'Qt&agrave;/Unit&agrave;',
'Qty In Stock'=>'Qt&agrave; In Scorta',
'Reorder Level'=>'Livello Riordino',
'Handler'=>'Gestore',
'Qty In Demand'=>'Qt&agrave; In Richiesta',
'Description'=>'Descrizione',

//Quotes
'LBL_QUOTE_INFORMATION'=>'Preventivi',
//Quotes Block Name
'Quote Information'=>'Informazioni Preventivo',
'Address Information'=>'Informazioni Indirizzo',
'Terms & Conditions'=>'Termini e Condizioni',
'Description Information'=>'Informazioni Descrizione',
//Quotes Fields
'(Download PDF) Subject'=>'(Scarica PDF) Oggetto---',
'Potential Name'=>'Nome Opportunit&agrave;',
'Quote No'=>'Numero Preventivo',
'Quote Stage'=>'Stato Preventivo',
'Valid Till'=>'Valido sino al',
'Contact Name'=>'Nome Contatto',
'Carrier'=>'Corriere',
'Shipping'=>'Spedizione',
'Inventory Manager'=>'Responsabile Magazzino',
'Account Name'=>'Nome Azienda',
'Billing Address'=>'Indirizzo Fatturazione',
'Billing Po Box'=>'BOX Fatturazione',
'Billing City'=>'Citt&agrave; Fatturazione',
'Billing State'=>'Provincia Fatturazione',
'Billing Code'=>'CAP Fatturazione',
'Billing Country'=>'Stato Fatturazione',
'Shipping Address'=>'Indirizzo Spedizione',
'Shipping Po Box'=>'BOX Spedizione',
'Shipping City'=>'Citt&agrave; Spedizione',
'Shipping State'=>'Provincia Spedizione',
'Shipping Code'=>'CAP Spedizione',
'Shipping Country'=>'Stato Spedizione',
'Terms & Conditions'=>'Termini e Condizioni',
'Description'=>'Descrizione',
'LBL_PDF_CANNOT_GENERATE'=>'Impossibile generare PDF',

//Invoices
'LBL_INVOICE_INFORMATION'=>'Fatture',
'Invoice Information'=>'Informazioni Fattura',
'Address Information'=>'Informazioni Indirizzo',
'Terms & Conditions'=>'Termini e Condizioni',
'Description Information'=>'Informazioni Descrizione',
'(Download PDF) Subject'=>'(Scarica PDF) Oggetto',
'Invoice No'=>'Nr Fattura',
'Customer No'=>'Nr Cliente',
'Invoice Date'=>'Data Fattura',
'Due Date'=>'Data Scadenza',
'Excise Duty'=>'Tassa Dovuta',
'Sales Commission'=>'Commissioni di vendita',
'Status'=>'Stato',
'Billing Address'=>'Indirizzo Fatturazione',
'Billing Po Box'=>'BOX Fatturazione',
'Billing City'=>'Citt&agrave; Fatturazione',
'Billing State'=>'Provincia Fatturazione',
'Billing Code'=>'CAP Fatturazione',
'Billing Country'=>'Stato Fatturazione',
'Shipping Address'=>'Indirizzo Spedizione',
'Shipping Po Box'=>'BOX Spedizione',
'Shipping City'=>'Citt&agrave; Spedizione',
'Shipping State'=>'Provincia Spedizione',
'Shipping Code'=>'CAP Spedizione',
'Shipping Country'=>'Stato Spedizione',
'Terms & Conditions'=>'Termini e Condizioni',
'Description'=>'Descrizione',

//Documents
'LBL_NOTES_INFORMATION'=>'Documenti',
'Basic Information'=>'Informazioni Base',
'File Information'=>'Informazioni File',
'Description'=>'Descrizione',
'Title'=>'Titolo',
'Folder Name'=>'Nome Cartella',
'Version'=>'Versione',
'Document No'=>'Nr Documento',
'Download Type'=>'Tipo Download',
'File Name'=>'Nome File',
'File Type'=>'Tipo File',
'Active'=>'Attivo',
'File Size'=>'Dimensioni File',
'Download Count'=>'Contatore Download',
'Note'=>'Note',

//Services
'LBL_SERVICE' =>'Servizi',
'Service Information'=>'Informazioni Servizio',
'Pricing Information:'=>'Informazioni Prezzo:',
'Description Information'=>'Informazioni Descrizione',
'Service Name'=>'Nome Servizio',
'Service No'=>'Nr Servizio',
'Usage Unit'=>'Unit&agrave; Utilizzo',
'Service Active'=>'Servizio Attivo',
'No of Units'=>'Nr di Unit&agrave;',
'Service Active'=>'Servizio Attivo',
'No of Units'=>'Nr di Unit&agrave;',
'Website'=>'Sito Web',
'Service Category'=>'Categoria Servizio',
'Owner'=>'Propietario',
'Sales Start Date'=>'Data Inizio Vendite',
'Sales End Date'=>'Data Fine Vendite',
'Support Start Date'=>'Data Inizio Supporto',
'Support Expiry Date'=>'Data Fine Supporto',
'Price'=>'Prezzo',
'Commission Rate'=>'Tariffa Commissione',

//Accounts
'Account Information'=>'Informazioni Azienda',
'Address Information'=>'Informazioni Indirizzo',
'Description Information'=>'Informazioni Descrizione',
'Account No'=>'Nr Azienda',
'Website'=>'Sito Web',
'Phone'=>'Telefono',
'Ticker Symbol'=>'Simbolo',
'Member Of'=>'Membro di',
'Other Phone'=>'Altro Telefono',
'Employees'=>'Impiegati',
'Email'=>'Email',
'Other Email'=>'Altra Email',
'Ownership'=>'Propietario',
'industry'=>'Settore',
'Rating'=>'Valutazione',
'Type'=>'Tipo',
'SIC Code'=>'Codice Borsa',
'Email Opt Out'=>'Permetti Email',
'Annual Revenue'=>'Fatturato Annuo',
'Assigned To'=>'Assegnato a',	//crmv@18870
'Notify Owner'=>'Notifica Proprietario',
'Billing Address'=>'Indirizzo Fatturazione',
'Billing Po Box'=>'BOX Fatturazione',
'Billing City'=>'Citt&agrave; Fatturazione',
'Billing State'=>'Provincia Fatturazione',
'Billing Code'=>'CAP Fatturazione',
'Billing Country'=>'Stato Fatturazione',
'Shipping Address'=>'Indirizzo Spedizione',
'Shipping Po Box'=>'BOX Spedizione',
'Shipping City'=>'Citt&agrave; Spedizione',
'Shipping State'=>'Provincia Spedizione',
'Shipping Code'=>'CAP Spedizione',
'Shipping Country'=>'Stato Spedizione',


//Customer Authenticate 
'LBL_CANNOT_CONNECT_SERVER'=>'Impossibile connettersi al server. Prego contattare amministratore.',
'LBL_ENTER_VALID_USER'=>'Prego inserire Username e Password valide',
'LBL_VERSION_INCOMPATIBLE'=>'La versione non &egrave; compatibile',
'LBL_NO_PERMISSION_FOR_ANY_MODULE'=>'NO PERMISSION TO VIEW ANY MODULE',

//General
'LBL_SUBMIT'=>'Invia',
'LBL_CANCEL_ALT'=>'Annulla[Alt+X]',
'LBL_SAVE_ALT'=>'Salva[Alt+S]',
'LBL_CANCEL'=>'Annulla',
'LBL_SAVE'=>'Salva',
'LBL_BACK_BUTTON'=>'Indietro',
'LBL_NOT_AUTHORISED'=>'Non sei autorizzato a visualizzare la risorsa',
'SHOW'=>'Mostra',
'HELP_DESK'=>'Assistenza clienti',
'MINE' =>'Mio',
'ALL' =>'Tutti',
'LBL_FORGOT_LOGIN'=>'Password dimenticata?', // crmv@173153
'LBL_YOUR_EMAIL'=>'Tuo indirizzo email:',
'LBL_SEND_PASSWORD'=>'Invia Password',
/*crmv@57342*/
'LBL_SEND'=> 'Invia', 
'LBL_SEND_REQUEST'=>'Invia Richiesta',
/*crmv@57342e*/
'LBL_CLOSE'=>'Chiudi',
'LBL_LOGIN_NOTE'=>'Email e password sono sensibili al maiuscolo-minuscolo',
'LBL_MY_SETTINGS'=>'Mie preferenze',
'LBL_CHANGE_PW'=>'Cambia password',		
'LBL_LOG_OUT'=>'Esci',
'QUOTE_RELATED'=>'Preventivi collegati ',
'INVOICE_RELATED'=>'Fatture collegate ',
'LBL_NOT_AVAILABLE'=>'Non disponibile',
'LBL_EMAILID'=>'Email',
'Created Time' =>'Data creazione',
'Modified Time' =>'Ora modifica',
'LBL_LANGUAGE'=>'Lingua',
'Related To' =>'Collegato a',
'MODULE_INACTIVE'=>'Modulo Inattivo',

// Tab names
'HelpDesk' 	=>'Assistenza Clienti',
'Faq' 		=>'Faq',
'Accounts' 	=>'Aziende',
'Contacts' 	=>'Contatti',
'Products' 	=>'Prodotti',
'Services'	=>'Servizi',
'Quotes'	=>'Preventivi',
'Invoice' 	=>'Fatture',
'Documents'	=>'Documenti',
'HelpDesk' 			=> 'Le mie richieste di assistenza',
'Faq' 				=> 'Faq',
'Accounts' 			=> 'Aziende',
'Contacts' 			=> 'Contatti',
'Products' 			=> 'Prodotti',
'Services'			=> 'Servizi',
'Quotes'			=> 'Preventivi',
'Invoice' 			=> 'Fatture',
'Documents'			=> 'Documenti',
'MORE_THAN_ONE_USER'=>'Potrebbe esserci un altro utente con queste credenziali, contatta amministratore.',
'INVALID_USERNAME_OR_PASSWORD'=>'Credenziali non valide',
'LBL_CATEGORY' => 'Categoria',
'Open'=>'Richiesta aperta',
'In Progress'=>'In Corso',
'Wait For Response'=>'In Attesa Risposta',
'Closed'=>'Richiesta risolta', //crmv@57342
'LBL_ANSWER'=>'ANSWER : ',
'LBL_ASSET_INFORMATION' => 'Informazioni Installazioni',
'Assets' => 'Installazioni',

'ProjectMilestone'=>'Scadenze',
'ProjectTask'=>'Operazioni',
'ProjectPlan'=>'Pianificazioni',
'LBL_PROJECT_INFORMATION'=>'Informazioni Progetto',
'LBL_PROJECT_TASKS' => 'Operazioni',
'LBL_PROJECT_MILESTONES' => 'Scadenza',
'LBL_PROJECT_TICKETS' => 'Tickets Assistenza ',
'LBL_PROJECT_DOCUMENTS' => 'Documenti',
'LBL_RAISE_TICKET_BUTTON' => 'Aggiungi Ticket',
'Project'=>'Progetto',
'Project Name' => 'Nome Pianificazione',
'Start Date' => 'Data di Inizio',
'Target End Date' => 'Data di Fine Prevista',
'Actual End Date' => 'Data di Fine Effettiva',
'Project No' => 'Nr Pianificazione',
'Target Budget'=>'Budget Previsto',
'Project Url'=>'Url Pianificazione',
'description'=>'Descrizione',
'Progress'=>'Progresso',
'Project Task Name'=>'Nome Operazione',
'Project Milestone Name'=>'Nome Scadenza',
'Subject'=>'Soggetto',

'LBL_ACCOUNTS_DESC'=>'Preferenze propria azienda',
'LBL_DOCUMENTS_DESC'=>'Scarica i tuoi file',
'LBL_HELPDESK_DESC'=>'Apri o modifica un ticket',
'LBL_FAQ_DESC'=>'Cerca risposte alle tue domande',
'LBL_QUOTES_DESC'=>'Visualizza preventivi',
'LBL_PROJECTPLAN_DESC'=>'Mostra i progetti a cui partecipo',
'LBL_ASSETS_DESC'=>'Cerca installazioni',
'LBL_INVOICE_DESC'=>'Visualizza fatture',
'LBL_PRODUCTS_DESC'=>'Cerca prodotti',
'LBL_SERVICES_DESC'=>'Cerca servizi',
'LBL_CONTACTS_DESC'=>'Mostra contatti',

'LBL_YES'=>'S&igrave',
'Yes'=>'S&igrave',
'LBL_NO'=>'No',
/*crmv@57342*/
'LBL_TICKET_CLOSE'=>'La richiesta &egrave Chiusa',
'LBL_SING_UP'=>'REGISTRATI',
'LBL_OR'=>'oppure',	

// Pick List sales_stage
'PotentialOpen'=>'Aperta',
'Qualification'=>'Qualificazione',
'Prospecting'=>'In Prospettiva',
'Needs Analysis'=>'Da Analizzare',
'PotentialBudgeting'=>'In preventivazione',
'Value Proposition'=>'Proposto il valore',
'Id. Decision Makers'=>'Potere decisionale',
'Perception Analysis'=>'Analisi di percezione',
'Proposal/Price Quote'=>'Proposta/Preventivo Prezzo',
'Negotiation/Review'=>'Trattativa/Revisione',
'Closed Won'=>'Chiuso VINTO',
'Closed Lost'=>'Chiuso PERSO',
		
// Blocchi Opportunit� (Utenze)
'LBL_POTENTIALS_INFO'=>'Blocco Informazioni Utenza',
'LBL_INFO_POTENTIALS_ACCOUNTS'=>'Blocco Dati del Cliente',
'LBL_DATE_POTENTIALS_BANCARI'=>'Blocco Dati bancari',
		
'LBL_POTENTIALS'=>'Utenze',
'NEW_POTENTIALS'=>'Nuova Utenza',
'YOUR_POTENTIALS'=>'Utenze',

// Dettaglio Potentials
'potentialname'=>'Nome Utenza',
'description'=>'Descrizione',
'bankdetails'=>'IBAN',
'nome_sottoscrittore'=>'Nome Sottoscrittore',
'cognome_sottoscrittore'=>'Cognome Sottoscrittore',
'cod_fiscale'=>'Cod. Fiscale Sottoscrittore',
'tipo_pagamento'=>'Tipologia di pagamento',
'accountname'=>'Nome Azienda',
'crmv_social_security_number'=>'Codice Fiscale',
'email1'=>'Email',
'bill_street'=>'Indirizzo (Fatturazione)',
'bill_code'=>'Codice (Fatturazione)',	
'bill_city'=>'Citta`  (Fatturazione)',
'bill_state'=>'Provincia (Fatturazione)',
'ship_street'=>'Indirizzo (Spedizione)',
'ship_city'=>'Citta`  (Spedizione)',
'ship_state'=>'Provincia (Spedizione)',
'ship_code'=>'Codice (Spedizione)',
'pod'=>'POD',
'potenza_contrattuale'=>'Potenza contrattuale (kW)',
'tipologia_tariffa'=>'Tipologia di tariffa',		

// ticketpriorities
'Low'=>'Basso',
'Normal'=>'Normale',
'High'=>'Alto',
'Urgent'=>'Urgente',
		
'LBL_STATUS_TICKET_OPEN'=>'Aperto',
'LBL_STATUS_TICKET_CLOSE'=>'Chiuso',
		
// Importanza Ticket
'Minor'=>'Minore',
'Major'=>'Maggiore',
'Feature'=>'Caratteristica',
'Critical'=>'Critica',

//Categoria Ticket
'Big Problem'=>'Grosso Problema',
'Small Problem'=>'Piccolo Problema',
'Other Problem'=>'Altro Problema',

// crmv@160733
'LBL_HERE' => 'qui',
'LBL_CONFIDENTIAL_INFO' => 'Informazioni confidenziali',
'LBL_CONFIDENTIAL_INFO_REPLY_DESC' => 'Inserisci le informazioni richieste. Solo gli utenti autorizzati ne potranno vedere il contenuto.',
'LBL_CONFIDENTIAL_INFO_REPLY_TEXT' => 'Sono state fornite le informazioni confidenziali richieste.',
'LBL_CONFIDENTIAL_REQUEST' => 'Richiesta dell\'utente',
'LBL_CONFIDENTIAL_RESPONSE' => 'Risposta confidenziale',
'LBL_COMMENT' => 'Commento',
'LBL_WONT_BE_ENCRYPTED' => 'non verrà cifrato',
// crmv@160733e
// crmv@173153
'LBL_DROP_FILES_HERE' => 'Rilascia i file qui',
'LBL_CHOOSE_UPLOAD_MODE' => 'Scegli modalità di upload',
'LBL_SEPARATE_FILES' => 'File separati',
'LBL_SINGLE_ZIP_FILE' => 'File ZIP singolo',
'LBL_DROP_INFO' => 'Puoi trascinare i file all\'interno della finestra',
'LBL_ZIP_FORM_TITLE' => 'Compila il seguente form',
'LBL_ZIP_FORM_INFO' => 'Tutti i file trascinati all\'interno della finestra verranno compressi all\'interno di un nuovo file ZIP',
'LBL_DISMISS' => 'Annulla',
'LBL_FILE_ZIP_NAME' => 'Nome file ZIP',
// crmv@173153e

//crmv@173271
'LBL_EDIT' => 'Modifica',
//crmv@173271e
);