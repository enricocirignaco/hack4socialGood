<?php

/***************************************************************
 * Extension Manager/Repository config file for ext "typo3db_legacy".
 *
 * Auto generated 18-03-2024 10:48
 *
 * Manual updates:
 * Only the data in the array - everything else is removed by next
 * writing. "version" and "dependencies" must not be touched!
 ***************************************************************/

$EM_CONF[$_EXTKEY] = array (
  'title' => 'TYPO3_DB compatibility layer for TYPO3 v9.x & TYPO3 v10.x',
  'description' => 'Provides $GLOBALS[\'TYPO3_DB\'] as backwards-compatibility with legacy functionality for extensions that haven\'t fully migrated to doctrine yet.',
  'category' => 'be',
  'state' => 'stable',
  'uploadfolder' => true,
  'createDirs' => '',
  'clearCacheOnLoad' => 0,
  'author' => 'TYPO3 Community',
  'author_email' => '',
  'author_company' => '',
  'version' => '1.1.4',
  'constraints' => 
  array (
    'depends' => 
    array (
      'typo3' => '9.4.0-10.4.99',
    ),
    'conflicts' => 
    array (
    ),
    'suggests' => 
    array (
    ),
  ),
  'clearcacheonload' => true,
);

