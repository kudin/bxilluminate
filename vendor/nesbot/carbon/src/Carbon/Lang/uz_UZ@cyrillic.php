<?php

/**
 * This file is part of the Carbon package.
 *
 * (c) Brian Nesbitt <brian@nesbot.com>
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

/*
 * Authors:
 * - Mashrab Kuvatov Mashrab Kuvatov, Pablo Saratxaga kmashrab@uni-bremen.de, pablo@mandrakesoft.com
 */
return array_replace_recursive(require __DIR__.'/uz.php', [
    'formats' => [
        'L' => 'DD/MM/YY',
    ],
    'months' => ['�����', '������', '����', '�����', '���', '���', '���', '������', '�������', '������', '�����', '������'],
    'months_short' => ['���', '���', '���', '���', '���', '���', '���', '���', '���', '���', '���', '���'],
    'weekdays' => ['�������', '�������', '�������', '��������', '��������', '����', '�����'],
    'weekdays_short' => ['���', '���', '���', '���', '���', '���', '���'],
    'weekdays_min' => ['���', '���', '���', '���', '���', '���', '���'],
    'first_day_of_week' => 1,
    'day_of_first_week_of_year' => 1,
]);
