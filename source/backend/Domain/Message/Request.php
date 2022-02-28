<?php

namespace Ifacesoft\Ice\Http\Domain\Message;

use Exception;
use Ifacesoft\Ice\Core\Domain\Data\Dto;
use Ifacesoft\Ice\Core\Domain\Message\Request as IceCoreRequest;

final class Request extends IceCoreRequest
{
    const METHOD_GET = 'GET';
    const METHOD_POST = 'POST';
    const METHOD_PUT = 'PUT';
    const METHOD_PATCH = 'PATCH';
    const METHOD_DELETE = 'DELETE';
    const METHOD_OPTIONS = 'OPTIONS';

    const PARAMS_POST = 'post';
    const PARAMS_COOKIE = 'cookie';

    /**
     * @return string
     * @throws Exception
     */
    public function getMethod()
    {
        return $this->get('method', $_SERVER['REQUEST_METHOD'] ?? self::METHOD_UNKNOWN);
    }

    /**
     * @return string
     * @throws Exception
     */
    public function getUri()
    {
        return $this->get('uri', $_SERVER['REQUEST_URI'] ?? '/');
    }

    /**
     * @return string
     * @throws Exception
     */
    public function getProtocol()
    {
        return $this->get('protocol', $_SERVER['REQUEST_SCHEME'] ?? 'unknown://');
    }

    /**
     * @return string
     * @throws Exception
     */
    public function getTime()
    {
        return $this->get('time', $_SERVER['REQUEST_TIME_FLOAT']);
    }

    /**
     * @return string
     * @throws Exception
     */
    public function getAgent()
    {
        return $this->get('agent', $_SERVER['HTTP_USER_AGENT'] ?? 'http-agent');
    }

    /**
     * @param null $paramsNames
     * @param string $type
     * @return array|Dto
     */
    final public function getParams($paramsNames = null, $type = 'all')
    {
        $params = [
            self::PARAMS_GET => Dto::create($_GET),
            self::PARAMS_POST => Dto::create($_POST),
            self::PARAMS_COOKIE => Dto::create($_COOKIE),
        ];

        $params[self::PARAMS_ALL] = Dto::create(
            array_merge_recursive(
                $params[self::PARAMS_GET]->get(),
                $params[self::PARAMS_POST]->get(),
                $params[self::PARAMS_COOKIE]->get()
            )
        );

        return $type
            ? $this->get(['params'], ['params' => $params])['params'][$type]->get($paramsNames)
            : $params;
    }
}
