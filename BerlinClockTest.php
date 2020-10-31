<?php

require "vendor/autoload.php";
require "BerlinClock.php";

use PHPUnit\Framework\TestCase;

class BerlinClockTest extends TestCase
{
    private $berlinClock;
    protected function setUp(): void
    {
        parent::setUp(); // TODO: Change the autogenerated stub
        $this->berlinClock = new BerlinClock();
    }
    public function testTest() : void
    {
        self::assertEquals(1, 1);
    }
    public function test_getHours_given23_shouldReturn23(){
        $actual = $this->berlinClock->getHours("23:00:00");

        self::assertEquals(23, $actual);
    }
    public function test_getMinutes_given11_shouldReturn11(){
        $actual = $this->berlinClock->getMinutes("23:11:00");

        self::assertEquals(11, $actual);
    }
    public function test_getSecondes_given12_shouldReturn12(){
        $actual = $this->berlinClock->getSecondes("23:11:12");

        self::assertEquals(12, $actual);
    }
    public function test1_bottom_minutes_lamp1_on(){
        $actual = $this->berlinClock->getBottomMinutesColorValues("23:01:00");

        self::assertEquals("YOOO", $actual);
    }
    public function test2_bottom_minutes_lamp1_on(){
        $actual = $this->berlinClock->getBottomMinutesColorValues("22:06:00");

        self::assertEquals("YOOO", $actual);
    }

    public function test_bottom_minutes_lamp1_2_on(){
        $actual = $this->berlinClock->getBottomMinutesColorValues("23:07:00");

        self::assertEquals("YYOO" , $actual);
    }

    public function test_bottom_minutes_lamp1_2_3_on(){
        $actual = $this->berlinClock->getBottomMinutesColorValues("23:28:00");

        self::assertEquals("YYYO" , $actual);
    }
    public function test_bottom_minutes_lamp1_2_3_4_on(){
        $actual = $this->berlinClock->getBottomMinutesColorValues("23:39:00");

        self::assertEquals("YYYY" , $actual);
    }
    public function test_bottom_minutes_all_lamp_off(){
        $actual = $this->berlinClock->getBottomMinutesColorValues("23:10:00");

        self::assertEquals("OOOO" , $actual);
    }
    public function test_top_minutes_lamp1_on(){
        $actual = $this->berlinClock->getTopMinutesColorValues("23:06:00");

        self::assertEquals("YOOOOOOOOOO" , $actual);
    }
    public function test_top_minutes_lamp1_2_on(){
        $actual = $this->berlinClock->getTopMinutesColorValues("23:11:00");

        self::assertEquals("YYOOOOOOOOO" , $actual);
    }
    public function test_top_minutes_lamp1_2_3_on(){
        $actual = $this->berlinClock->getTopMinutesColorValues("23:16:00");

        self::assertEquals("YYROOOOOOOO" , $actual);
    }
    public function test_top_minutes_lamp1_2_3_4_on(){
        $actual = $this->berlinClock->getTopMinutesColorValues("23:21:00");

        self::assertEquals("YYRYOOOOOOO" , $actual);
    }
    public function test_top_minutes_lamp1_2_3_4_5_on(){
        $actual = $this->berlinClock->getTopMinutesColorValues("23:26:00");

        self::assertEquals("YYRYYOOOOOO" , $actual);
    }

    public function test_top_minutes_lamp1_2_3_4_5_6_on(){
        $actual = $this->berlinClock->getTopMinutesColorValues("23:31:00");

        self::assertEquals("YYRYYROOOOO" , $actual);
    }

    public function test_top_minutes_lamp1_2_3_4_5_6_7_on(){
        $actual = $this->berlinClock->getTopMinutesColorValues("23:38:00");

        self::assertEquals("YYRYYRYOOOO" , $actual);
    }

    public function test_top_minutes_lamp1_2_3_4_5_6_7_8_on(){
        $actual = $this->berlinClock->getTopMinutesColorValues("23:42:00");

        self::assertEquals("YYRYYRYYOOO" , $actual);
    }
    public function test_top_minutes_lamp1_2_3_4_5_6_7_8_9_on(){
        $actual = $this->berlinClock->getTopMinutesColorValues("23:48:00");

        self::assertEquals("YYRYYRYYROO" , $actual);
    }
    public function test_top_minutes_lamp1_2_3_4_5_6_7_8_9_10_on(){
        $actual = $this->berlinClock->getTopMinutesColorValues("23:51:00");

        self::assertEquals("YYRYYRYYRYO" , $actual);
    }
    public function test_top_minutes_lamp1_2_3_4_5_6_7_8_9_10_11_on(){
        $actual = $this->berlinClock->getTopMinutesColorValues("23:59:00");

        self::assertEquals("YYRYYRYYRYY" , $actual);
    }
    public function test_top_minutes_all_lamp_off(){
        $actual = $this->berlinClock->getTopMinutesColorValues("23:00:00");

        self::assertEquals("OOOOOOOOOOO" , $actual);
    }
    public function test_bottom_hours_lamp1_on(){
        $actual = $this->berlinClock->getBottomHoursColorValues("11:00:00");

        self::assertEquals("ROOO", $actual);
    }

    public function test_bottom_hours_lamp1_2_on(){
        $actual = $this->berlinClock->getBottomHoursColorValues("12:00:00");

        self::assertEquals("RROO", $actual);
    }





}