<?php
defined('BASEPATH') OR exit('No direct script access allowed');

if ( ! function_exists('_print_r'))
{
	function _print_r($data)
	{
        echo "<pre>";
		print_r($data);
        echo "</pre>";
        die();
	}
}

if ( ! function_exists('dateTimeToDateThai'))
{
	function dateTimeToDateThai($date, $sortMonth = false)
	{

		 $datetime = DateTime::createFromFormat('Y-m-d H:i:s', $date);
		 if (!$datetime) {
			 $datetime = DateTime::createFromFormat('Y-m-d', $date);
		 }
		 if (!$datetime) {
			 return 'ไม่ระบุ';
		 }
	 
		 $month = [
			 1 => $sortMonth ? 'ม.ค.' : 'มกราคม',
			 2 => $sortMonth ? 'ก.พ.' : 'กุมภาพันธ์',
			 3 => $sortMonth ? 'มี.ค.' : 'มีนาคม',
			 4 => $sortMonth ? 'เม.ย.' : 'เมษายน',
			 5 => $sortMonth ? 'พ.ค.' : 'พฤษภาคม',
			 6 => $sortMonth ? 'มิ.ย.' : 'มิถุนายน',
			 7 => $sortMonth ? 'ก.ค.' : 'กรกฎาคม',
			 8 => $sortMonth ? 'ส.ค.' : 'สิงหาคม',
			 9 => $sortMonth ? 'ก.ย.' : 'กันยายน',
			 10 => $sortMonth ? 'ต.ค.' : 'ตุลาคม',
			 11 => $sortMonth ? 'พ.ย.' : 'พฤศจิกายน',
			 12 => $sortMonth ? 'ธ.ค.' : 'ธันวาคม',
		 ];
	 
		 $year = $datetime->format('Y');
		 $month_num = (int)$datetime->format('m');
		 $day = $datetime->format('d');
	 
		 $month_thai = $month[$month_num];
		 $year_thai = $year + 543;
	 
		 return "$day $month_thai $year_thai";
	}
}

if ( ! function_exists('dateTimeToDateTimeThai'))
{
	function dateTimeToDateTimeThai($date, $sortMonth = false)
	{
		$datetime = DateTime::createFromFormat('Y-m-d H:i:s', $date);
		if (!$datetime) {
			$datetime = DateTime::createFromFormat('Y-m-d', $date);
		}
		if (!$datetime) {
			return 'ไม่ระบุ';
		}

		$month = [
			1 => $sortMonth ? 'ม.ค.' : 'มกราคม',
			2 => $sortMonth ? 'ก.พ.' : 'กุมภาพันธ์',
			3 => $sortMonth ? 'มี.ค.' : 'มีนาคม',
			4 => $sortMonth ? 'เม.ย.' : 'เมษายน',
			5 => $sortMonth ? 'พ.ค.' : 'พฤษภาคม',
			6 => $sortMonth ? 'มิ.ย.' : 'มิถุนายน',
			7 => $sortMonth ? 'ก.ค.' : 'กรกฎาคม',
			8 => $sortMonth ? 'ส.ค.' : 'สิงหาคม',
			9 => $sortMonth ? 'ก.ย.' : 'กันยายน',
			10 => $sortMonth ? 'ต.ค.' : 'ตุลาคม',
			11 => $sortMonth ? 'พ.ย.' : 'พฤศจิกายน',
			12 => $sortMonth ? 'ธ.ค.' : 'ธันวาคม',
		];
		
		$explode = explode(' ', $date);
		if(count($explode) == 2) {
			list($day, $time) = $explode;
			list($year, $month_num, $day) = explode('-', $day);
			list($hour, $minute, $second) = explode(':', $time);
			$month_thai = $month[(int)$month_num];
			
			$year_thai = $year + 543;
			
			return "$day $month_thai $year_thai $hour.$minute น.";
		} else {
			return 'ไม่ระบุ';
		}
	}
}