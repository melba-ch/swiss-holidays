<?php 
namespace MelbaCH\SwissHolidays\Holiday;


class StJosephsDay extends Holiday
{
	

	public static function getDate($year){
		$date = new \DateTime("$year-3-19");
		return $date;
	}


}