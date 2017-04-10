<?php 
namespace MelbaCH\SwissHolidays\Holiday;


class AllSaintsDay extends Holiday
{
	
	public static $cantons = ["AG","AI","FR","GL","JU","LU","NW","OW","SG","SZ","SO","TI","UR","VS","ZG"];

	public static function getDate($year){
		$date = new \DateTime("$year-11-1");
		return $date;
	}


}