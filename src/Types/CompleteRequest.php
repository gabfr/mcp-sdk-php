<?php

/**
 * Model Context Protocol SDK for PHP
 *
 * (c) 2024 Logiscape LLC <https://logiscape.com>
 *
 * Based on the Python SDK for the Model Context Protocol
 * https://github.com/modelcontextprotocol/python-sdk
 *
 * PHP conversion developed by:
 * - Josh Abbott
 * - Claude 3.5 Sonnet (Anthropic AI model)
 * - ChatGPT o1 pro mode
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 *
 * @package    logiscape/mcp-sdk-php
 * @author     Josh Abbott <https://joshabbott.com>
 * @copyright  Logiscape LLC
 * @license    MIT License
 * @link       https://github.com/logiscape/mcp-sdk-php
 *
 * Filename: Types/CompleteRequest.php
 */

declare(strict_types=1);

namespace Mcp\Types;

class CompleteRequest extends Request
{
    /**
     * Pass a CompleteRequestParams object to the base Request constructor.
     */
    public function __construct(CompleteRequestParams $params)
    {
        parent::__construct('completion/complete', $params);
    }

    public function validate(): void
    {
        parent::validate();
        // Base `Request` calls $this->params->validate()
        // But if you want extra checks, you can do:
        if ($this->params instanceof CompleteRequestParams) {
            $this->params->validate();
        }
    }
}