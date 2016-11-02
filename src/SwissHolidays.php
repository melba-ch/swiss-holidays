<?php 
namespace MelbaCH\SwissHolidays;


class SwissHolidays
{


	public static $cantons = ["AG","AI","AR","BE","BL","BS","FR","GE","GL","GR","JU","LU","NE","NW","OW","SG","SH","SO","SZ","TG","TI","UR","VD","VS","ZG","ZH"];

	public static $holidays = [
		"NewYearsDay",
		"StBerchtold",
		"Epiphany",
		"RepublicDay",
		"StJosephsDay",
		"NafelserFahrt",
		"PalmSunday",
		"GoodFriday",
		"EasterSunday",
		"EasterMonday",
		"LaborDay",
		"Ascension",
		"Pentecost",
		"WhitMonday",
		"CorpusChristi",
		"FeteDIndependance",
		"SaintsPeterAndPaul",
		"SwissNationalDay",
		"Assumption",
		"JeuneGenevois",
		"FederalDayOfThanksgiving",
		"LundiDuJeune",
		"SaintNicholasOfFlueDay",
		"AllSaintsDay",
		"ImmaculateConception",
		"ChristmasDay",
		"StStephensDay",
		"RestorationOfTheRepublic",
		"NewYearsEve",
	];


	public static function isHoliday($date, $cantons = null){
		if(empty($cantons))
			$cantons = self::$cantons;

		$data = [];
		foreach ($cantons as $canton) {
			$class = "MelbaCH\\SwissHolidays\\Canton\\".$canton;
			$data[$canton] = $class::isHoliday($date);
		}

		return $data;
	}


	public static function getHolidays($year, $cantons = null){
		if(empty($cantons))
			$cantons = self::$cantons;
		
		$data = [];
		foreach ($cantons as $canton){
			$class = "MelbaCH\\SwissHolidays\\Canton\\".$canton;
			$data[$canton] = $class::getHolidays($year);
		}
		
		return $data;
	}


}