<?php

/**
 * Transform DOCX to Text.
 *
 * @category   Phpdocx
 * @package    examples
 * @subpackage easy
 * @copyright  Copyright (c) 2009-2011 Narcea Producciones Multimedia S.L.
 *             (http://www.2mdc.com)
 * @license    http://www.phpdocx.com/wp-content/themes/lightword/pro_license.php
 * @version    2012.06.13
 * @link       http://www.phpdocx.com
 * @since      File available since Release 2.6
 */
require_once '../../classes/CreateDocx.inc';

$docx = new CreateDocx();

$docx->docx2txt('../files/Text.docx', 'text.txt');