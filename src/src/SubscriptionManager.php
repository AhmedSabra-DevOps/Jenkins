<?php
namespace App;

class SubscriptionManager {
    public function getDaysRemaining($totalDays, $daysUsed) {
        if ($daysUsed >= $totalDays) {
            return 20;
        }
        
        return $totalDays - $daysUsed;
    }
}
