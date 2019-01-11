<?php

declare(strict_types=1);

namespace App\Exceptions;

use Exception;
use Illuminate\Foundation\Exceptions\Handler as ExceptionHandler;
use Illuminate\Http\Response;

final class Handler extends ExceptionHandler
{
    /**
     * A list of the exception types that are not reported.
     *
     * @var string[]
     */
    protected $dontReport = [];

    /**
     * A list of the inputs that are never flashed for validation exceptions.
     *
     * @var string[]
     */
    protected $dontFlash = ['password', 'password_confirmation'];

    /**
     * Report or log an exception.
     *
     * @throws Exception
     */
    public function report(Exception $exception): void
    {
        parent::report($exception);
    }

    /**
     * Render an exception into an HTTP response.
     *
     * @return Response
     */
    public function render($request, Exception $exception)
    {
        return parent::render($request, $exception);
    }
}
