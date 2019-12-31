<?php

/**
 * @see       https://github.com/laminas/laminas-barcode for the canonical source repository
 * @copyright https://github.com/laminas/laminas-barcode/blob/master/COPYRIGHT.md
 * @license   https://github.com/laminas/laminas-barcode/blob/master/LICENSE.md New BSD License
 */

namespace Laminas\Barcode\Object\Exception;

use Laminas\Barcode\Exception;

/**
 * Exception for Laminas_Barcode component.
 *
 * @category   Laminas
 * @package    Laminas_Barcode
 */
class OutOfRangeException extends Exception\OutOfRangeException implements
    ExceptionInterface
{
}
