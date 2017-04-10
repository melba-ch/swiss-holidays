<?php 
namespace MelbaCH\SwissHolidays\Holiday;


class EasterSunday extends Holiday
{
	

	public static function getDate($year){
		$date = self::getEasterDate($year);
		
		return $date;
	}


}