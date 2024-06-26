<?php

return array(
    //
    // GENERAL
    //
    'Display the environment and configuration settings of your Kanboard instance all from one dedicated page. View and compare all options from the config file directly from the interface. Users will benefit from identifying problems caused by missing extensions and server misconfigurations without needing backend access to the server. Made for both regular users and administrators, this privacy and user friendly plugin provides a range of features including integrated webhook documentation, downloading backup copies of the config file and displaying, downloading or deleting the debug log file.' => 'Affichez les paramètres d\'environnement et de configuration de votre instance Kanboard à partir d\'une page dédiée. Visualisez et comparez toutes les options du fichier de configuration directement à partir de l\'interface. Les utilisateurs bénéficieront de l\'identification des problèmes causés par les extensions manquantes et les mauvaises configurations du serveur sans avoir besoin d\'accéder au serveur. Conçu pour les utilisateurs réguliers et les administrateurs, ce plugin convivial et respectueux de la vie privée offre une série de fonctionnalités, notamment la documentation intégrée sur les webhooks, le téléchargement de copies de sauvegarde du fichier de configuration et l\'affichage, le téléchargement ou la suppression du fichier journal de débogage.',
    //
    // Controller/TechnicalSupportController.php
    //
    'Settings %s Configuration' => 'Paramètres %s Configuration',
    'Webhooks %s Information' => 'Webhooks %s Information',
    'Current Raw Configuration File' => 'Fichier de configuration brut actuel',
    'Default Raw Configuration File' => 'Fichier de configuration brute par défaut',
    'Debug Log' => 'Journal de Débogage',
    //
    // Helper/SupportHelper.php
    //
    'Directory' => 'Annuaire',
    'Only Administrators can see the full value' => 'Seuls les administrateurs peuvent voir la valeur totale',
    //
    // Template/config/sidebar.php
    //
    'Configuration' => 'Configuration',
    //
    // Template/config/support.php
    //
    'Application Configuration' => 'Configuration de l\'application',
    'This page shows all default and custom values from the configuration file stored in %s combined with application-specific settings detected from your server. %s' => 'Cette page affiche toutes les valeurs par défaut et personnalisées du fichier de configuration stocké dans %s, ainsi que les paramètres spécifiques à l\'application détectés sur votre serveur. %s',
    'Passwords are not included.' => 'Les mots de passe ne sont pas inclus.',
    'Data Privacy' => 'Confidentialité de Données',
    'This page shows sensitive data. Hide selective information before sharing.' => 'Cette page contient des données sensibles. Masquez certaines informations avant de les partager.',
    'Screenshot friendly' => 'Compatible avec les captures d\'écran',
    'Hide Data' => 'Masquer les données',
    //
    // Template/config/webhook-code-examples-event-payloads.php
    //
    'All event payloads are in the following format:' => 'Toutes les données utiles des événements sont présentées dans le format suivant :',
    'The %s values are not necessary normalized across events.' => 'Les valeurs %s ne sont pas nécessairement normalisées entre les événements.',
    'Task Creation' => 'Création d\'une tâche',
    'Task Modification' => 'Modification de tâche',
    'Task update events have a field called %s that contains updated values.' => 'Les événements de mise à jour des tâches comportent un champ appelé %s qui contient les valeurs mises à jour.',
    'Comment Creation' => 'Création d\'un commentaire',
    'Subtask Creation' => 'Création d\'une sous-tâche',
    'Task Link Creation' => 'Création d\'un lien vers une tâche',
    'File Upload' => 'Chargement de fichier',
    //
    // Template/config/webhook-code-examples-http.php
    //
    'This is a general example based on the %s event.' => 'Il s\'agit d\'un exemple général basé sur l\'événement %s.',
    'See the Supported Events above' => 'Voir les événements pris en charge ci-dessus',
    //
    // Template/config/webhook.php
    //
    'Connecting External Applications' => 'Connexion à des applications externes',
    'Webhooks are useful to perform actions with external applications such as:' => 'Les webhooks sont utiles pour effectuer des actions avec des applications externes :',
    'Using webhooks to create a task by calling a simple URL' => 'Utiliser les webhooks pour créer une tâche en appelant une simple URL',
    'Automatically calling an external URL when an event occurs in this application (e.g. task creation, comment updated, etc.)' => 'Appeler automatiquement une URL externe lorsqu\'un événement se produit dans cette application (par exemple, création d\'une tâche, mise à jour d\'un commentaire, etc.)',
    'To view the list of supported events or see some examples, visit the %s page' => 'Pour consulter la liste des événements pris en charge ou voir quelques exemples, visitez la page %s.',
    'Webhooks Information' => 'Informations sur les webhooks',
    'Visit page' => 'Visiter la page',
    'Webhook Token' => 'Jeton de Webhook',
    'Warning' => 'Avertissement',
    'Resetting the webhook token may require the cron background jobs to be manually updated' => 'La réinitialisation du jeton du webhook peut nécessiter la mise à jour manuelle des tâches d\'arrière-plan cron.',
    'Token:' => 'Token :',
    'Reset Token' => 'Réinitialiser le jeton',
    'Add Webhook' => 'Ajouter un webhook',
    'Webhook URL' => 'URL du webhook',
    'Save Webhook' => 'Sauvegarder le webhook',
    //
    // Template/config/webhook_information.php
    //
    'Supported Events' => 'Événements pris en charge',
    'Writing a Webhook Receiver' => 'Écriture d\'un récepteur Webhook',
    'All internal events of this application can be sent to an external URL.' => 'Tous les événements internes de cette application peuvent être envoyés à une URL externe.',
    'The webhook URL must be defined in %s.' => 'L\'URL du webhook doit être définie dans %s.',
    'Webhooks' => 'Crochets Web',
    'Go to Settings' => 'Accéder aux paramètres',
    'When an event is triggered this application calls the predefined URL automatically.' => 'Lorsqu\'un événement est déclenché, cette application appelle automatiquement l\'URL prédéfinie.',
    'Data is encoded in JSON format and sent with a POST HTTP request.' => 'Les données sont encodées au format JSON et envoyées avec une requête HTTP POST.',
    'The webhook token is also sent as a query string parameter, allowing the user to confirm whether the request was actually called from this application.' => 'Le jeton du webhook est également envoyé en tant que paramètre de la chaîne de requête, ce qui permet à l\'utilisateur de confirmer que la requête a bien été appelée à partir de cette application.',
    'The custom URL must respond in less than 1 second as such requests are synchronous. This is a PHP limitation. The user interface can suffer from sever performance issues if your script is too slow.' => 'L\'URL personnalisée doit répondre en moins d\'une seconde, car ces demandes sont synchrones. Il s\'agit d\'une limitation de PHP. L\'interface utilisateur peut souffrir de graves problèmes de performance si votre script est trop lent.',
    'Webhook Examples' => 'Exemples de Webhook',
    'HTTP Request Example' => 'Exemple de requête HTTP',
    'Event Payload Examples' => 'Exemples de charge utile d\'événement',
    //
    // Template/config_sections/app-info.php
    //
    'Application Information' => 'Informations sur l\'application',
    'Application Name' => 'Nom de l\'application',
    'Version' => 'Version de l\'application',
    'Updates' => 'Mises à jour',
    'Check for updates' => 'Vérifier les mises à jour',
    'This page contains all the configuration settings from the application config file. You can also view the raw contents of the config file as-is and also compare it to the default version.' => 'Cette page contient tous les paramètres de configuration du fichier de configuration de l\'application. Vous pouvez également consulter le contenu brut du fichier de configuration tel quel et le comparer à la version par défaut.',
    'The raw config file will expose sensitive information which should not be shared.' => 'Le fichier de configuration brut expose des informations sensibles qui ne doivent pas être partagées.',
    'Current Raw Config File' => 'Fichier de configuration brut actuel',
    'The settings in this file apply to the current application environment' => 'Les paramètres de ce fichier s\'appliquent à l\'environnement d\'application actuel',
    'An active configuration file has not been detected. Make sure the filename is correct.' => 'Un fichier de configuration actif n\'a pas été détecté. Assurez-vous que le nom du fichier est correct.',
    'Default Raw Config File' => 'Fichier de configuration brut par défaut',
    'This file is for reference only' => 'Ce fichier est uniquement destiné à servir de référence',
    'Download Config Files' => 'Télécharger les fichiers de configuration',
    'PHP \'zip\' Extension Not Detected. Check the \'PHP Information\' section of this page.' => 'Extension PHP \'zip\' non détectée. Vérifiez la section \'Informations PHP\' de cette page.',
    //
    // Template/config_sections/app-sections.php
    //
    'General Configuration' => 'Configuration générale',
    'Escape HTML Inside Markdown' => 'Échapper au HTML à l\'intérieur de Markdown',
    'External content will be trusted. Inline HTML will be rendered.' => 'Le contenu externe sera pris en compte. Le HTML en ligne sera rendu.',
    'False' => 'Faux',
    'External content is not trusted by default for security reasons therefore inline HTML will not be rendered.' => 'Le contenu externe n\'est pas fiable par défaut pour des raisons de sécurité. Par conséquent, le HTML en ligne ne sera pas rendu.',
    'True' => 'Vrai',
    'Enable URL Rewrite (Pretty URLs)' => 'Activer la réécriture d\'URL (Pretty URLs)',
    'Ensure the server configuration is correct before changing this setting' => 'Assurez-vous que la configuration du serveur est correcte avant de modifier ce paramètre.',
    'Pretty URLs are enabled' => 'Pretty URLs est activé',
    'Plugins Configuration' => 'Configuration des plugins',
    'Plugins Installer' => 'Installateur de plugins',
    'Plugins cannot be installed. This is also set by default for security reasons.' => 'Les plugins ne peuvent pas être installés. Ce paramètre est également défini par défaut pour des raisons de sécurité.',
    'Disabled' => 'Désactivé',
    'Plugins can be automatically installed through the Plugins Directory' => 'Les plugins peuvent être installés automatiquement via le répertoire des plugins.',
    'Enabled' => 'Activé',
    'Plugins Directory' => 'Répertoire des plugins',
    'This directory is not writeable by the web server user' => 'Ce répertoire n\'est pas accessible en écriture par l\'utilisateur du serveur web',
    'This directory is writeable by the web server user' => 'Ce répertoire est accessible en écriture par l\'utilisateur du serveur web',
    'Directory Permissions' => 'Permissions d\'accès aux répertoires',
    'Linux Directory Permissions' => 'Autorisations pour les répertoires Linux',
    'Directory Owner' => 'Propriétaire du répertoire',
    'Plugins Directory URL' => 'URL du répertoire des plugins',
    'Plugins will be listed from the default source' => 'Les plugins seront listés à partir de la source par défaut',
    'Plugins will be listed from a custom source' => 'Les plugins seront listés à partir d\'une source personnalisée',
    'Directory Paths' => 'Chemins d\'accès aux répertoires',
    'Data Directory' => 'Répertoire des données',
    'Files Directory' => 'Répertoire des fichiers',
    'Cache Directory' => 'Répertoire du cache',
    '%s as Cache Driver is set to %s' => '%s comme Cache Driver est défini sur %s',
    'Not required' => 'Pas nécessaire',
    'Logs & Sessions' => 'Journaux et sessions',
    'Log File' => 'Fichier journal',
    'Session Handler' => 'Gestionnaire de session',
    'Database' => 'Base de données',
    'Session Duration' => 'Durée de la session',
    'Until browser is closed' => 'Jusqu\'à la fermeture du navigateur',
    'Debug Mode' => 'Mode débogage',
    'This setting will affect performance and should only be enabled for troubleshooting purposes' => 'Ce paramètre affecte les performances et ne doit être activé qu\'à des fins de dépannage.',
    'Not Enabled' => 'Non activé',
    'View the last few entries of the log file' => 'Afficher les dernières entrées du fichier journal',
    'View Log' => 'Afficher le journal',
    'Download Log' => 'Télécharger le journal',
    'Download Compressed Log File' => 'Télécharger le fichier journal compressé',
    'Download Log File' => 'Télécharger le fichier journal',
    'Uncompressed file size' => 'Taille du fichier non compressé',
    'Delete the log file' => 'Supprimer le fichier journal',
    'Delete Log' => 'Supprimer le journal',
    'Once deleted, the file will be immediately recreated.' => 'Une fois supprimé, le fichier sera immédiatement recréé.',
    'Login and Security Configuration' => 'Configuration de la connexion et de la sécurité',
    'Self-Signed Certificates' => 'Certificats auto-signés',
    'This is the default setting. Change the value to \'false\' if your server is using self-signed security certificates.' => 'Il s\'agit du paramètre par défaut. Modifiez la valeur en "faux" si votre serveur utilise des certificats de sécurité auto-signés.',
    'Not Allowed' => 'Non autorisé',
    'Correctly configured self-signed security certificates can be used' => 'Les certificats de sécurité auto-signés correctement configurés peuvent être utilisés.',
    'Allowed' => 'Autorisé',
    'TOTP Issuer Name' => 'TOTP Issuer Name (Nom de l\'émetteur TOTP)',
    'This is the default setting' => 'Il s\'agit du paramètre par défaut.',
    'Excluded Fields During External Authentication' => 'Champs exclus lors de l\'authentification externe',
    'Hide Login Form' => 'Masquer le formulaire de connexion',
    'Not Hidden' => 'Non caché',
    'Hidden' => 'Caché',
    'Disable Logout' => 'Désactiver la déconnexion',
    'Not Disabled' => 'Non désactivé',
    'API Authentication Header' => 'En-tête d\'authentification API',
    'Not Set' => 'Non défini',
    'X-Frame DENY HTTP Header' => 'En-tête HTTP X-Frame DENY',
    'This is the default and recommended setting' => 'Il s\'agit du paramètre par défaut et recommandé',
    'This is not the recommended setting' => 'Ce n\'est pas le paramètre recommandé',
    'Strict Transport Security HTTP Header' => 'En-tête HTTP Strict Transport Security',
    'Remember Me Authentication' => 'Authentification Remember Me',
    'Brute Force Protection' => 'Protection contre la force brute',
    'When the login form is used, this feature works at the user account level. After numerous failed login attempts, the application shows a CAPTCHA image to prevent automated bot attacks. After further consistent failed attempts the user account is temporarily locked. Administrators can unlock users at any time from the user interface.' => 'Lorsque le formulaire de connexion est utilisé, cette fonction fonctionne au niveau du compte de l\'utilisateur. Après plusieurs tentatives de connexion infructueuses, l\'application affiche une image CAPTCHA pour empêcher les attaques automatisées de robots. Après plusieurs tentatives infructueuses, le compte de l\'utilisateur est temporairement verrouillé. Les administrateurs peuvent déverrouiller les utilisateurs à tout moment à partir de l\'interface utilisateur.',
    'Enable %s After x Failed Logins' => 'Activer %s après x échecs de connexion',
    'Completely Automated Public Turing test to tell Computers and Humans Apart' => 'Test de Turing public entièrement automatisé pour distinguer les ordinateurs des humains.',
    'Lock User Account After x Failed Logins' => 'Verrouiller le compte utilisateur après x échecs de connexion',
    'Locked User Account Duration' => 'Durée du verrouillage du compte utilisateur',
    'This is the default setting in minutes' => 'Il s\'agit du paramètre par défaut, en minutes.',
    'This value is in minutes' => 'Cette valeur est exprimée en minutes',
    '%s, the account must be unlocked using the login form.' => '%s, le compte doit être déverrouillé à l\'aide du formulaire de connexion.',
    'After three authentication failures through the user API' => 'Après trois échecs d\'authentification via l\'API utilisateur',
    'LDAP Configuration' => 'Configuration LDAP',
    'Group Memberships' => 'Appartenance à un groupe',
    'Show Group Memberships in User List' => 'Afficher les membres d\'un groupe dans la liste des utilisateurs',
    'Group memberships will not be shown' => 'Les membres du groupe ne seront pas affichés',
    'Limit Group Memberships in User List' => 'Limiter les appartenances à un groupe dans la liste des utilisateurs',
    'This is the default setting. Set to \'0\' for all group memberships.' => 'Il s\'agit du paramètre par défaut. La valeur par défaut est de 7.',
    'The default setting is 7. Set to \'0\' for all group memberships.' => 'Le paramètre par défaut est 7. Régler sur "0" pour tous les membres du groupe.',
    'Proxy Settings' => 'Paramètres du proxy',
    'HTTP Client Proxy' => 'Proxy du client HTTP',
    'Proxy Hostname' => 'Nom d\'hôte du proxy',
    'Proxy Port' => 'Port du proxy',
    'Proxy Username' => 'Nom d\'utilisateur du proxy',
    'Proxy Password' => 'Mot de passe du proxy',
    'Proxy Exclude' => 'Exclusion du proxy',
    'Reverse Proxy' => 'Proxy inverse',
    'Reverse Proxy Authentication' => 'Authentification du proxy inverse',
    'Username Header Name' => 'Nom d\'utilisateur Nom d\'en-tête',
    'Admin Username' => 'Nom d\'utilisateur de l\'administrateur',
    'User Email Header Name' => 'Nom d\'en-tête de l\'email de l\'utilisateur',
    'User Full Name Header Name' => 'Nom complet de l\'utilisateur Nom de l\'en-tête',
    'This setting is available from %s' => 'Ce paramètre est disponible à partir de %s',
    'Not available in this application version' => 'Non disponible dans cette version de l\'application',
    'Default Domain' => 'Domaine par défaut',
    //
    // Template/config_sections/db-connection.php
    //
    'Database Connection' => 'Connexion à la base de données',
    'Database Driver' => 'Pilote de la base de données',
    'Database Version' => 'Version de la base de données',
    'Database Username' => 'Nom d\'utilisateur de la base de données',
    'Database Hostname' => 'Nom d\'hôte de la base de données',
    'Database Port' => 'Port de la base de données',
    'Default' => 'Par défaut',
    'Database Name' => 'Nom de la base de données',
    'Database Migrations' => 'Migration des bases de données',
    'Database migrations must be completed manually through the CLI' => 'Les migrations de bases de données doivent être effectuées manuellement à l\'aide de l\'interface de programmation.',
    'Use CLI' => 'Utiliser l\'interface de programmation',
    'Database Timeout' => 'Délai d\'attente de la base de données',
    'This value must be in seconds' => 'Cette valeur doit être exprimée en secondes',
    'This is the default and recommended setting. If set, the value must be in seconds.' => 'Il s\'agit du réglage par défaut et recommandé. Si elle est définie, la valeur doit être exprimée en secondes.',
    'MySQL %s Connection' => 'Connexion %s MySQL',
    'Secure Sockets Layer' => 'Couche de Sockets Sécurisés',
    'These parameters must be defined in the configuration file in order to enable the MySQL %s connection. For most installations, it is safe to ignore this section.' => 'Ces paramètres doivent être définis dans le fichier de configuration afin d\'activer la connexion %s de MySQL. Pour la plupart des installations, il est prudent d\'ignorer cette section.',
    'Parameter Examples' => 'Exemples de paramètres',
    'MySQL %s Key' => 'Clé %s MySQL',
    'MySQL %s Certificate' => 'Certificat %s MySQL',
    'MySQL %s Certificate Authority' => 'Autorité de certification %s MySQL',
    'MySQL %s Server Verification' => 'Vérification du serveur %s de MySQL',
    'ODBC Data Source Name' => 'Nom de la source de données ODBC (DSN)',
    'Database Size' => 'Taille de la base de données',
    'Download Database' => 'Télécharger la base de données',
    'compressed SQLite file' => 'fichier SQLite compressé',
    'Upload Database' => 'Télécharger la base de données',
    'Optimize Database' => 'Optimiser la base de données',
    'command' => 'commande',
    //
    // Template/config_sections/email-connection.php
    //
    'Email Connection' => 'Connexion au courrier électronique',
    'Mail Configuration' => 'Configuration du courrier',
    'Sender Email' => 'Email de l\'expéditeur',
    'Mail Transport' => 'Transport du courrier',
    'Other' => 'Autre',
    'Mail Server Hostname' => 'Nom d\'hôte du serveur de messagerie',
    'Encryption' => 'Cryptage',
    'Transport Layer Security' => 'Sécurité de la couche transport',
    'Simple Mail Transport Protocol' => 'Protocole de transport de courrier simple',
    '%s Username' => 'Nom d\'utilisateur %s',
    'Command Name' => 'Nom de la commande',
    'Sendmail Command' => 'Commande Sendmail',
    //
    // Template/config_sections/ldap-config.php
    //
    '%s Authentication' => '%s Authentification',
    'Lightweight Directory Access Protocol' => 'Protocole d\'accès aux annuaires légers',
    'Enable LDAP in your configuration file to display the related settings.' => 'Activez LDAP dans votre fichier de configuration pour afficher les paramètres correspondants.',
    '%s Server' => 'Serveur %s',
    '%s Port' => 'Port %s',
    'Verify %s Security Cerificate' => 'Vérifier le certificat de sécurité de %s',
    'Start with %s' => 'Commencer par %s',
    'Username Case' => 'Nom d\'utilisateur en majuscules',
    'Preserve Case' => 'Conserver la casse',
    'Lowercase' => 'Minuscules',
    'Bind Type' => 'Type de liaison',
    'User' => 'Utilisateur',
    'Proxy' => 'Proxy',
    'Anonymous' => 'Anonyme',
    'Username for Proxy & User Modes' => 'Nom d\'utilisateur pour les modes Proxy et Utilisateur',
    '%s Users' => '%s Utilisateurs',
    'Distinguished Name' => 'Nom distinctif',
    'User Filter' => 'Filtre utilisateur',
    'Attribute for Username' => 'Attribut pour le nom d\'utilisateur',
    'Attribute for Full Name' => 'Attribut pour le nom complet',
    'Attribute for User Email' => 'Attribut pour l\'email de l\'utilisateur',
    'Attribute for Groups' => 'Attribut pour les groupes',
    'Attribute for User Avatar Image' => 'Attribut pour l\'image de l\'avatar de l\'utilisateur',
    'User Language Sync' => 'Synchronisation de la langue de l\'utilisateur',
    'Automatic User Creation' => 'Création automatique d\'utilisateurs',
    'Local user profiles must exist for matching users' => 'Les profils d\'utilisateurs locaux doivent exister pour les utilisateurs correspondants',
    'Local user profiles will be created' => 'Les profils d\'utilisateur locaux seront créés',
    'Default User Role' => 'Rôle de l\'utilisateur par défaut',
    'Manager' => 'Gestionnaire',
    '%s Groups' => 'Groupes %s',
    'Administrator Distinguished Name' => 'Nom distinctif de l\'administrateur',
    'Manager Distinguished Name' => 'Nom distinctif du gestionnaire',
    'Group Provider' => 'Fournisseur de groupe',
    'Base Distinguished Name' => 'Nom distinctif de la base',
    'Group Filter' => 'Filtre de groupe',
    'Group User Filter' => 'Filtre d\'utilisateur de groupe',
    'User Attribute in Group Filter' => 'Attribut de l\'utilisateur dans le filtre de groupe',
    'Group Name Attribute' => 'Attribut du nom du groupe',
    'Group Sync' => 'Synchronisation du groupe',
    //
    // Template/config_sections/php-info.php
    //
    'PHP Information' => 'Informations PHP',
    'Major Version' => 'Version majeure',
    'Minor Version' => 'Version mineure',
    'Release Version' => 'Version de publication',
    'Less than minimum requirement' => 'Inférieur au minimum requis',
    'Pass' => 'Passer',
    'Config File Path' => 'Chemin du fichier de configuration',
    'Config File Scan Directory' => 'Répertoire d\'analyse du fichier de configuration',
    'Loaded Configuration File' => 'Fichier de configuration chargé',
    'PHP Extension Name' => 'Nom de l\'extension PHP',
    'Not Detected' => 'Non détecté',
    'Required' => 'Requis',
    'PHP Extension' => 'Extension PHP',
    'Required Extension' => 'Extension requise',
    'Optional' => 'Optionnel',
    'Optional Extension' => 'Optionnel Extension',
    'Required for downloading config files' => 'Nécessaire pour télécharger les fichiers de configuration',
    'Missing PDO Extension' => 'Extension PDO manquante',
    'MySQL' => 'MySQL',
    'PostgreSQL' => 'PostgreSQL',
    'SQLite' => 'SQLite',
    'Required for the Mailmagik plugin' => 'Nécessaire pour le plugin Mailmagik',
    //
    // Template/config_sections/server-config.php
    //
    'Server Configuration' => 'Configuration du serveur',
    'Operating System' => 'Système d\'exploitation',
    'Client for URL' => 'Client pour l\'URL',
    'Website Address' => 'Adresse du site Web',
    'Domain' => 'Domaine',
    'Server IP Address' => 'Adresse IP du serveur',
    'Server Port' => 'Port du Serveur',
    'SSL Secure Port' => 'Port sécurisé SSL',
    'Unsecure Port' => 'Port non sécurisé',
    'Unsecure http' => 'http non sécurisé',
    'The site is not encrypted before being transmitted over the Internet. This port should be secured.' => 'Le site n\'est pas crypté avant d\'être transmis sur l\'internet. Ce port devrait être sécurisé.',
    'System Temporary Directory' => 'Répertoire temporaire du système',
    'Document Root' => 'Racine du Document',
    'Session Save Path' => 'Chemin d\'enregistrement de la session',
    'Absolute Path' => 'Chemin absolu',
    'Common Gateway Interface' => 'Interface de passerelle commune',
    'HTTP Web Server' => 'Serveur web HTTP',
    'Pretty URLs' => 'Jolies URL',
    'On' => 'Activé',
    'Off' => 'Désactivé',
    'Server Protocol' => 'Protocole du serveur',
    'Secure HTTP Protocol' => 'Protocole HTTP sécurisé',
    'Yes' => 'Oui',
    'No' => 'Non',
    //
    // Template/config_sections/user-config.php
    //
    'User Configuration' => 'Configuration de l\'utilisateur',
    'Your Profile Full Name' => 'Nom complet de votre profil',
    'Your User ID' => 'Votre ID utilisateur',
    'Your Role' => 'Votre rôle',
    'Your IP Address' => 'Votre adresse IP',
    'Opens in a new window' => 'S\'ouvre dans une nouvelle fenêtre',
    'Lookup IP' => 'Rechercher l\'IP',
    'Current Page' => 'Page actuelle',
    'Your Browser Name' => 'Nom de votre navigateur',
    'Your Browser' => 'Votre navigateur',
    //
    // Template/modals/debug-log.php
    //
    'Displaying the most recent entries (50 maximum) from the log file.' => 'Affichage des entrées les plus récentes (50 au maximum) du fichier journal.',
);
