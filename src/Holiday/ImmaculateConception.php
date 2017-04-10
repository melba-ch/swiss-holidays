<?php 
namespace MelbaCH\SwissHolidays\Holiday;


class ImmaculateConception extends Holiday
{
	

	public static function getDate($year){
		$date = new \DateTime("$year-12-8");
		return $date;
	}


}