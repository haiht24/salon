<?php
use Carbon\Carbon;
class Helper
{
    public static function numberFormat($number, $convertToFloat = false, $decimal = 0, $roundDown = false)
    {
        if($roundDown){
            $number = floor($number);
        }

        if ($convertToFloat)
            return number_format((float)$number, $decimal, ',', '.');
        else {
            try {
                return number_format($number, $decimal, ',', '.');
            } catch (Exception $e) {
                return number_format((float)$number, $decimal, ',', '.');
            }
        }

    }

    public static function dateFormat($date, $showTime = false)
    {
        if(!$showTime)
            return date('j/n/Y', strtotime($date));
        else
            return date('H:i D j/n/Y', strtotime($date));
    }

    public static function addDaysToDate($date, $numberOfDays = 20)
    {
        return Carbon::parse($date)->addDays($numberOfDays)->format('j/n/Y');
    }
}