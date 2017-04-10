<?php 
namespace MelbaCH\SwissHolidays\Holiday;


class SaintsPeterAndPaul extends Holiday
{
	

	public static function getDate($year){
		$date = new \DateTime("$year-6-29");
		return $date;
	}


}