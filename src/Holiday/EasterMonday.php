<?php 
namespace MelbaCH\SwissHolidays\Holiday;


class EasterMonday extends Holiday
{
	

	public static function getDate($year){
		$date = self::getEasterDate($year);

		$date->add(new \DateInterval('P1D')); // 1 day after easter
		
		return $date;
	}


}