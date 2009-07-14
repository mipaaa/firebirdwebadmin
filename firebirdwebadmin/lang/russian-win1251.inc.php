<?php
// File           russian-win1251.inc.php / ibWebAdmin
// Purpose        russian strings definitions
// Author         Andrej Surkov <sura@mail.ru>
// Based on orginal File by Lutz Brueckner <irie@gmx.de>
// Copyright      (c) 2000, 2001, 2002, 2003, 2004, 2005 by Lutz Brueckner,
//                published under the terms of the GNU General Public Licence v.2,
//                see file LICENCE for details
// Created        <03/11/19 14:56:00 lb>       
//
// $Id: russian-win1251.inc.php,v 1.8 2005/10/05 20:26:31 lbrueckner Exp $

// strings used for the tabfolder menu
$menu_strings = array('Database'    => '&#1041;&#1072;&#1079;&#1072; &#1044;&#1072;&#1085;&#1085;&#1099;&#1093;',   
                      'Tables'      => '&#1058;&#1072;&#1073;&#1083;&#1080;&#1094;&#1099;',     
                      'Accessories' => '&#1053;&#1072;&#1076;&#1089;&#1090;&#1088;&#1086;&#1081;&#1082;&#1080;',
                      'SQL'         => 'SQL',
                      'Data'        => '&#1044;&#1072;&#1085;&#1085;&#1099;&#1077;',
                      'Users'       => '&#1055;&#1086;&#1083;&#1100;&#1079;&#1086;&#1074;&#1072;&#1090;&#1077;&#1083;&#1080;',      
                      'Admin'       => '&#1040;&#1076;&#1084;&#1080;&#1085;&#1080;&#1089;&#1090;&#1088;&#1080;&#1088;&#1086;&#1074;&#1072;&#1085;&#1080;&#1077;'
                      );

// the coordinates for the image area used by the tabfolder menu
$menu_coords = array('Database'   => '8,0,113,37',
                     'Tables'     => '115,0,188,37',
                     'Accessories'=> '190,0,286,37',
                     'SQL'        => '288,0,325,37',
                     'Data'       => '327,0,393,37',
                     'Users'      => '395,0,506,37',
                     'Admin'      => '508,0,672,37',
                     );

// strings used as panel titles
$ptitle_strings = array('info'        => '���������', 
                        'db_login'    => '������������ � ���� ������',  
                        'db_create'   => '������� ���� ������',
                        'db_delete'   => '������� ���� ������',    
                        'db_systable' => '��������� �������',      
                        'db_meta'     => '����-������',      
                        'tb_show'     => '�������� ������',
                        'tb_create'   => '������� ����� �������',   
                        'tb_modify'   => '�������� �������',
                        'tb_delete'   => '������� �������',       
                        'acc_index'   => '�������',        
                        'acc_gen'     => '����������',
                        'acc_trigger' => '��������',          
                        'acc_proc'    => '�������� ���������',          
                        'acc_domain'  => '������',
                        'acc_view'    => '�������������',
                        'acc_udf'     => 'User Defined Functions',
                        'acc_exc'     => 'Exceptions',
                        'sql_enter'   => '���������� ������� ��� ������� SQL',
                        'sql_output'  => '�������� ������ SQL', 
                        'tb_watch'    => '�������� �������',
                        'dt_enter'    => '������ ������',
                        'dt_export'   => 'Export Data',
                        'dt_import'   => 'CSV Import',
                        'usr_user'    => '������������',              
                        'usr_role'    => '����',              
                        'usr_grant'   => 'Grants',
                        'usr_cust'    => 'Customizing',
                        'adm_server'  => '���������� �������', 
                        'adm_dbstat'  => '���������� ���� ������',
                        'adm_gfix'    => '���������� ����� ������',
                        'adm_backup'  => '��������� �����������',
                        'adm_restore' => '�������������� �� ������',
                        'Open'        => '�������',
                        'Close'       => '�������',
                        'Up'          => '����',
                        'Top'         => '����',
                        'Bottom'      => '���',
                        'Down'        => '����'
                        );

// strings to inscribe buttons
$button_strings = array('Login'    => '������������',
                        'Logout'   => '�����',
                        'Create'   => '�������',
                        'Delete'   => '�������',
                        'Select'   => '��������',
                        'Save'     => '���������',
                        'Reset'    => '�����',
                        'Cancel'   => '������',
                        'Add'      => '��������',
                        'Modify'   => '��������',
                        'Ready'    => '������',
                        'Yes'      => '��',
                        'No'       => '���',
                        'DoQuery'  => '��������� ������',
                        'QueryPlan'=> 'Query Plan',
                        'Go'       => '�������',
                        'DisplAll' => '�������� ��',
                        'Insert'   => '��������',
                        'Export'   => '�������',
                        'Import'   => '������',
                        'Remove'   => '������',
                        'Drop'     => '�������',
                        'Set'      => '����������',
                        'Clear'    => '��������',
                        'SweepNow' => 'Sweep Now',
                        'Execute'  => '���������',
                        'Backup'   => '���������',
                        'Restore'  => '������������',
                        'Reload'   => '�������������',
                        'OpenAll'  => '������� ���',
                        'CloseAll' => '������� ���',
                        'Defaults' => '������������ �������� �� ���������',
                        'Load'     => '���������'
                        );

// strings on the database page
$db_strings = array('Database' => '���� ������',
                    'Host'     => '����',
                    'Username' => '��� ������������',
                    'Password' => '������',
                    'Role'     => '����',
                    'Cache'    => '���',
                    'Charset'  => '���������',
                    'Dialect'  => '�������',
                    'Server'   => 'Server',
                    'NewDB'    => '����� ���� ������',
                    'PageSize' => '������ ��������',
                    'DelDB'    => '������� ���� ������',
                    'SysTables'=> '��������� �������',
                    'SysData'  => '��������� ������',
                    'FField'   => '���� �������',
                    'FValue'   => '�������� �������',
                    'Refresh'  => '��������',
                    'Seconds'  => '������'
                    );

// strings on the table page
$tb_strings = array('Name'      => '��������',
                    'Type'      => '���',
                    'Length'    => '�����',
                    'Prec'      => '��������',
                    'PrecShort' => '��������',
                    'Scale'     => '������ ����� �������',
                    'Charset'   => '���������',
                    'Collate'   => '����������',
                    'Collation' => '����������',
                    'NotNull'   => 'Not Null',
                    'Unique'    => 'Unique',
                    'Computed'  => '�����������',
                    'Default'   => '�������� �� ���������',
                    'Primary'   => '���������',
                    'Foreign'   => '�������',
                    'TbName'    => '�������� �������',
                    'Fields'    => '����� ��������',
                    'DefColumn' => '����������� �������',
                    'SelTbMod'  => '�������� �������',
                    'DefNewCol' => '����������� ��� ������ �������',
                    'NewColPos' => '����� ��������� ������� � �������',
                    'SelColDel' => '�������� ������� ��� ��������',
                    'SelColMod' => '�������� ������� ��� ���������',
                    'AddCol'    => '�������� �������',
                    'SelTbDel'  => '�������� �������',
                    'Datatype'  => '��� ������',
                    'Size'      => '������',
                    'Subtype'   => '������',
                    'SegSiShort'=> '������ ��������',
                    'Domain'    => '�����',
                    'CompBy'    => 'Computed by',
                    'Table'     => '�������',
                    'Column'    => '�������',
                    'Source'    => 'Source',
                    'Check'     => '�����������',
                    'Yes'       => '��',
                    'DispCounts'=> '���������� ���-�� �������',
                    'DispCNames'=> 'constraint names',
                    'DispDef'   => 'default values',
                    'DispComp'  => 'computed values',
                    'DropPK'    => '������� ��������� ����',
                    'DropFK'    => '������� ������� ����',
                    'DropUq'    => 'Drop Unique Constraint',
                    'FKName'    => '��� �������� �����',
                    'OnUpdate'  => 'On Update',
                    'OnDelete'  => 'On Delete',
                    'Table1'    => '�������',
                    'Column1'   => '�������'
                    );

// strings on the accessories page
$acc_strings = array('CreateIdx' => '������� ����� ������',
                     'ModIdx'    => '�������� ������ %s',
                     'Name'      => '���',
                     'Active'    => 'Active',
                     'Unique'    => 'Unique',
                     'Sort'      => 'Sort',
                     'Table'     => '�������',
                     'Columns'   => '�������',
                     'SelIdxMod' => '�������� ������ ��� ���������',
                     'SelIdxDel' => '�������� ������ ��� ��������',
                     'ColExpl'   => '�������(�������), ���������� ��������',
                     'Value'     => '��������',
                     'SetValue'  => '���������� ����� ��������',
                     'DropGen'   => '������� ���������',
                     'CreateGen' => '������� ����� ���������',
                     'StartVal'  => '��������� ��������',
                     'CreateTrig'=> '������� ����� �������',
                     'SelTrigMod'=> '�������� ������� ��� ���������',
                     'SelTrigDel'=> '�������� ������� ��� ��������',
                     'Type'      => '���',
                     'Pos'       => '���������',
                     'Phase'     => 'Phase',
                     'Position'  => 'Position',
                     'Status'    => '������',
                     'Source'    => '�������� ���',
                     'ModTrig'   => '�������� ������� %s',
                     'CreateDom' => '������� ����� �����',
                     'SelDomDel' => '�������� ����� ��� ��������',
                     'SelDomMod' => '�������� ����� ��� ���������',
                     'Size'      => '������',
                     'Charset'   => '���������',
                     'Collate'   => '������� ���������',
                     'PrecShort' => '��������',
                     'Scale'     => '������ ����� �������',
                     'Subtype'   => '������',
                     'SegSiShort'=> '������ ��������',
                     'ModDomain' => '�������� ����� %s',
                     'Generator' => '���������',
                     'Index'     => '������',
                     'Trigger'   => '�������',
                     'Domain'    => '�����',
                     'CreateProc'=> '������� ����� ���������',
                     'ModProc'   => '�������� ��������� %s',
                     'SelProcMod'=> '�������� ��������� ��� ���������',
                     'SelProcDel'=> '�������� ��������� ��� ��������',
                     'SP'        => '�������� ���������',
                     'Param'     => '���������',
                     'Return'    => '������������ ��������',
                     'CreateView'=> '������� ����� �������������',
                     'SelViewDel'=> '�������� ������������� ��� ��������',
                     'SelViewMod'=> '�������� ������������� ��� ���������',
                     'CheckOpt'  => 'with check option',
                     'ModView'   => '�������� ������������� %s',
                     'Yes'       => '��',
                     'No'        => '���',
                     'Module'    => 'Module',
                     'EPoint'    => 'Entrypoint',
                     'IParams'   => 'Input Parameters',
                     'Returns'   => 'Returns',
                     'UDF'       => 'user defined function',
                     'SelUdfDel' => 'Select function to delete',
                     'Exception' => 'Exception',
                     'Message'   => 'Message',
                     'SelExcDel' => 'Select exception to delete',
                     'CreateExc' => 'Create new exception',
                     'SelExcMod' => 'Select exception to modify',
                     'ModExc'    => 'Modify exception %s'
                     );

// strings on the sql page incl. the watch table panel
$sql_strings = array('DisplBuf' => '�������� ������ �� ������',
                     'SelTable' => '�������� �������',
                     'Config'   => '���������',
                     'Column'   => '�������� �������',
                     'Show'     => '����������',
                     'Sort'     => '�����������',
                     'BlobLink' => 'Blob ��� ������',
                     'BlobType' => '��� Blob�',
                     'Rows'     => '����� �����',
                     'Start'    => '������ �',
                     'Dir'      => '������� ����������',
                     'ELinks'   => '������ ��������',
                     'DLinks'   => '������ �������',
                     'Asc'      => '�� �����������',
                     'Desc'     => '�� ��������',
                     'Restrict' => '�������������� ����� �������, �������� FIELDNAME>=1000',
                     'Prev'     => '����������',
                     'Next'     => '���������',
                     'End'      => '�����',
                     'Total'    => '�����',
                     'Edit'     => '��������',
                     'Delete'   => '�������',
                     'Yes'      => '��',
                     'No'       => '���',
                     'TBInline' => 'Text Blobs Inline',
                     'TBChars'  => 'Text Blob Characters'
                     );

// strings on the data page
$dt_strings = array('SelTable' => '�������� �������',
                    'Table'    => '�������',
                    'EditFrom' => '%1$sEdit from table %2$s',
                    'FileName' => '��� �����',
                    'EntName'  => '������� ���',
                    'FileForm' => '� ������� �����',
                    'ConvEmpty'=> 'on import convert empty values to NULL',
                    'CsvForm1' => '��� �������� ��������� � ������� ������� (") � ��������� ��������',
                    'CsvForm2' => '������� ������ �������� �������',
                    'CsvForm3' => '���� ������ ��������� ��������� ����� ������ (0x0a)',
                    'ColConf'  => 'Configuration for Column %1$s',
                    'ColFKLook'=> 'Column for foreign key lookup',
                    'FKLookup' => 'foreign key lookup',
                    'IARow'    => 'insert another row',
                    'INRow'    => 'insert as a new row',
                    'Drop'     => 'drop',
                    'ExpOptCsv'=> 'CSV-Data',
                    'ExpOptExt'=> 'External Table',
                    'ExpOptPhp'=> 'PHP Code',
                    'ExpOptSql'=> 'SQL',
                    'ExpOptXml'=> 'XML',
                    'ExpFmTbl' => 'Table',
                    'ExpFmDb'  => 'Database',
                    'ExpFmQry' => 'Query',
                    'ExpTgFile'=> 'File',
                    'ExpTgScr' => 'Screen',
                    'GenOpts'  => 'General Options',
                    'ReplNull' => 'Replace <i>NULL</i> values by',
                    'DFormat'  => 'Date format',
                    'TFormat'  => 'Time format',
                    'CsvOpts'  => 'CSV-Options',
                    'FTerm'    => 'Fields terminated by',
                    'FEncl'    => 'Fields enclosed by',
                    'FTEncl'   => 'Field types to enclose',
                    'All'      => 'all',
                    'Numeric'  => 'numeric',
                    'FEsc'     => 'Escape character',
                    'LTerm'    => 'Lines terminated by',
                    'FNamesF'  => 'Field names at first row'
                    );

// strings on the user page
$usr_strings = array('CreateUsr' => '������� ������ ������������',
                     'ModUser'   => '�������� ������������ %s',
                     'UName'     => '��� ������������',
                     'FName'     => '���',
                     'MName'     => '��������',
                     'LName'     => '�������',
                     'UserID'    => 'ID ������������',
                     'GroupID'   => 'ID ������',
                     'SysdbaPW'  => '������ ������������ SYSDBA',
                     'Required'  => '��������� ��� ��������, ��������� ��� ��������',
                     'USelMod'   => '�������� ������������ ��� ���������',
                     'USelDel'   => '�������� ������������ ��� ��������',
                     'Password'  => '������',
                     'RepeatPW'  => '������������� ������',
                     'Name'      => '���',
                     'Owner'     => '��������',
                     'Members'   => '�����',
                     'Role'      => '����',
                     'User'      => '������������',
                     'CreateRole'=> '������� ����� ����',
                     'RoleSelDel'=> '�������� ���� ��� ��������',
                     'RoleAdd'   => '�������� ������������ � ����',
                     'RoleRem'   => '������ ������������ �� ����',
                     'ColSet'    => '��������� �����',
                     'CBg'       => '���',
                     'CPanel'    => 'Panel Frame',
                     'CArea'     => '��� ������',
                     'CHeadline' => '��� ���������',
                     'CMenubrd'  => '������� ����',
                     'CIfBorder' => 'Iframe Border',
                     'CIfBg'     => 'Iframe Background',
                     'CLink'     => '������',
                     'CHover'    => '������ ��� ���������� ����',
                     'CSelRow'   => '���������� ������',
                     'CSelInput' => '���������� ���� �����',
                     'CFirstRow' => '�������� ������ �������',
                     'CSecRow'   => '׸���� ������ �������',
                     'Appearance'=> '���',
                     'Language'  => '����',
                     'Fontsize'  => '������ ������ � ������',
                     'TACols'    => '�������� � ���� ������',
                     'TARows'    => '����� � ���� ������',
                     'IFHeight'  => 'Iframe Height in Pixel', 
                     'Attitude'  => 'Attitude',
                     'AskDel'    => 'Confirm deletion of objects and data',
                     'Yes'       => '��',
                     'No'        => '���'
                     );

// strings on the admin page
$adm_strings = array('SysdbaPW'  => '������ ������������ SYSDBA',
                     'Required'  => '���������� ���� �� �� ��������� ���������� ���� ���� ������',
                     'Sweeping'  => 'Sweeping',
                     'SetInterv' => '���������� ������ sweep (���-�� ����������)',
                     'DBDialect' => '������� ��',
                     'Buffers'   => '������ ����',
                     'AccessMode'=> '����� �������',
                     'WriteMode' => '����� ������',
                     'ReadWrite' => '������/������',
                     'ReadOnly'  => '������ ������',
                     'Sync'      => '����������',
                     'Async'     => '�����������',
                     'UseSpace'  => 'Use Space',
                     'SmallFull' => 'full',
                     'Reserve'   => 'reserve',
                     'DataRepair'=> '�������������� ������',
                     'Validate'  => '���������',
                     'Full'      => '������',
                     'Mend'      => '������',
                     'NoUpdate'  => '�� ���������',
                     'IgnoreChk' => '������������ ������ ����������� �����',
                     'Transact'  => '����������',
                     'Shutdown'  => '����������',
                     'Commit'    => '�����������',
                     'Rollback'  => '�����',
                     'TwoPhase'  => '���������� ��������������',
                     'AllLimbo'  => 'all limbo transactions',
                     'NoConns'   => '������ ����� ����������',
                     'NoTrans'   => '������ ����� ����������',
                     'Force'     => '��������������',
                     'ForSeconds'=> '��/����� %s �������',
                     'Reconnect' => '������������ ���������� ibWebAdmin ����� ����������',
                     'Rescind'   => '�������� ����������',
                     'BTarget'   => '��������� �����',
                     'FDName'    => '��� ����� ��� ����������',
                     'Options'   => '�����',
                     'BConvert'  => '�������������� ������� ����� �� ���������� �������',
                     'BNoGC'     => '�� �������� ����� ��� ��������� ����������',
                     'BIgnoreCS' => '������������ ����������� ����� ��� ��������� ����������',
                     'BIgnoreLT' => 'Ignore limbo transactions during backup',
                     'BTransport'=> '��������� ���������� � ������������������� �������',
                     'BMDOnly'   => '��������� ���������� ������ ��� ����������',
                     'BMDOStyle' => '���������� � ������ �������',
                     'RSource'   => '�������� ��������������',
                     'RTarget'   => '��������������',
                     'TargetDB'  => '��������������� ���� ������',
                     'NewFile'   => '������������ � ����� ����',
                     'RestFile'  => '�������� ������������ ����',
                     'PageSize'  => '������ ��������',
                     'UseAll'    => '������������ ���� ������ �� 100%-� ����������� ������ �������� ������',
                     'OneAtTime' => '��������������� ���� ������� �� ���� ���',
                     'IdxInact'  => '������� ��������� ����� ��������������',
                     'NoValidity'=> '������� ����������� ������������� ����������������� ����������',
                     'KillShad'  => '�� ��������� ����� ����������� ����� ���� ���� ������',
                     'ConnAfter' => '���������� ibWebAdmin � ��������������� ���� ������',
                     'Verbose'   => 'Verbose',
                     'Analyze'   => 'Analyze'
                     );

// strings for the info-panel
$info_strings = array('Connected' => '��������� � ���� ������',
                      'ExtResult' => '��������� �� ������� �������',
                      'IBError'   => '������ InterBase',
                      'ExtError'  => '������ �� ������� ��������',
                      'Error'     => '������',
                      'Warning'   => '��������������',
                      'Message'   => '���������',
                      'ComCall'   => '����� �������',
                      'Debug'     => '���������� �����/Debug output',
                      'PHPError'  => '������ PHP'
                      );

$MESSAGES = array('BLOB_BROKEN_INFO'      => "��������� blob �� �������� (�� ������� ���� � php4.0.2 � php4.0.3).<br>\n"
                                            ."���� ��� ���������� ��������� blob �� ������ �������� ���� ��������� php.<br>\n",
                  'SP_CREATE_INFO'        => 'ibWebAdmin ������ �������� ��������� "'.SP_LIMIT_NAME.'" ������� ������������ �������� �������� ������� '
                                            ."� ��������� � ����� ���� ������.<br>\n"
                                            .'���� ��������� ������� ���������� ibWebAdmin ������������, ����������, �������� ��������'
                                            ."���������� WATCHTABLE_METHOD � ����� inc/configuration.inc.php.<br>\n",
                  'EDIT_ADD_PRIMARY'      => "���� �������� ����������� �������������� ���� ���������� ����� ������ ���� ������� ��� ������ � ���������� ������� �������� �������.<br>\n"
                                            ."��������� ������������� ������� ����������� ���� ���������� �����.",
                  'CSV_IMPORT_COUNT'      => "%1\$d ����� ������������� � ������� %2\$s<br>\n",
                  'CONFIRM_TABLE_DELETE'  => '�� ������������� ������ ������� ������� %s?',
                  'CONFIRM_COLUMN_DELETE' => '�� ������������� ������ ������� ������� %1$s �� ������� %2$s?',
                  'CONFIRM_DB_DELETE'     => '�� ������������� ������ ������� ���� ������ %s?',
                  'CONFIRM_TRIGGER_DELETE'=> '�� ������������� ������ ������� ������� %s?',
                  'CONFIRM_DOMAIN_DELETE' => '�� ������������� ������ ������� ����� %s?',
                  'CONFIRM_INDEX_DELETE'  => '�� ������������� ������ ������� ������ %s?',
                  'CONFIRM_GEN_DELETE'    => '�� ������������� ������ ������� ��������� %s?',
                  'CONFIRM_USER_DELETE'   => '�� ������������� ������ ������� ������������ %s?',
                  'CONFIRM_ROW_DELETE'    => '�� ������������� ������ ������� �� ������� %s %s?',
                  'CONFIRM_SP_DELETE'     => '�� ������������� ������ ������� �������� ��������� %s?',
                  'CONFIRM_VIEW_DELETE'   => '�� ������������� ������ ������� ������������� %s?',
                  'CONFIRM_UDF_DELETE'    => 'Do you really want to delete the function %s?',
                  'CONFIRM_EXC_DELETE'    => 'Do you really want to delete the exception %s?',
                  'NO_VIEW_SUPPORT'       => "�������������� � �������� �� ������������� � ��������� ������ �� ��������������.<br>\n",
                  'CREATE_DB_SUCCESS'     => "���� ������ %s ���� ������� �������.\n",
                  'HAVE_DEPENDENCIES'     => '�� ������ ������� ��������� ������� ������ ��� �� ������� ������� %1$s %2$s: %3$s',
                  'COOKIES_NEEDED'        => '���� �� ������ ������������ ����������� ������ ��������� ����� ��������� ������������� cookies � ���������� ������ ��������.'
                  );

$WARNINGS = array('CAN_NOT_EXPORT_BLOBS'  => "� ��������� ���� ������� ������� blob-����.<br>\n"
                                            ."�������������� csv-������� ������ ��������� blob-�����.<br>\n",
                  'CAN_NOT_IMPORT_BLOBS'  => "� ��������� ���� ������� ������� blob-����.<br>\n"
                                            ."�������������� csv-������ ������ ��������� blob-�����.<br>\n",
                  'SELECT_TABLE_FIRST'    => "����������, �������� ������� �������<br>\n",
                  'SELECT_FILE_FIRST'     => "����������, ������� �������� ���� ��� �������<br>\n",
                  'CAN_NOT_ALTER_DOMAINS' => "��������� ����������� �������� ���������� �� ������� �� �������������� InterBase.<br>\n"
                                            ."���������� �������� ����������� ������ �� ��������� ����������.<br>\n",
                  'CAN_NOT_EDIT_TABLE'    => "�������������� ��������� ������� ����������.<br>\n"
                                            ."��� �������������� �������� ������ ������� � ��������� ������.<br>\n",
                  'CAN_NOT_DEL_TABLE'     => "������� ������ �� ��������� ������� ������.<br>\n"
                                            ."�������� ����� �������� ������ �� ������ � ��������� ������.<br>\n",
                  'DEL_NO_PERMISSON'      => "� ��� ��� ���������� �� ��������/������ � ������� %s<br>\n",
                  'EDIT_NO_PERMISSON'     => "� ��� ��� ���������� �� ���������/������ � ������� %s<br>\n",
                  'CAN_NOT_ACCESS_DIR'    => "���-������ �� ���� �������� ������ � ���������� %s<br>\n",
                  'NAME_IS_KEYWORD'       => "%s �������� ����������������� ������ interbase<br>\n", 
                  'NAMES_ARE_KEYWORDS'    => "%s �������� ������������������ ������� interbase<br>\n",
                  'NEED_SYSDBA_PW'        => "����� ���������, �������� � ������� ������������� ���������� ������ ������ ������������ SYSDBA.<br>\n",
                  'PW_REQUIRED'           => "��������� ������ ������<br>\n",
                  'UN_REQUIRED'           => "��������� ������ ��� ������������<br>\n",
                  'PW_WRONG_REPEAT'       => "������������� ������ ���� ������� �������.<br>\n",
                  'BAD_ISQLPATH'          => "����������� ���� isql ����������� � %s!<br>\n"
                                            ."����������, ��������� �������� ���������� BINPATH � ����� inc/configuration.inc.php.<br>\n",
                  'BAD_TMPPATH'           => "Your configured TMPPATH directory '%s' didn't exist or is not writeable for the webserver process!<br>\n"
                                            ."Please check the value for TMPPATH in inc/configuration.inc.php.<br>\n"
                  );

$ERRORS   = array('CREATE_DB_FAILED'      => '�� ������� ������� ���� ������ <b>%s</b>!',
                  'NO_DB_SELECTED'        => '�������� ������� ��� ���� ������!<br>',
                  'WRONG_DB_SUFFIX'       => '��� ����� ���� ������ ������ ������������ �� <b>%s</b>',
                  'DB_NOT_ALLOWED'        => '������ � <b>%s</b> �� ��������.<br>'
                                             .'(check $ALLOWED_FILES and $ALLOWED_DIRS in inc/configuration.php)',
                  'NO_IBASE_MODULE'       => '<b>� ����� �������� ��������� PHP �� �������� ��������� interbase!</b><br>'
                                            .'���������������� ��� PHP � ������ --with-interbase[=DIR]<br>'
                                            .'��� ��������� ���� php.ini ��� ����� ����������� interbase.so, ��� �������������� interbase.dll.',
                  'DISABLED_CMD'          => 'Sql-��������� ���������� "%s" ��������� � ������ ������������!',
                  'BAD_BINPATH'           => "�� ���� ����� ������� <b>%s</b> !\n"
                                            ."����������, ��������� �������� ���������� BINPATH � ����� inc/configuration.inc.php.\n"
                  );

// charset encoding  for html output
$charset = 'windows-1251';

?>