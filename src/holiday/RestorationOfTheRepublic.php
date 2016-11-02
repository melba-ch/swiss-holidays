<?php 
namespace MelbaCH\SwissHolidays\Holiday;


class RestorationOfTheRepublic extends Holiday
{
	

	public static function getDate($year){
		$date = new \DateTime("$year-12-31");
		return $date;
	}


}