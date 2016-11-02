<?php 
namespace MelbaCH\SwissHolidays\Holiday;


class NafelserFahrt extends Holiday
{
	

	public static function getDate($year){
		$date = new \DateTime("$year-4-3");
		return $date;
	}


}