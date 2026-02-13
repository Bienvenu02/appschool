<?php

use Carbon\Carbon;

// Vérifie si la fonction n'existe pas déjà avant de la déclarer
if (!function_exists('formatMontantFCFA')) {
    function formatMontantFCFA($montant)
    {
        if (empty($montant)) {
            return '-';
        }
        return number_format($montant, 0, ',', ' ') . ' FCFA';
    }
}

// Formatte les dates
if (!function_exists('formatDateFr')) {
    function formatDateFr($date)
    {
        if (empty($date)) {
            return '-';
        }

        try {
            return Carbon::parse($date)->translatedFormat('d F Y');
        } catch (\Exception $e) {
            return '-';
        }
    }
}

