<?php
/**
 * class.testPlugin.pmFunctions.php
 *
 * ProcessMaker Open Source Edition
 * Copyright (C) 2004 - 2008 Colosa Inc.
 * *
 */

////////////////////////////////////////////////////
// testPlugin PM Functions
//
// Copyright (C) 2007 COLOSA
//
// License: LGPL, see LICENSE
////////////////////////////////////////////////////

function testPlugin_getMyCurrentDate()
{
	return G::CurDate('Y-m-d');
}

function testPlugin_getMyCurrentTime()
{
	return G::CurDate('H:i:s');
}

function testPlugin_getCustomerDetails($customerId)
{
	try 
	{
		//get the customer details from DB
		$sqlStatement = "SELECT * FROM PMT_CUSTOMERS WHERE CUSTOMER_ID = '$customerId'";
		$result = executeQuery($sqlStatement);

		if (isset($result) && count($result) > 0)
		{
			return $result[1];
		}
		else
		{
			return array("error" => "No record found for customer id provided.");

		}
	}
	catch(Exception $e)
	{
		return array("error" => $e->getMessage());
	}
}
