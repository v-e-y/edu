<?php

// Вираховуємо ставку по депозиту.
// Вхідні данні: 
//    amount - сума вкладу, 
//    depositRate - ставка по депозиту, 
//    duration - тривалість вкладу.
function depositAccount($amount, $depositRate = 3, $duration = 12)
{
    // Максимальна тривалість депозиту, в місяцях.
    $countMonth = 12;
    // Якщо введено значеня більше або менше за доступне (від 1 до 12 міс.) встановлюємо дефолтне значення.
    if ($duration < 1 || $duration > $countMonth) {
        $duration = 12;
    }
    // Вираховуємо місячну процентну ставку.
    $monthlyRate = $depositRate / $countMonth;

    // Якщо сума вказана.
    // Працюємо з наданними данними.
    if ($amount) {
        // обчислення процентну ставку для вказанного періоду.
        $depositRate = (float)$duration * (float)$monthlyRate;
        // Якщо ставка для цього депозиту дрібна.
        if (stristr((string)$depositRate, '.')) {
            // Прибираэмо точку з дробової частини
            $depositRate = str_replace('.', '', $depositRate);
        }
        // Додаємо нулі для обчислення відсотків
        $depositRate = '0.0' . $depositRate;
        // Повертаємо суму яку отримаэ вкладник.
        return $amount += ((float)$amount * (float)$depositRate);
    }
    
    return 'Ops, some error in code';
}
