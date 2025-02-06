<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Qualitycheck\V20190115\Models\GetResultResponseBody\data\resultInfo\hitResult;

use AlibabaCloud\Dara\Model;
use AlibabaCloud\SDK\Qualitycheck\V20190115\Models\GetResultResponseBody\data\resultInfo\hitResult\hitResult\conditions;
use AlibabaCloud\SDK\Qualitycheck\V20190115\Models\GetResultResponseBody\data\resultInfo\hitResult\hitResult\hits;

class hitResult extends Model
{
    /**
     * @var conditions
     */
    public $conditions;
    /**
     * @var hits
     */
    public $hits;
    /**
     * @var string
     */
    public $name;
    /**
     * @var int
     */
    public $reviewResult;
    /**
     * @var string
     */
    public $rid;
    /**
     * @var int
     */
    public $schemeId;
    /**
     * @var int
     */
    public $schemeVersion;
    /**
     * @var int
     */
    public $score;
    /**
     * @var string
     */
    public $type;
    protected $_name = [
        'conditions'    => 'Conditions',
        'hits'          => 'Hits',
        'name'          => 'Name',
        'reviewResult'  => 'ReviewResult',
        'rid'           => 'Rid',
        'schemeId'      => 'SchemeId',
        'schemeVersion' => 'SchemeVersion',
        'score'         => 'Score',
        'type'          => 'Type',
    ];

    public function validate()
    {
        if (null !== $this->conditions) {
            $this->conditions->validate();
        }
        if (null !== $this->hits) {
            $this->hits->validate();
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->conditions) {
            $res['Conditions'] = null !== $this->conditions ? $this->conditions->toArray($noStream) : $this->conditions;
        }

        if (null !== $this->hits) {
            $res['Hits'] = null !== $this->hits ? $this->hits->toArray($noStream) : $this->hits;
        }

        if (null !== $this->name) {
            $res['Name'] = $this->name;
        }

        if (null !== $this->reviewResult) {
            $res['ReviewResult'] = $this->reviewResult;
        }

        if (null !== $this->rid) {
            $res['Rid'] = $this->rid;
        }

        if (null !== $this->schemeId) {
            $res['SchemeId'] = $this->schemeId;
        }

        if (null !== $this->schemeVersion) {
            $res['SchemeVersion'] = $this->schemeVersion;
        }

        if (null !== $this->score) {
            $res['Score'] = $this->score;
        }

        if (null !== $this->type) {
            $res['Type'] = $this->type;
        }

        return $res;
    }

    public function toMap($noStream = false)
    {
        return $this->toArray($noStream);
    }

    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['Conditions'])) {
            $model->conditions = conditions::fromMap($map['Conditions']);
        }

        if (isset($map['Hits'])) {
            $model->hits = hits::fromMap($map['Hits']);
        }

        if (isset($map['Name'])) {
            $model->name = $map['Name'];
        }

        if (isset($map['ReviewResult'])) {
            $model->reviewResult = $map['ReviewResult'];
        }

        if (isset($map['Rid'])) {
            $model->rid = $map['Rid'];
        }

        if (isset($map['SchemeId'])) {
            $model->schemeId = $map['SchemeId'];
        }

        if (isset($map['SchemeVersion'])) {
            $model->schemeVersion = $map['SchemeVersion'];
        }

        if (isset($map['Score'])) {
            $model->score = $map['Score'];
        }

        if (isset($map['Type'])) {
            $model->type = $map['Type'];
        }

        return $model;
    }
}
