<?php

namespace Zlik;

/**
 * @description HTTP/1.1 Status Code Properties
 * @link http://www.w3.org/Protocols/rfc2616/rfc2616-sec10.html
 */
trait HttpStatusCodes
{
    /**
     * Informational 1xx
     */
    public $HTTP_CONTINUE = 100;
    public $HTTP_SWITCHING_PROTOCOLS = 101;

    /**
     * Successful 2xx
     */
    public $HTTP_OK = 200;
    public $HTTP_CREATED = 201;
    public $HTTP_ACCEPTED = 202;
    public $HTTP_NON_AUTHORITATIVE_INFORMATION = 203;
    public $HTTP_NO_CONTENT = 204;
    public $HTTP_RESET_CONTENT = 205;
    public $HTTP_PARTIAL_CONTENT = 206;

    /**
     * Redirection 3xx
     */
    public $HTTP_MULTIPLE_CHOICES = 300;
    public $HTTP_MOVED_PERMANENTLY = 301;
    public $HTTP_FOUND = 302;
    public $HTTP_SEE_OTHER = 303;
    public $HTTP_NOT_MODIFIED = 304;
    public $HTTP_USE_PROXY = 305;
    public $HTTP_UNUSED= 306;
    public $HTTP_TEMPORARY_REDIRECT = 307;

    /**
     * Client Error 4xx
     */
    public $HTTP_BAD_REQUEST = 400;
    public $HTTP_UNAUTHORIZED  = 401;
    public $HTTP_PAYMENT_REQUIRED = 402;
    public $HTTP_FORBIDDEN = 403;
    public $HTTP_NOT_FOUND = 404;
    public $HTTP_METHOD_NOT_ALLOWED = 405;
    public $HTTP_NOT_ACCEPTABLE = 406;
    public $HTTP_PROXY_AUTHENTICATION_REQUIRED = 407;
    public $HTTP_REQUEST_TIMEOUT = 408;
    public $HTTP_CONFLICT = 409;
    public $HTTP_GONE = 410;
    public $HTTP_LENGTH_REQUIRED = 411;
    public $HTTP_PRECONDITION_FAILED = 412;
    public $HTTP_REQUEST_ENTITY_TOO_LARGE = 413;
    public $HTTP_REQUEST_URI_TOO_LONG = 414;
    public $HTTP_UNSUPPORTED_MEDIA_TYPE = 415;
    public $HTTP_REQUESTED_RANGE_NOT_SATISFIABLE = 416;
    public $HTTP_EXPECTATION_FAILED = 417;

    /**
     * Server Error 5xx
     */
    public $HTTP_INTERNAL_SERVER_ERROR = 500;
    public $HTTP_NOT_IMPLEMENTED = 501;
    public $HTTP_BAD_GATEWAY = 502;
    public $HTTP_SERVICE_UNAVAILABLE = 503;
    public $HTTP_GATEWAY_TIMEOUT = 504;
    public $HTTP_VERSION_NOT_SUPPORTED = 505;
}
