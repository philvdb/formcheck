<?php if (!defined('TL_ROOT')) die('You can not access this file directly!');

/**
 * TYPOlight webCMS
 * Copyright (C) 2005 Leo Feyer
 *
 * This program is free software: you can redistribute it and/or
 * modify it under the terms of the GNU Lesser General Public
 * License as published by the Free Software Foundation, either
 * version 2.1 of the License, or (at your option) any later version.
 * 
 * This program is distributed in the hope that it will be useful,
 * but WITHOUT ANY WARRANTY; without even the implied warranty of
 * MERCHANTABILITY or FITNESS FOR A PARTICULAR PURPOSE. See the GNU
 * Lesser General Public License for more details.
 * 
 * You should have received a copy of the GNU Lesser General Public
 * License along with this program. If not, please visit the Free
 * Software Foundation website at http://www.gnu.org/licenses/.
 *
 * PHP version 5
 * @copyright  4ward.media 2010
 * @author     Christoph Wiechert <christoph.wiechert@4wardmedia.de>
 * @author     Andreas Schempp <andreas@schempp.ch>
 * @package    formcheck
 * @license    LGPL 
 * @filesource
 */




/**
 * add formcheck classes
 */
$GLOBALS['TL_DCA']['tl_member']['fields']['firstname']['eval']['class'] = "validate['required']";
$GLOBALS['TL_DCA']['tl_member']['fields']['lastname']['eval']['class'] = "validate['required']";
$GLOBALS['TL_DCA']['tl_member']['fields']['dateOfBirth']['eval']['class'] = "validate['date']";
$GLOBALS['TL_DCA']['tl_member']['fields']['phone']['eval']['class'] = "validate['phone']";
$GLOBALS['TL_DCA']['tl_member']['fields']['mobile']['eval']['class'] = "validate['phone']";
$GLOBALS['TL_DCA']['tl_member']['fields']['fax']['eval']['class'] = "validate['phone']";
$GLOBALS['TL_DCA']['tl_member']['fields']['email']['eval']['class'] = "validate['required','email']";
$GLOBALS['TL_DCA']['tl_member']['fields']['website']['eval']['class'] = "validate['url']";
$GLOBALS['TL_DCA']['tl_member']['fields']['username']['eval']['class'] = "validate['required','extnd']";
$GLOBALS['TL_DCA']['tl_member']['fields']['password']['eval']['class'] = "validate['required','length[8,-1]','confirm[password]','differs[username]']";