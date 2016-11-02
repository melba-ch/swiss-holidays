<?php 
namespace MelbaCH\SwissHolidays\Holiday;


class NewYearsEve extends Holiday
{
	
	public static function getDate($year){
		$date = new \DateTime("$year-12-31");
		return $date;
	}


}