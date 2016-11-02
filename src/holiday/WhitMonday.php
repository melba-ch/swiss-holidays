<?php 
namespace MelbaCH\SwissHolidays\Holiday;


class WhitMonday extends Holiday
{
	

	public static function getDate($year){
		$date = self::getEasterDate($year);

		$date->add(new \DateInterval('P50D')); // 50 days after easter
		
		return $date;
	}


}