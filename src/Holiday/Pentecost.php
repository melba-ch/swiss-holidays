<?php 
namespace MelbaCH\SwissHolidays\Holiday;


class Pentecost extends Holiday
{
	

	public static function getDate($year){
		$date = self::getEasterDate($year);

		$date->add(new \DateInterval('P49D')); // 49 days after easter
		
		return $date;
	}


}