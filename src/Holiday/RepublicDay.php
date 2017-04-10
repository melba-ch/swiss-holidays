<?php 
namespace MelbaCH\SwissHolidays\Holiday;


class RepublicDay extends Holiday
{
	

	public static function getDate($year){
		$date = new \DateTime("$year-3-1");
		return $date;
	}


}