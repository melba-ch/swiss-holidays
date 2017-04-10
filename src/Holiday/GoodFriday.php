<?php 
namespace MelbaCH\SwissHolidays\Holiday;


class GoodFriday extends Holiday
{
	

	public static function getDate($year){
		$date = self::getEasterDate($year);

		$date->sub(new \DateInterval('P2D')); // 2 days before easter

		return $date;
	}


}