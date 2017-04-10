<?php 
namespace MelbaCH\SwissHolidays\Holiday;


class JeuneGenevois extends Holiday
{
	

	public static function getDate($year){
		$date = new \DateTime( 'first sunday of September '.$year );
	
		$date->add(new \DateInterval('P4D')); // Thursday after 1st Sunday in September
		
		return $date;
	}


}