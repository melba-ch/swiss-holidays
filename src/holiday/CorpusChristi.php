<?php 
namespace MelbaCH\SwissHolidays\Holiday;


class CorpusChristi extends Holiday
{
	

	public static function getDate($year){
		$date = self::getEasterDate($year);

		$date->add(new \DateInterval('P60D')); // 60 days after easter
		
		return $date;
	}


}