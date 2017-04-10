<?php 
namespace MelbaCH\SwissHolidays\Holiday;


class Ascension extends Holiday
{
	
	public static $cantons = ["AG","AI","AR","BL","BS","BE","FR","GE","GL","GR","JU","LU","NE","NW","OW","SG","SH","SZ","SO","TG","TI","UR","VS","VD","ZG","ZH"];

	public static function getDate($year){
		$date = self::getEasterDate($year);

		$date->add(new \DateInterval('P39D')); // 39 days after easter
		
		return $date;
	}


}