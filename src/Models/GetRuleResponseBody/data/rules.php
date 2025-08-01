<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Qualitycheck\V20190115\Models\GetRuleResponseBody\data;

use AlibabaCloud\SDK\Qualitycheck\V20190115\Models\GetRuleResponseBody\data\rules\ruleInfo;
use AlibabaCloud\Tea\Model;

class rules extends Model
{
    /**
     * @var ruleInfo[]
     */
    public $ruleInfo;
    protected $_name = [
        'ruleInfo' => 'RuleInfo',
    ];

    public function validate() {}

    public function toMap()
    {
        $res = [];
        if (null !== $this->ruleInfo) {
            $res['RuleInfo'] = [];
            if (null !== $this->ruleInfo && \is_array($this->ruleInfo)) {
                $n = 0;
                foreach ($this->ruleInfo as $item) {
                    $res['RuleInfo'][$n++] = null !== $item ? $item->toMap() : $item;
                }
            }
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return rules
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['RuleInfo'])) {
            if (!empty($map['RuleInfo'])) {
                $model->ruleInfo = [];
                $n = 0;
                foreach ($map['RuleInfo'] as $item) {
                    $model->ruleInfo[$n++] = null !== $item ? ruleInfo::fromMap($item) : $item;
                }
            }
        }

        return $model;
    }
}
