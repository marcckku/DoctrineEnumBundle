<?php
/*
 * This file is part of the FreshDoctrineEnumBundle.
 *
 * (c) Artem Henvald <genvaldartem@gmail.com>
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

declare(strict_types=1);

namespace Fresh\DoctrineEnumBundle\Exception\EnumType;

use Fresh\DoctrineEnumBundle\Exception\UnexpectedValueException;

/**
 * EnumTypeIsRegisteredButClassDoesNotExistException.
 *
 * @author Artem Henvald <genvaldartem@gmail.com>
 */
class EnumTypeIsRegisteredButClassDoesNotExistException extends UnexpectedValueException
{
}
