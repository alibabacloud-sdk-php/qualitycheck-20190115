<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Qualitycheck\V20190115\Models;

use AlibabaCloud\Tea\Model;

class SubmitCustomizationConfigRequest extends Model
{
    /**
     * @var string
     */
    public $jsonStr;
    protected $_name = [
        'jsonStr' => 'JsonStr',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->jsonStr) {
            $res['JsonStr'] = $this->jsonStr;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return SubmitCustomizationConfigRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['JsonStr'])) {
            $model->jsonStr = $map['JsonStr'];
        }

        return $model;
    }
}
