<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Qualitycheck\V20190115\Models\ListSkillGroupConfigResponseBody\data;

use AlibabaCloud\SDK\Qualitycheck\V20190115\Models\ListSkillGroupConfigResponseBody\data\skillGroupConfig\allRuleList;
use AlibabaCloud\SDK\Qualitycheck\V20190115\Models\ListSkillGroupConfigResponseBody\data\skillGroupConfig\ruleList;
use AlibabaCloud\SDK\Qualitycheck\V20190115\Models\ListSkillGroupConfigResponseBody\data\skillGroupConfig\skillGroupScreens;
use AlibabaCloud\Tea\Model;

class skillGroupConfig extends Model
{
    /**
     * @var int
     */
    public $status;

    /**
     * @var int
     */
    public $type;

    /**
     * @var allRuleList
     */
    public $allRuleList;

    /**
     * @var string
     */
    public $updateTime;

    /**
     * @var int
     */
    public $allContentQualityCheck;

    /**
     * @var string
     */
    public $createTime;

    /**
     * @var string
     */
    public $skillGroupId;

    /**
     * @var bool
     */
    public $screenSwitch;

    /**
     * @var string
     */
    public $instanceId;

    /**
     * @var int
     */
    public $vocabId;

    /**
     * @var int
     */
    public $skillGroupFrom;

    /**
     * @var string
     */
    public $rid;

    /**
     * @var string
     */
    public $skillGroupName;

    /**
     * @var ruleList
     */
    public $ruleList;

    /**
     * @var string
     */
    public $modelName;

    /**
     * @var string
     */
    public $allRids;

    /**
     * @var string
     */
    public $name;

    /**
     * @var int
     */
    public $modelId;

    /**
     * @var int
     */
    public $id;

    /**
     * @var skillGroupScreens
     */
    public $skillGroupScreens;

    /**
     * @var int
     */
    public $qualityCheckType;

    /**
     * @var string
     */
    public $vocabName;
    protected $_name = [
        'status'                 => 'Status',
        'type'                   => 'Type',
        'allRuleList'            => 'AllRuleList',
        'updateTime'             => 'UpdateTime',
        'allContentQualityCheck' => 'AllContentQualityCheck',
        'createTime'             => 'CreateTime',
        'skillGroupId'           => 'SkillGroupId',
        'screenSwitch'           => 'ScreenSwitch',
        'instanceId'             => 'InstanceId',
        'vocabId'                => 'VocabId',
        'skillGroupFrom'         => 'SkillGroupFrom',
        'rid'                    => 'Rid',
        'skillGroupName'         => 'SkillGroupName',
        'ruleList'               => 'RuleList',
        'modelName'              => 'ModelName',
        'allRids'                => 'AllRids',
        'name'                   => 'Name',
        'modelId'                => 'ModelId',
        'id'                     => 'Id',
        'skillGroupScreens'      => 'SkillGroupScreens',
        'qualityCheckType'       => 'QualityCheckType',
        'vocabName'              => 'VocabName',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->status) {
            $res['Status'] = $this->status;
        }
        if (null !== $this->type) {
            $res['Type'] = $this->type;
        }
        if (null !== $this->allRuleList) {
            $res['AllRuleList'] = null !== $this->allRuleList ? $this->allRuleList->toMap() : null;
        }
        if (null !== $this->updateTime) {
            $res['UpdateTime'] = $this->updateTime;
        }
        if (null !== $this->allContentQualityCheck) {
            $res['AllContentQualityCheck'] = $this->allContentQualityCheck;
        }
        if (null !== $this->createTime) {
            $res['CreateTime'] = $this->createTime;
        }
        if (null !== $this->skillGroupId) {
            $res['SkillGroupId'] = $this->skillGroupId;
        }
        if (null !== $this->screenSwitch) {
            $res['ScreenSwitch'] = $this->screenSwitch;
        }
        if (null !== $this->instanceId) {
            $res['InstanceId'] = $this->instanceId;
        }
        if (null !== $this->vocabId) {
            $res['VocabId'] = $this->vocabId;
        }
        if (null !== $this->skillGroupFrom) {
            $res['SkillGroupFrom'] = $this->skillGroupFrom;
        }
        if (null !== $this->rid) {
            $res['Rid'] = $this->rid;
        }
        if (null !== $this->skillGroupName) {
            $res['SkillGroupName'] = $this->skillGroupName;
        }
        if (null !== $this->ruleList) {
            $res['RuleList'] = null !== $this->ruleList ? $this->ruleList->toMap() : null;
        }
        if (null !== $this->modelName) {
            $res['ModelName'] = $this->modelName;
        }
        if (null !== $this->allRids) {
            $res['AllRids'] = $this->allRids;
        }
        if (null !== $this->name) {
            $res['Name'] = $this->name;
        }
        if (null !== $this->modelId) {
            $res['ModelId'] = $this->modelId;
        }
        if (null !== $this->id) {
            $res['Id'] = $this->id;
        }
        if (null !== $this->skillGroupScreens) {
            $res['SkillGroupScreens'] = null !== $this->skillGroupScreens ? $this->skillGroupScreens->toMap() : null;
        }
        if (null !== $this->qualityCheckType) {
            $res['QualityCheckType'] = $this->qualityCheckType;
        }
        if (null !== $this->vocabName) {
            $res['VocabName'] = $this->vocabName;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return skillGroupConfig
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['Status'])) {
            $model->status = $map['Status'];
        }
        if (isset($map['Type'])) {
            $model->type = $map['Type'];
        }
        if (isset($map['AllRuleList'])) {
            $model->allRuleList = allRuleList::fromMap($map['AllRuleList']);
        }
        if (isset($map['UpdateTime'])) {
            $model->updateTime = $map['UpdateTime'];
        }
        if (isset($map['AllContentQualityCheck'])) {
            $model->allContentQualityCheck = $map['AllContentQualityCheck'];
        }
        if (isset($map['CreateTime'])) {
            $model->createTime = $map['CreateTime'];
        }
        if (isset($map['SkillGroupId'])) {
            $model->skillGroupId = $map['SkillGroupId'];
        }
        if (isset($map['ScreenSwitch'])) {
            $model->screenSwitch = $map['ScreenSwitch'];
        }
        if (isset($map['InstanceId'])) {
            $model->instanceId = $map['InstanceId'];
        }
        if (isset($map['VocabId'])) {
            $model->vocabId = $map['VocabId'];
        }
        if (isset($map['SkillGroupFrom'])) {
            $model->skillGroupFrom = $map['SkillGroupFrom'];
        }
        if (isset($map['Rid'])) {
            $model->rid = $map['Rid'];
        }
        if (isset($map['SkillGroupName'])) {
            $model->skillGroupName = $map['SkillGroupName'];
        }
        if (isset($map['RuleList'])) {
            $model->ruleList = ruleList::fromMap($map['RuleList']);
        }
        if (isset($map['ModelName'])) {
            $model->modelName = $map['ModelName'];
        }
        if (isset($map['AllRids'])) {
            $model->allRids = $map['AllRids'];
        }
        if (isset($map['Name'])) {
            $model->name = $map['Name'];
        }
        if (isset($map['ModelId'])) {
            $model->modelId = $map['ModelId'];
        }
        if (isset($map['Id'])) {
            $model->id = $map['Id'];
        }
        if (isset($map['SkillGroupScreens'])) {
            $model->skillGroupScreens = skillGroupScreens::fromMap($map['SkillGroupScreens']);
        }
        if (isset($map['QualityCheckType'])) {
            $model->qualityCheckType = $map['QualityCheckType'];
        }
        if (isset($map['VocabName'])) {
            $model->vocabName = $map['VocabName'];
        }

        return $model;
    }
}
