<?php 
namespace MelbaCH\SwissHolidays\Holiday;


class Assumption extends Holiday
{

	public static $cantons = ["AG","AI","FR","JU","LU","NW","OW","SZ","SO","TI","UR","VS","ZG"];

	public static function getDate($year){
		$date = new \DateTime("$year-8-15");
		return $date;
	}


}