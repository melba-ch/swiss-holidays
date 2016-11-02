<?php 
namespace MelbaCH\SwissHolidays\Holiday;


class LundiDuJeune extends Holiday
{
	

	public static function getDate($year){
		$date = new \DateTime( 'third sunday of September '.$year );

		$date->add(new \DateInterval('P1D')); // Monday after 3rd Sunday in September

		return $date;
	}


}