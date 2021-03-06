<?php

namespace App\Exceptions;

use Exception;
use Illuminate\Http\Response;
use Tymon\JWTAuth\Exceptions\JWTException;
use Tymon\JWTAuth\Exceptions\TokenInvalidException;
use Tymon\JWTAuth\Exceptions\TokenBlacklistedException;
use Tymon\JWTAuth\Exceptions\TokenExpiredException;
use Illuminate\Foundation\Exceptions\Handler as ExceptionHandler;

class Handler extends ExceptionHandler
{
    /**
     * A list of the exception types that are not reported.
     *
     * @var array
     */
    protected $dontReport = [
        //
    ];

    /**
     * A list of the inputs that are never flashed for validation exceptions.
     *
     * @var array
     */
    protected $dontFlash = [
        'password',
        'password_confirmation',
    ];

    /**
     * Report or log an exception.
     *
     * @param  \Exception  $exception
     * @return void
     */
    public function report(Exception $exception)
    {
        parent::report($exception);
    }

    /**
     * Render an exception into an HTTP response.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \Exception  $exception
     * @return \Illuminate\Http\Response
     */
    public function render($request, Exception $exception)
    {   
        if($exception instanceOf TokenBlacklistedException)
        {
            return response(['error' => 'Token cannot be used, get new one'], Response::HTTP_BAD_REQUEST);
        }
        elseif ($exception instanceOf TokenInvalidException) 
        {
            return response(['error' => 'Token is Invalid'], Response::HTTP_BAD_REQUEST);
        }
        elseif ($exception instanceOf TokenExpiredException) 
        {
            return response(['error' => 'Token is Expired'], Response::HTTP_BAD_REQUEST);
        }
        elseif ($exception instanceOf JWTException) 
        {
            return response(['error' => 'Token is not provided'], Response::HTTP_BAD_REQUEST);
        }
        
        return parent::render($request, $exception);
    }
}
