<?php 
namespace MelbaCH\SwissHolidays\Holiday;


class SwissNationalDay extends Holiday
{
	

	public static function getDate($year){
		$date = new \DateTime("$year-8-1");
		return $date;
	}


}