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
 * - RFC 2319    bug-glibc-locales@gnu.org
 */
return array_replace_recursive(require __DIR__.'/ru.php', [
    'weekdays' => ['�����������', '�����������', '�������', '�����', '�������', '�������', '�������'],
    'weekdays_short' => ['���', '���', '���', '���', '���', '���', '���'],
    'weekdays_min' => ['��', '��', '��', '��', '��', '��', '��'],
]);
