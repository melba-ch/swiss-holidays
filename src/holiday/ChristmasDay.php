<?php 
namespace MelbaCH\SwissHolidays\Holiday;


class ChristmasDay extends Holiday
{
	

	public static function getDate($year){
		$date = new \DateTime("$year-12-25");
		return $date;
	}


}