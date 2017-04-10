<?php 
namespace MelbaCH\SwissHolidays\Holiday;


class LaborDay extends Holiday
{
	

	public static function getDate($year){
		$date = new \DateTime("$year-5-1");
		return $date;
	}


}