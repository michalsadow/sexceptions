<?php declare(strict_types=1);

namespace Przeslijmi\Sexceptions\Exceptions;

use Throwable;
use Przeslijmi\Sexceptions\Sexception;

/**
 * File already exists - and cannot be overwritten.
 */
class FileAlrexException extends Sexception
{

    /**
     * Constructor.
     *
     * @param string         $context  During what operation, what is the nature of the error.
     * @param string         $fileName Name of the file.
     * @param Throwable|null $cause    Throwable that caused the problem.
     */
    public function __construct(string $context, string $fileName, ?Throwable $cause = null)
    {

        $this->addInfo('context', $context);
        $this->addInfo('fileName', $fileName);

        if (is_null($cause) === false) {
            parent::__construct($this->getCodeName(), 0, $cause);
        }
    }
}
