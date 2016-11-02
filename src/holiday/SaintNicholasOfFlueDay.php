<?php 
namespace MelbaCH\SwissHolidays\Holiday;


class SaintNicholasOfFlueDay extends Holiday
{
	

	public static function getDate($year){
		$date = new \DateTime("$year-9-25");
		return $date;
	}


}