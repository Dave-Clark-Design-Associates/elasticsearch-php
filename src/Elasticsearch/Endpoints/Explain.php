<?php
/**
 * Elasticsearch PHP client
 *
 * @link      https://github.com/elastic/elasticsearch-php/
 * @copyright Copyright (c) Elasticsearch B.V (https://www.elastic.co)
 * @license   http://www.apache.org/licenses/LICENSE-2.0 Apache License, Version 2.0
 * @license   https://www.gnu.org/licenses/lgpl-2.1.html GNU Lesser General Public License, Version 2.1 
 * 
 * Licensed to Elasticsearch B.V under one or more agreements.
 * Elasticsearch B.V licenses this file to you under the Apache 2.0 License or
 * the GNU Lesser General Public License, Version 2.1, at your option.
 * See the LICENSE file in the project root for more information.
 */
declare(strict_types = 1);

namespace Elasticsearch\Endpoints;

use Elasticsearch\Common\Exceptions\RuntimeException;
use Elasticsearch\Endpoints\AbstractEndpoint;

/**
 * Class Explain
 * Elasticsearch API name explain
 *
 * NOTE: this file is autogenerated using util/GenerateEndpoints.php
 * and Elasticsearch 8.0.0-SNAPSHOT (beef89abc4e9028c4e62fa25a9e6337eea7d8e7e)
 */
class Explain extends AbstractEndpoint
{

    public function getURI(): string
    {
        $id = $this->id ?? null;
        $index = $this->index ?? null;

        if (isset($index) && isset($id)) {
            return "/$index/_explain/$id";
        }
        throw new RuntimeException('Missing parameter for the endpoint explain');
    }

    public function getParamWhitelist(): array
    {
        return [
            'analyze_wildcard',
            'analyzer',
            'default_operator',
            'df',
            'stored_fields',
            'lenient',
            'preference',
            'q',
            'routing',
            '_source',
            '_source_excludes',
            '_source_includes'
        ];
    }

    public function getMethod(): string
    {
        return isset($this->body) ? 'POST' : 'GET';
    }

    public function setBody($body): Explain
    {
        if (isset($body) !== true) {
            return $this;
        }
        $this->body = $body;

        return $this;
    }
}
