<?php

namespace App\Http\Controllers\Utils;

use App\Http\Controllers\Controller;

class StatusController extends Controller
{
    /**
     * $SUCCESS_STATUS
     *
     * @var integer
     * all ok
     */
    public static $SUCCESS_STATUS = 200;

    /**
     * $CREATED_STATUS
     *
     * @var integer
     * resource created
     */
    public static $CREATED_STATUS = 201;


    /**
     * $NOT_CONTENT
     *
     * @var integer
     * no content
     */
    public static $NOT_CONTENT = 204;

    /**
     * $NOT_MODIFIED
     *
     * @var integer
     * not modified
     */
    public static $NOT_MODIFIED = 304;

    /**
     * $UNAUTHORIZED
     *
     * @var integer
     * unauthorized
     */ 
    public static $UNAUTHORIZED = 401;

    /**
     * $NOT_FOUND
     *
     * @var integer
     * not found
     */
    public static $NOT_FOUND = 404;


    /**
     * $METHOD_NOT_ALLOWED
     *
     * @var integer
     * method not allowed
     */
    public static $METHOD_NOT_ALLOWED = 405;

    /**
     * $NOT_ACCEPTABLE
     *
     * @var integer
     * not acceptable
     */
    public static $NOT_ACCEPTABLE = 406;

    /**
     * $PRECONDITION_FAILED
     *
     * @var integer
     * precondition failed
     */
    public static $PRECONDITION_FAILED = 412;

    /**
     * $INTERNAL_SERVER_ERROR
     *
     * @var integer
     * internal server error
     */
    public static $INTERNAL_SERVER_ERROR = 500;



}
