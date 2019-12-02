<?php
/**
 * class.dipoleDashlets.pmFunctions.php
 *
 * ProcessMaker Open Source Edition
 * Copyright (C) 2004 - 2008 Colosa Inc.
 * *
 */

////////////////////////////////////////////////////
// dipoleDashlets PM Functions
//
// Copyright (C) 2007 COLOSA
//
// License: LGPL, see LICENSE
////////////////////////////////////////////////////


/**
 * Current Date Functions
 * @class dipoleDashlets_getMyCurrentDate
 *
 * @name Get Current Date
 * @icon /plugin/dipoleDashlets/dipoleDashlets.png
 * @className class.pmFunctions.php
 */
function dipoleDashlets_getMyCurrentDate()
{
	return G::CurDate('Y-m-d');
}


/**
 * Greeting Functions
 * @class dipoleDashlets_greetings
 *
 * @name Greetings
 * @icon /plugin/dipoleDashlets/dipoleDashlets.png
 * @className class.pmFunctions.php
 */
function dipoleDashlets_greetings($name)
{
	return "Hello " . $name;
}

function dipoleDashlets_getMyCurrentTime()
{
	return G::CurDate('H:i:s');
}
