<?php
// File           inc/configuration.inc.php / ibWebAdmin
// Purpose        basic config, set global constants
//                this is the only file that is included in every script
// Author         Lutz Brueckner <irie@gmx.de>
// Copyright      (c) 2000-2006 by Lutz Brueckner,
//                published under the terms of the GNU General Public Licence v.2,
//                see file LICENCE for details
// Created        <00/09/11 21:20:58 lb>
//
// $Id: configuration.inc.php.dist,v 1.1 2006/07/08 17:41:18 lbrueckner Exp $


//
// For the defines of paths you have to use slashes, even in a windows environment!
// i.e define('BINPATH', 'c:/interbase/bin/');
//

define('VERSION', '2.0pre1 alpha');

define('BINPATH', '/usr/lib/firebird/2.5/bin/');           // path to the interbase tools (isql, etc.)

define('TMPPATH', '/tmp/');                        // write temporary files here,
                                                   // must be writeable for the webserver, must be an absolute path

define('DEFAULT_USER',    'SYSDBA');               // default settings for database login
define('DEFAULT_DB',      'employee.fdb');
define('DEFAULT_PATH',    '/var/lib/firebird/2.5/data/');
define('DEFAULT_HOST',    'localhost');
define('DEFAULT_ROLE',    '');  
define('DEFAULT_CACHE',   75);
define('DEFAULT_CHARSET', 'ISO8859_1');
define('DEFAULT_DIALECT', 3);
define('DEFAULT_SERVER',  'FB_2.5');               // 'FB_2.1', 'FB_2.5' and 'other' are the valid options


define('PROTOCOL', 'http');                        // change to 'https' to use ssl


// if $ALLOWED_DIRS is not empty, only database in this directories are allowed to open;
// the webserver process must have read access to this directories (pathnames _with_ trailing slashes)
//
$ALLOWED_DIRS = array('/var/lib/firebird/2.1/data/',
                      '/var/lib/firebird/2.5/data/',
                      '/tmp/');
// $ALLOWED_DIRS = array();

// if $ALLOWED_FILES is not empty, only the listed databases are allowed to open;
// if this is set the $ALLOWED_DIRS are ignored
//
// $ALLOWED_FILES=array('/var/lib/firebird/2.1/data/employee.fdb',
//                      '/var/lib/firebird/2.1/data/test.gdb',
//                      'employee.fdb'
//                      );
$ALLOWED_FILES=array();


$DATABASE_SUFFIXES = array('fdb');    // login into databases, creating and dropping of databases
                                                   // is restricted to database files with this file extensions


define('BACKUP_DIR', '/var/lib/firebird/2.5'); // define this to restrict the location for backup files


define('LANGUAGE', 'english');       // set the language to use; 'english', 'brazilian_portuguese', 'dutch',
                                     // 'japanese', 'russian-win1251', 'spanish' and 'german' are valid options



// uncomment the corresponding line for every panel
// you want to not appear in the application
$HIDE_PANELS = array(
//                      'db_create',      // Create Database
//                      'db_delete',      // Delete Database
//                      'db_systable',    // System Tables
//                      'db_meta',        // Metadata
//                      'tb_show',        // View Tables
//                      'tb_create',      // Create New Table
//                      'tb_modify',      // Modify Table
//                      'tb_delete',      // Delete Table
//                      'acc_index',      // Indexes
//                      'acc_gen',        // Generators
//                      'acc_trigger',    // Triggers
//                      'acc_proc',       // Stored Procedures
//                      'acc_domain',     // Domains
//                      'acc_views',      // Views
//                      'acc_exc',        // Exceptions
//                      'acc_udf',        // User Defined Functions
//                      'sql_enter',      // Enter Command or Script
//                      'sql_output',     // Show Output
//                      'dt_enter',       // Enter Data
//                      'dt_export',      // Export Data
//                      'dt_import',      // Import Data
//                      'tb_watch',       // Watch Table
//                      'usr_user',       // Users
//                      'usr_role',       // Roles
//                      'usr_cust',       // Customizing
//                      'adm_server',     // Server Statistics
//                      'adm_dbstat',     // Database Statistics
//                      'adm_gfix',       // Database Maintenance
//                      'adm_backup',     // Backup
//                      'adm_restore'     // Restore
                     );

// use this array to disable the execution of commands or command groups
// from the sql-enter panel
$SQL_DISABLE = array('CREATE DATABASE',   // disables creation of databases/schemas; there is no need to
                     'CREATE SCHEMA',     // add entries for [ALTER|DROP] DATABASE because they did not work anyhow.
//                     'DROP'             // uncommenting this disables all DROP statements
//                     'DROP TABLE'       // uncommenting this disables the DROP TABLE statement
                     );

define('SYSDBA_GET_ALL', TRUE);           // if TRUE the $HIDE_PANELS and the $SQL_DISABLE settings have
                                          // no effect for the SYSDBA user


define('CONFIRM_DELETE', TRUE);           // ask for confirmation when deleting data rows or any database objects

define('DATAPATH','./data/');             // the place where ibWebAdmin searches images, icons, etc

define('ICON_SIZE', 'small');             // size of the icons and navigation elements;
                                          // 'big' and 'small' are valid settings

define('COLOR_BACKGROUND',       '#F6F7C0');   // color settings
define('COLOR_PANEL',            '#CAEA62');
define('COLOR_AREA',             '#FEFFE0');
define('COLOR_HEADLINE',         '#F0E68C');
define('COLOR_MENUBORDER',       '#008000');
define('COLOR_IFRAMEBORDER',     '#F6F7C0');
define('COLOR_IFRAMEBACKGROUND', '#FFFFFF');
define('COLOR_LINK',             '#0000CD');
define('COLOR_LINKHOVER',        '#1E90FF');
define('COLOR_SELECTEDROW',      '#008000');
define('COLOR_SELECTEDINPUT',    '#F2F2F2');
define('COLOR_FIRSTROW',         '#DFDFDF');
define('COLOR_SECONDROW',        '#EFEFEF');

define('BG_TRANSPARENT', TRUE);    // set TRUE to use png images with a transparent background;
                                   // this is not supported by NS4, but is looking much better with changed color settings


define('SQL_AREA_COLS', 80);       // use this for the textarea on the SQL page (also used on the triggers,
define('SQL_AREA_ROWS', 6);        // the stored procedures and the views panels)

define('IFRAME_HEIGHT', 350);      // height in pixels for iframes

define('SQL_MAXSAVE', 100);        // defines the maximal line count to save in the session;
                                   // if '0' the whole content will be saved; if the content of the
                                   // textarea is bigger, nothing will be saved

define('SQL_HISTORY_SIZE', 25);    // number of entries in the the sql history buffer

define('SHOW_OUTPUT_ROWS', 100);   // number of rows to display on the sql_output-panel,
                                   // unless the 'Display All' button was hit

define('DATA_MAXWIDTH', 50);       // maximal width for the input fields on the dt_enter-panel

define('FKLOOKUP_ENTRIES', 1000);


define('MAX_CSV_LINE', 50000);     // maximal length for a line read from the csv import file


define('DEFAULT_ROWS', 25);        // number of rows to dispay in the watch-panel by default

define('BLOB_WINDOW_WIDTH', 600);  // default dimensions for the blob displaying windows
define('BLOB_WINDOW_HEIGHT', 800);

define('CACHE_STYLESHEET', TRUE);  // set FALSE to force relaoding of the stylesheet with every request


# four methods are selectable for use on the watchtable-panel
# for skiping to the first row to display
define('WT_SKIP_ROWS',        0x01);    // skip rows by looping (slowest, but works under all circumstances);
define('WT_STORED_PROCEDURE', 0x02);    // use a stored procedure (faster, but will cause trouble if more than
                                        // one user is browsing tables in a database by time);
define('WT_FIREBIRD_SKIP',    0x04);    // use the Firebird 'SELECT FIRST x SKIP x' syntax (fastest, but available
                                        // only with the firebird server);
define('WT_IB65_ROWS',        0x08);    // use the Interbase6.5 'ROWS x TO y' syntax (untestet, because I don't have
                                        // access to an ib65 server  *** please report any errors or success with this ***)
define('WT_BEST_GUESS',       0x10);    // ibWebAdmin is checking the login Server setting
                                        // and will use the best/fastest choice from the methods defined above

# set the watchtable method of your choice
define('WATCHTABLE_METHOD', WT_BEST_GUESS);


define('IBWA_PREFIX', 'IBWA_');                // prefix for the names of ibWebAdmins own stored procedures
define('SP_LIMIT_NAME', IBWA_PREFIX.'LIMIT');  // name for the stored procedure used by the Watch Table panel


define('SESSION_NAME', 'ibwa');         // session name to use

define('PERSISTANT_CONNECTIONS', FALSE); // whether to use fbird_pconnect() or fbird_connect();
                                         // although using persistant connections is significant faster, they cause
                                         // several tasks to fail (i.e. 'ALTER TABLE ADD CONSTRAINT ...', database maintenance)

# transaction parameters used for the calls of fbird_trans()
define('TRANS_READ', IBASE_COMMITTED|IBASE_NOWAIT|IBASE_READ);
define('TRANS_WRITE', IBASE_COMMITTED|IBASE_NOWAIT|IBASE_WRITE);

define('META_REDIRECT', FALSE);         // use server (FALSE) or client (TRUE) side redirection


define('DEBUG', FALSE);                 // if TRUE print the $debug[] to the info-panel
define('DEBUG_HTML', FALSE);            // if TRUE write the output_buffer to TMPPATH/{scriptname}.html before
                                        // sending it to the client
define('DEBUG_COMMANDS', FALSE);        // if TRUE all calls of external commands are diplayed on the info-panel
define('DEBUG_FILES', FALSE);           // if TRUE the temporary files created in TMPATH for processing by isql
                                        // are not deleted when isql is finished
                                   

if ('' != SESSION_NAME) session_name(SESSION_NAME);

if (DEBUG === TRUE) error_reporting(E_ALL | E_NOTICE | E_STRICT);

?>
