<!-- REMOVE THIS SECTION -->
<!-- ------------------- -->
<!-- TEMPLATE FILE FOR LOCAL TRANSLATIONS - KEEP FILENAME IN LOWERCASE AS translations.php UNDER LANGUAGE CODE -->
<!-- EXAMPLE FILE: /Locale/en_GB/translations.php -->
<!-- EXAMPLE FILE: /Locale/en_US/translations.php -->
<!-- EXAMPLE FILE: /Locale/fr_FR/translations.php -->
<!-- EXAMPLE FILE: /Locale/de_DE/translations.php -->
<!-- ------------------- -->
<!-- REMOVE THIS SECTION -->
<?php

return array(
    //
    // GENERAL
    //
    'Display the environment and configuration settings of your Kanboard instance all from one dedicated page. View and compare all options from the config file directly from the interface. Users will benefit from identifying problems caused by missing extensions and server misconfigurations without needing backend access to the server. Made for both regular users and administrators, this privacy and user friendly plugin provides a range of features including integrated webhook documentation, downloading backup copies of the config file and displaying, downloading or deleting the debug log file.' => '',
    //
    // Controller/TechnicalSupportController.php
    //
    'Settings %s Configuration' => '',
    'Webhooks %s Information' => '',
    'Current Raw Configuration File' => '',
    'Default Raw Configuration File' => '',
    'Debug Log' => '',
    //
    // Helper/SupportHelper.php
    //
    'Directory' => '',
    'Only Administrators can see the full value' => '',
    //
    // Template/config/sidebar.php
    //
    'Configuration' => '',
    //
    // Template/config/support.php
    //
    'Application Configuration' => '',
    'This page shows all default and custom values from the configuration file stored in %s combined with application-specific settings detected from your server. %s' => '',
    'Passwords are not included.' => '',
    'Data Privacy' => '',
    'This page shows sensitive data. Hide selective information before sharing.' => '',
    'Screenshot friendly' => '',
    'Hide Data' => '',
    //
    // Template/config/webhook-code-examples-event-payloads.php
    //
    'All event payloads are in the following format:' => '',
    'The %s values are not necessary normalized across events.' => '',
    'Task Creation' => '',
    'Task Modification' => '',
    'Task update events have a field called %s that contains updated values.' => '',
    'Comment Creation' => '',
    'Subtask Creation' => '',
    'Task Link Creation' => '',
    'File Upload' => '',
    //
    // Template/config/webhook-code-examples-http.php
    //
    'This is a general example based on the %s event.' => '',
    'See the Supported Events above' => '',
    //
    // Template/config/webhook.php
    //
    'Connecting External Applications' => '',
    'Webhooks are useful to perform actions with external applications such as:' => '',
    'Using webhooks to create a task by calling a simple URL' => '',
    'Automatically calling an external URL when an event occurs in this application (e.g. task creation, comment updated, etc.)' => '',
    'To view the list of supported events or see some examples, visit the %s page' => '',
    'Webhooks Information' => '',
    'Visit page' => '',
    'Webhook Token' => '',
    'Warning' => '',
    'Resetting the webhook token may require the cron background jobs to be manually updated' => '',
    'Token:' => '',
    'Reset Token' => '',
    'Add Webhook' => '',
    'Webhook URL' => '',
    'Save Webhook' => '',
    //
    // Template/config/webhook_information.php
    //
    'Supported Events' => '',
    'Writing a Webhook Receiver' => '',
    'All internal events of this application can be sent to an external URL.' => '',
    'The webhook URL must be defined in %s.' => '',
    'Webhooks' => '',
    'Go to Settings' => '',
    'When an event is triggered this application calls the predefined URL automatically.' => '',
    'Data is encoded in JSON format and sent with a POST HTTP request.' => '',
    'The webhook token is also sent as a query string parameter, allowing the user to confirm whether the request was actually called from this application.' => '',
    'The custom URL must respond in less than 1 second as such requests are synchronous. This is a PHP limitation. The user interface can suffer from sever performance issues if your script is too slow.' => '',
    'Webhook Examples' => '',
    'HTTP Request Example' => '',
    'Event Payload Examples' => '',
    //
    // Template/config_sections/app-info.php
    //
    'Application Information' => '',
    'Application Name' => '',
    'Version' => '',
    'Updates' => '',
    'Check for updates' => '',
    'This page contains all the configuration settings from the application config file. You can also view the raw contents of the config file as-is and also compare it to the default version.' => '',
    'The raw config file will expose sensitive information which should not be shared.' => '',
    'Current Raw Config File' => '',
    'The settings in this file apply to the current application environment' => '',
    'An active configuration file has not been detected. Make sure the filename is correct.' => '',
    'Default Raw Config File' => '',
    'This file is for reference only' => '',
    'Download Config Files' => '',
    'PHP \'zip\' Extension Not Detected. Check the \'PHP Information\' section of this page.' => '',
    //
    // Template/config_sections/app-sections.php
    //
    'General Configuration' => '',
    'Escape HTML Inside Markdown' => '',
    'External content will be trusted. Inline HTML will be rendered.' => '',
    'False' => '',
    'External content is not trusted by default for security reasons therefore inline HTML will not be rendered.' => '',
    'True' => '',
    'Enable URL Rewrite (Pretty URLs)' => '',
    'Ensure the server configuration is correct before changing this setting' => '',
    'Pretty URLs are enabled' => '',
    'Plugins Configuration' => '',
    'Plugins Installer' => '',
    'Plugins cannot be installed. This is also set by default for security reasons.' => '',
    'Disabled' => '',
    'Plugins can be automatically installed through the Plugins Directory' => '',
    'Enabled' => '',
    'Plugins Directory' => '',
    'This directory is not writeable by the web server user' => '',
    'This directory is writeable by the web server user' => '',
    'Directory Permissions' => '',
    'Linux Directory Permissions' => '',
    'Directory Owner' => '',
    'Plugins Directory URL' => '',
    'Plugins will be listed from the default source' => '',
    'Plugins will be listed from a custom source' => '',
    'Directory Paths' => '',
    'Data Directory' => '',
    'Files Directory' => '',
    'Cache Directory' => '',
    '%s as Cache Driver is set to %s' => '',
    'Not required' => '',
    'Logs & Sessions' => '',
    'Log File' => '',
    'Session Handler' => '',
    'Database' => '',
    'Session Duration' => '',
    'Until browser is closed' => '',
    'Debug Mode' => '',
    'This setting will affect performance and should only be enabled for troubleshooting purposes' => '',
    'Not Enabled' => '',
    'View the last few entries of the log file' => '',
    'View Log' => '',
    'Download Log' => '',
    'Download Compressed Log File' => '',
    'Download Log File' => '',
    'Uncompressed file size' => '',
    'Delete the log file' => '',
    'Delete Log' => '',
    'Once deleted, the file will be immediately recreated.' => '',
    'Login and Security Configuration' => '',
    'Self-Signed Certificates' => '',
    'This is the default setting. Change the value to \'false\' if your server is using self-signed security certificates.' => '',
    'Not Allowed' => '',
    'Correctly configured self-signed security certificates can be used' => '',
    'Allowed' => '',
    'TOTP Issuer Name' => '',
    'This is the default setting' => '',
    'Excluded Fields During External Authentication' => '',
    'Hide Login Form' => '',
    'Not Hidden' => '',
    'Hidden' => '',
    'Disable Logout' => '',
    'Not Disabled' => '',
    'API Authentication Header' => '',
    'Not Set' => '',
    'X-Frame DENY HTTP Header' => '',
    'This is the default and recommended setting' => '',
    'This is not the recommended setting' => '',
    'Strict Transport Security HTTP Header' => '',
    'Remember Me Authentication' => '',
    'Brute Force Protection' => '',
    'When the login form is used, this feature works at the user account level. After numerous failed login attempts, the application shows a CAPTCHA image to prevent automated bot attacks. After further consistent failed attempts the user account is temporarily locked. Administrators can unlock users at any time from the user interface.' => '',
    'Enable %s After x Failed Logins' => '',
    'Completely Automated Public Turing test to tell Computers and Humans Apart' => '',
    'Lock User Account After x Failed Logins' => '',
    'Locked User Account Duration' => '',
    'This is the default setting in minutes' => '',
    'This value is in minutes' => '',
    '%s, the account must be unlocked using the login form.' => '',
    'After three authentication failures through the user API' => '',
    'LDAP Configuration' => '',
    'Group Memberships' => '',
    'Show Group Memberships in User List' => '',
    'Group memberships will not be shown' => '',
    'Limit Group Memberships in User List' => '',
    'This is the default setting. Set to \'0\' for all group memberships.' => '',
    'The default setting is 7. Set to \'0\' for all group memberships.' => '',
    'Proxy Settings' => '',
    'HTTP Client Proxy' => '',
    'Proxy Hostname' => '',
    'Proxy Port' => '',
    'Proxy Username' => '',
    'Proxy Password' => '',
    'Proxy Exclude' => '',
    'Reverse Proxy' => '',
    'Reverse Proxy Authentication' => '',
    'Username Header Name' => '',
    'Admin Username' => '',
    'User Email Header Name' => '',
    'User Full Name Header Name' => '',
    'This setting is available from %s' => '',
    'Not available in this application version' => '',
    'Default Domain' => '',
    //
    // Template/config_sections/db-connection.php
    //
    'Database Connection' => '',
    'Database Driver' => '',
    'Database Version' => '',
    'Database Username' => '',
    'Database Hostname' => '',
    'Database Port' => '',
    'Default' => '',
    'Database Name' => '',
    'Database Migrations' => '',
    'Database migrations must be completed manually through the CLI' => '',
    'Use CLI' => '',
    'Database Timeout' => '',
    'This value must be in seconds' => '',
    'This is the default and recommended setting. If set, the value must be in seconds.' => '',
    'MySQL % Connection' => '',
    'Secure Sockets Layer' => '',
    'These parameters must be defined in the configuration file in order to enable the MySQL SSL connection. For most installations, it is safe to ignore this section.' => '',
    'Parameter Examples' => '',
    'MySQL %s Key' => '',
    'MySQL %s Certificate' => '',
    'MySQL %s Certificate Authority' => '',
    'MySQL %s Server Verification' => '',
    'ODBC Data Source Name' => '',
    'Database Size' => '',
    'Download Database' => '',
    'compressed SQLite file' => '',
    'Upload Database' => '',
    'Optimize Database' => '',
    'command' => '',
    //
    // Template/config_sections/email-connection.php
    //
    'Email Connection' => '',
    'Mail Configuration' => '',
    'Sender Email' => '',
    'Mail Transport' => '',
    'Other' => '',
    'Mail Server Hostname' => '',
    'Encryption' => '',
    'Transport Layer Security' => '',
    'Simple Mail Transport Protocol' => '',
    '%s Username' => '',
    'Command Name' => '',
    'Sendmail Command' => '',
    //
    // Template/config_sections/ldap-config.php
    //
    '%s Authentication' => '',
    'Lightweight Directory Access Protocol' => '',
    'Enable LDAP in your configuration file to display the related settings.' => '',
    '%s Server' => '',
    '%s Port' => '',
    'Verify %s Security Cerificate' => '',
    'Start with %s' => '',
    'Username Case' => '',
    'Preserve Case' => '',
    'Lowercase' => '',
    'Bind Type' => '',
    'User' => '',
    'Proxy' => '',
    'Anonymous' => '',
    'Username for Proxy & User Modes' => '',
    '%s Users' => '',
    'Distinguished Name' => '',
    'User Filter' => '',
    'Attribute for Username' => '',
    'Attribute for Full Name' => '',
    'Attribute for User Email' => '',
    'Attribute for Groups' => '',
    'Attribute for User Avatar Image' => '',
    'User Language Sync' => '',
    'Automatic User Creation' => '',
    'Local user profiles must exist for matching users' => '',
    'Local user profiles will be created' => '',
    'Default User Role' => '',
    'Manager' => '',
    '%s Groups' => '',
    'Administrator Distinguished Name' => '',
    'Manager Distinguished Name' => '',
    'Group Provider' => '',
    'Base Distinguished Name' => '',
    'Group Filter' => '',
    'Group User Filter' => '',
    'User Attribute in Group Filter' => '',
    'Group Name Attribute' => '',
    'Group Sync' => '',
    //
    // Template/config_sections/php-info.php
    //
    'PHP Information' => '',
    'Major Version' => '',
    'Minor Version' => '',
    'Release Version' => '',
    'Less than minimum requirement' => '',
    'Pass' => '',
    'Config File Path' => '',
    'Config File Scan Directory' => '',
    'Loaded Configuration File' => '',
    'PHP Extension Name' => '',
    'Not Detected' => '',
    'Required' => '',
    'PHP Extension' => '',
    'Required Extension' => '',
    'Optional' => '',
    'Optional Extension' => '',
    'Required for downloading config files' => '',
    'Missing PDO Extension' => '',
    'MySQL' => '',
    'PostgreSQL' => '',
    'SQLite' => '',
    'Required for the Mailmagik plugin' => '',
    //
    // Template/config_sections/server-config.php
    //
    'Server Configuration' => '',
    'Operating System' => '',
    'Client for URL' => '',
    'Website Address' => '',
    'Domain' => '',
    'Server IP Address' => '',
    'Server Port' => '',
    'SSL Secure Port' => '',
    'Unsecure Port' => '',
    'Unsecure http' => '',
    'The site is not encrypted before being transmitted over the Internet. This port should be secured.' => '',
    'System Temporary Directory' => '',
    'Document Root' => '',
    'Session Save Path' => '',
    'Absolute Path' => '',
    'Common Gateway Interface' => '',
    'HTTP Web Server' => '',
    'Pretty URLs' => '',
    'On' => '',
    'Off' => '',
    'Server Protocol' => '',
    'Secure HTTP Protocol' => '',
    'Yes' => '',
    'No' => '',
    //
    // Template/config_sections/user-config.php
    //
    'User Configuration' => '',
    'Your Profile Full Name' => '',
    'Your User ID' => '',
    'Your Role' => '',
    'Your IP Address' => '',
    'Opens in a new window' => '',
    'Lookup IP' => '',
    'Current Page' => '',
    'Your Browser Name' => '',
    'Your Browser' => '',
    //
    // Template/modals/debug-log.php
    //
    'Displaying the most recent entries (50 maximum) from the log file.' => '',
);
