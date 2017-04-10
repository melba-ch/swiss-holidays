<?php 
namespace MelbaCH\SwissHolidays\Canton;


class Swiss
{

	public static $holidays = [
		"NewYearsDay",
		"Ascension",
		"SwissNationalDay",
		"ChristmasDay",
	];
	

	public static function isHoliday($date){
		$date->setTime(0, 0, 0);
		
		$year = $date->format("Y");
		foreach (static::$holidays as $day) {

			$class = "MelbaCH\\SwissHolidays\\Holiday\\".$day;
			
			if ($class::getDate($year) == $date) {
				return true;
			}

		}

		return false;
	}


	public static function getHolidays($year){
		$holidays = [];
		foreach (static::$holidays as $day) {

			$class = "MelbaCH\\SwissHolidays\\Holiday\\".$day;
			$holidays[$day] = $class::getDate($year);
		}

		return $holidays;
	}
	
}