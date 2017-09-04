<?php

namespace Biang\Time;

/**
 * simple time library
 *
 * @author biangbiang <djchurch007@gmail.com>
 */
class Time {
    /**
     * Class constructor.
     *
     * @param  void
     * @return void
     */
    public function __construct() {}

    /**
     *  get timestamp for now
     *
     * @param  void
     * @return int
     */
    public function get_now_timestamp() {
        return time();
    }

    /**
     *  get datetime for now
     *
     * @param  void
     * @return string
     */
    public function get_now_datetime() {
        return date("Y-m-d H:i:s", time());
    }

    /**
     *  get timestamp for today 00:00
     *
     * @param  void
     * @return int
     */
    public function get_today_start_timestamp() {
        return strtotime(date("Y-m-d", time()));
    }

    /**
     *  get datetime for today 00:00
     *
     * @param  void
     * @return string
     */
    public function get_today_start_datetime() {
        return date("Y-m-d H:i:s", strtotime(date("Y-m-d", time())));
    }

    /**
     *  get timestamp for yesterday 00:00
     *
     * @param  void
     * @return int
     */
    public function get_yesterday_start_timestamp() {
        return strtotime(date("Y-m-d", time()) . "-1 day");
    }

    /**
     *  get datetime for yesterday 00:00
     *
     * @param  void
     * @return string
     */
    public function get_yesterday_start_datetime() {
        return date("Y-m-d H:i:s", strtotime(date("Y-m-d", time()) . "-1 day"));
    }

    /**
     *  get timestamp for tomorrow 00:00
     *
     * @param  void
     * @return int
     */
    public function get_tomorrow_start_timestamp() {
        return strtotime(date("Y-m-d", time()) . "+1 day");
    }

    /**
     *  get datetime for tomorrow 00:00
     *
     * @param  void
     * @return string
     */
    public function get_tomorrow_start_datetime() {
        return date("Y-m-d H:i:s", strtotime(date("Y-m-d", time()) . "+1 day"));
    }

    /**
     *  get timestamp for next month 1st 00:00
     *
     * @param  void
     * @return int
     */
    public function get_next_month_start_timestamp() {
        return strtotime(date("Y-m", time()) . "+1 month");
    }

    /**
     *  get datetime for next month 1st 00:00
     *
     * @param  void
     * @return string
     */
    public function get_next_month_start_datetime() {
        return date("Y-m-d H:i:s", strtotime(date("Y-m", time()) . "+1 month"));
    }

    /**
     *  get timestamp for next year 0101 00:00
     *
     * @param  void
     * @return int
     */
    public function get_next_year_start_timestamp() {
        return strtotime(date("Y", time()) . "-01-01 +1 year");
    }

    /**
     *  get datetime for next year 0101 00:00
     *
     * @param  void
     * @return string
     */
    public function get_next_year_start_datetime() {
        return date("Y-m-d H:i:s", strtotime(date("Y", time()) . "-01-01 +1 year"));
    }
}
