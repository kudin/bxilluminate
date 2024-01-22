<?php

/**
 * This file is part of the Carbon package.
 *
 * (c) Brian Nesbitt <brian@nesbot.com>
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

return array_replace_recursive(require __DIR__.'/bs.php', [
    'meridiem' => ['��� �����', '�������'],
    'weekdays' => ['�����', '��������', '������', '������', '��������', '�����', '������'],
    'weekdays_short' => ['���', '���', '���', '���', '���', '���', '���'],
    'weekdays_min' => ['���', '���', '���', '���', '���', '���', '���'],
    'months' => ['������', '�������', '����', '�����', '��', '����', '����', '������', '���������', '�������', '��������', '��������'],
    'months_short' => ['���', '���', '���', '���', '��', '���', '���', '���', '���', '���', '���', '���'],
    'first_day_of_week' => 1,
    'formats' => [
        'LT' => 'HH:mm',
        'LTS' => 'HH:mm:ss',
        'L' => 'D.M.YYYY.',
        'LL' => 'DD.MM.YYYY.',
        'LLL' => 'DD. MMMM YYYY. HH:mm',
        'LLLL' => 'dddd, DD. MMMM YYYY. HH:mm',
    ],
]);
