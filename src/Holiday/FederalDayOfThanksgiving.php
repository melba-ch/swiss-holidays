<?php 
namespace MelbaCH\SwissHolidays\Holiday;


class FederalDayOfThanksgiving extends Holiday
{
	

	public static function getDate($year){
		$date = new \DateTime( 'third sunday of September '.$year ); // 3rd Sunday in September

		return $date;
	}


}