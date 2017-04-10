<?php 
namespace MelbaCH\SwissHolidays\Holiday;


class PalmSunday extends Holiday
{
	

	public static function getDate($year){
		$date = self::getEasterDate($year);
		
		$date->sub(new \DateInterval('P7D')); // 7 days before easter

		return $date;
	}


}