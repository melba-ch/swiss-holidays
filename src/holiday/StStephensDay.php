<?php 
namespace MelbaCH\SwissHolidays\Holiday;


class StStephensDay extends Holiday
{
	

	public static function getDate($year){
		$date = new \DateTime("$year-12-26");
		return $date;
	}


}