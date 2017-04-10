<?php 
namespace MelbaCH\SwissHolidays\Holiday;


class FeteDIndependance extends Holiday
{
	

	public static function getDate($year){
		$date = new \DateTime("$year-6-23");
		return $date;
	}


}