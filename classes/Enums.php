<?php
 /***************************
 * Class with Enums
 ****************************/

 enum DaysOfWeek {
    case MONDAY;
    case TUESDAY;
    case WEDNESDAY;
    case THURSDAY;
    case FRIDAY;
    case SATURDAY;
    case SUNDAY;
 }

 $today = DaysOfWeek::MONDAY;

 if ( $today === DaysOfWeek::MONDAY ) {
    echo "It's Monday!" . "<br>";
 }

 enum Color: string {
    case RED = "#e82626";
    case BLUE = "#2657e8";
    case GREEN = "#26e82d";
 }

 echo Color::RED->value . "<br>";

 function weekendDays( DaysOfWeek $day ): bool {
    return $day === DaysOfWeek::SATURDAY || $day === DaysOfWeek::SUNDAY;
 }

 echo weekendDays( DaysOfWeek::SUNDAY ) ? "Yes" : "No";