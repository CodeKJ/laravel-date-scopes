<?php

namespace CodeKJ\Laravel\Traits\DateScopes;

use Illuminate\Database\Eloquent\Builder;
use Illuminate\Support\Carbon;

/**
 * Trait DateScopes
 * @package CodeKJ\Laravel\Traits\DateScopes
 */
trait DateScopes
{
    /**
     * Records in this second.
     * @param Builder $query
     * @param string $dateField
     * @return Builder
     */
    public function scopeThisSecond($query, string $dateField = 'created_at')
    {
        return $query->whereBetween($dateField, [
            Carbon::now()->startOfSecond(),
            Carbon::now()->endOfSecond()
        ]);
    }

    /**
     * Records in last second.
     * @param Builder $query
     * @param string $dateField
     * @return Builder
     */
    public function scopeLastSecond($query, string $dateField = 'created_at')
    {
        return $query->whereBetween($dateField, [
            Carbon::now()->startOfSecond()->subSecond(),
            Carbon::now()->endOfSecond()->subSecond()
        ]);
    }

    /**
     * Records second ago until this moment.
     * @param Builder $query
     * @param string $dateField
     * @return Builder
     */
    public function scopeSecondAgo($query, string $dateField = 'created_at')
    {
        return $this->scopeSecondsAgo($query, 1, $dateField);
    }

    /**
     * Records x seconds ago until this moment.
     * @param Builder $query
     * @param int $count
     * @param string $dateField
     * @return Builder
     */
    public function scopeSecondsAgo($query, int $count, string $dateField = 'created_at')
    {
        return $query->whereBetween($dateField, [
            Carbon::now()->subSeconds($count),
            Carbon::now()
        ]);
    }

    /**
     * Records in this minute.
     * @param Builder $query
     * @param string $dateField
     * @return Builder
     */
    public function scopeThisMinute($query, string $dateField = 'created_at')
    {
        return $query->whereBetween($dateField, [
            Carbon::now()->startOfMinute(),
            Carbon::now()->endOfMinute()
        ]);
    }

    /**
     * Records in last minute.
     * @param Builder $query
     * @param string $dateField
     * @return Builder
     */
    public function scopeLastMinute($query, string $dateField = 'created_at')
    {
        return $query->whereBetween($dateField, [
            Carbon::now()->startOfMinute()->subMinute(),
            Carbon::now()->endOfMinute()->subMinute()
        ]);
    }

    /**
     * Records minute ago until this moment.
     * @param Builder $query
     * @param string $dateField
     * @return Builder
     */
    public function scopeMinuteAgo($query, string $dateField = 'created_at')
    {
        return $this->scopeSecondsAgo($query, 1, $dateField);
    }

    /**
     * Records x minutes ago until this moment.
     * @param Builder $query
     * @param int $count
     * @param string $dateField
     * @return Builder
     */
    public function scopeMinutesAgo($query, int $count, string $dateField = 'created_at')
    {
        return $query->whereBetween($dateField, [
            Carbon::now()->subMinutes($count),
            Carbon::now()
        ]);
    }

    /**
     * Records in this hour.
     * @param Builder $query
     * @param string $dateField
     * @return Builder
     */
    public function scopeThisHour($query, string $dateField = 'created_at')
    {
        return $query->whereBetween($dateField, [
            Carbon::now()->startOfHour(),
            Carbon::now()->endOfHour()
        ]);
    }

    /**
     * Records in last hour.
     * @param Builder $query
     * @param string $dateField
     * @return Builder
     */
    public function scopeLastHour($query, string $dateField = 'created_at')
    {
        return $query->whereBetween($dateField, [
            Carbon::now()->startOfHour()->subHour(),
            Carbon::now()->endOfHour()->subHour()
        ]);
    }

    /**
     * Records an hour ago until this moment.
     * @param Builder $query
     * @param string $dateField
     * @return Builder
     */
    public function scopeHourAgo($query, string $dateField = 'created_at')
    {
        return $this->scopeHoursAgo($query, 1, $dateField);
    }

    /**
     * Records x hours ago until this moment.
     * @param Builder $query
     * @param int $count
     * @param string $dateField
     * @return Builder
     */
    public function scopeHoursAgo($query, int $count, string $dateField = 'created_at')
    {
        return $query->whereBetween($dateField, [
            Carbon::now()->subHours($count),
            Carbon::now()
        ]);
    }

    /**
     * Records today.
     * @param Builder $query
     * @param string $dateField
     * @return Builder
     */
    public function scopeToday($query, string $dateField = 'created_at')
    {
        return $query->whereBetween($dateField, [
            Carbon::now()->startOfDay(),
            Carbon::now()->endOfDay()
        ]);
    }

    /**
     * Records yesterday.
     * @param Builder $query
     * @param string $dateField
     * @return Builder
     */
    public function scopeYesterday($query, string $dateField = 'created_at')
    {
        return $query->whereBetween($dateField, [
            Carbon::yesterday()->startOfDay(),
            Carbon::yesterday()->endOfDay()
        ]);
    }

    /**
     * Records day ago until this moment.
     * @param Builder $query
     * @param string $dateField
     * @return Builder
     */
    public function scopeDayAgo($query, string $dateField = 'created_at')
    {
        return $this->scopeDaysAgo($query, 1, $dateField);
    }

    /**
     * Records x days ago until this moment.
     * @param Builder $query
     * @param int $count
     * @param string $dateField
     * @return Builder
     */
    public function scopeDaysAgo($query, int $count, string $dateField = 'created_at')
    {
        return $query->whereBetween($dateField, [
            Carbon::now()->subDays($count),
            Carbon::now()
        ]);
    }

    /**
     * Records this week.
     * @param Builder $query
     * @param string $dateField
     * @return Builder
     */
    public function scopeThisWeek($query, string $dateField = 'created_at')
    {
        return $query->whereBetween($dateField, [
            Carbon::now()->startOfWeek(),
            Carbon::now()->endOfWeek()
        ]);
    }

    /**
     * Records last week.
     * @param Builder $query
     * @param string $dateField
     * @return Builder
     */
    public function scopeLastWeek($query, string $dateField = 'created_at')
    {
        return $query->whereBetween($dateField, [
            Carbon::now()->startOfWeek()->subWeek(),
            Carbon::now()->endOfWeek()->subWeek()
        ]);
    }

    /**
     * Records week ago until this moment.
     * @param Builder $query
     * @param string $dateField
     * @return Builder
     */
    public function scopeWeekAgo($query, string $dateField = 'created_at')
    {
        return $this->scopeWeeksAgo($query, 1, $dateField);
    }

    /**
     * Records x weeks ago until this moment.
     * @param Builder $query
     * @param int $count
     * @param string $dateField
     * @return Builder
     */
    public function scopeWeeksAgo($query, int $count, string $dateField = 'created_at')
    {
        return $query->whereBetween($dateField, [
            Carbon::now()->subWeeks($count),
            Carbon::now()
        ]);
    }

    /**
     * Records this month.
     * @param Builder $query
     * @param string $dateField
     * @return Builder
     */
    public function scopeThisMonth($query, string $dateField = 'created_at')
    {
        return $query->whereBetween($dateField, [
            Carbon::now()->startOfMonth(),
            Carbon::now()->endOfMonth()
        ]);
    }

    /**
     * Records last month
     * @param Builder $query
     * @param string $dateField
     * @return Builder
     */
    public function scopeLastMonth($query, string $dateField = 'created_at')
    {
        return $query->whereBetween($dateField, [
            new Carbon('first day of last month'),
            new Carbon('last day of last month')
        ]);
    }

    /**
     * Records month ago until this moment.
     * @param Builder $query
     * @param string $dateField
     * @return Builder
     */
    public function scopeMonthAgo($query, string $dateField = 'created_at')
    {
        return $this->scopeMonthsAgo($query, 1, $dateField);
    }

    /**
     * Records x months ago until this moment.
     * @param Builder $query
     * @param int $count
     * @param string $dateField
     * @return Builder
     */
    public function scopeMonthsAgo($query, int $count, string $dateField = 'created_at')
    {
        return $query->whereBetween($dateField, [
            Carbon::now()->subMonths($count),
            Carbon::now()
        ]);
    }

    /**
     * Records this year.
     * @param Builder $query
     * @param string $dateField
     * @return Builder
     */
    public function scopeThisYear($query, string $dateField = 'created_at')
    {
        return $query->whereBetween($dateField, [
            Carbon::now()->startOfYear(),
            Carbon::now()->endOfYear()
        ]);
    }

    /**
     * Records last year.
     * @param Builder $query
     * @param string $dateField
     * @return Builder
     */
    public function scopeLastYear($query, string $dateField = 'created_at')
    {
        return $query->whereBetween($dateField, [
            Carbon::now()->startOfYear()->subYear(),
            Carbon::now()->endOfYear()->subYear()
        ]);
    }

    /**
     * Records year ago until this moment.
     * @param Builder $query
     * @param string $dateField
     * @return Builder
     */
    public function scopeYearAgo($query, string $dateField = 'created_at')
    {
        return $this->scopeYearsAgo($query, 1, $dateField);
    }

    /**
     * Records x years ago until this moment.
     * @param Builder $query
     * @param int $count
     * @param string $dateField
     * @return Builder
     */
    public function scopeYearsAgo($query, int $count, string $dateField = 'created_at')
    {
        return $query->whereBetween($dateField, [
            Carbon::now()->subYears($count),
            Carbon::now()
        ]);
    }
}
