<?php 
namespace MelbaCH\SwissHolidays\Holiday;


class StBerchtold extends Holiday
{
	

	public static function getDate($year){
		$date = new \DateTime("$year-1-2");
		return $date;
	}


}