<?php 
namespace MelbaCH\SwissHolidays\Holiday;


class NewYearsDay extends Holiday
{
	

	public static function getDate($year){
		$date = new \DateTime("$year-1-1");
		return $date;
	}


}