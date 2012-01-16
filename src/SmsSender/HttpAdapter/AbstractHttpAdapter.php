<?php

/**
 * This file is part of the SmsSender package.
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 *
 * @license    MIT License
 */

namespace SmsSender\HttpAdapter;

/**
 * @author Kévin Gomez <kevin_gomez@carpe-hora.com>
 */
class AbstractHttpAdapter
{
    /**
     * Generate URL-encoded query string from an array.
     *
     * @param array  $data   The data to send.
     * return string
     */
    protected function encodePostData(array $data = array())
    {
        return http_build_query($data);
    }
}

// vim: set softtabstop=4 tabstop=4 shiftwidth=4 autoindent:
