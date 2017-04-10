<?php 
namespace MelbaCH\SwissHolidays\Holiday;


class Epiphany extends Holiday
{
	

	public static function getDate($year){
		$date = new \DateTime("$year-1-6");
		return $date;
	}


}