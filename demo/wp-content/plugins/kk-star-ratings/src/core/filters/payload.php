<?php

/*
 * This file is part of bhittani/kk-star-ratings.
 *
 * (c) Kamal Khan <shout@bhittani.com>
 *
 * For the full copyright and license information, please view
 * the LICENSE file that was distributed with this source code.
 */

namespace Bhittani\StarRating\core\filters;

use function Bhittani\StarRating\core\functions\calculate;
use function Bhittani\StarRating\core\functions\width;

if (! defined('KK_STAR_RATINGS')) {
    http_response_code(404);
    exit();
}

function payload(array $payload): array
{
    [$count, $score] = calculate($payload['id'], $payload['slug'], $payload['best']);

    if (! (is_numeric($payload['count']) || $payload['count'])) {
        $payload['count'] = $count;
    }

    if (! (is_numeric($payload['score']) || $payload['score'])) {
        $payload['score'] = $score;
    }

    $payload['width'] = width($payload['score'], $payload['size'], $payload['gap']);

    return $payload;
}
