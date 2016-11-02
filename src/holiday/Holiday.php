<?php
namespace MelbaCH\SwissHolidays\Holiday;


class Holiday
{

	public static $cantons = ["AG","AI","AR","BL","BS","BE","FR","GE","GL","GR","JU","LU","NE","NW","OW","SG","SH","SZ","SO","TG","TI","UR","VS","VD","ZG","ZH"];

	public static function getEasterDate($year){

		$easter = easter_days($year);

		$date = new \DateTime("$year-3-21"); // 21 March
		$date->add(new \DateInterval('P'.$easter.'D')); // set date to easter
		
		return $date;
   }

}