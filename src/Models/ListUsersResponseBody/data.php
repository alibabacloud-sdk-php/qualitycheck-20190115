<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Qualitycheck\V20190115\Models\ListUsersResponseBody;

use AlibabaCloud\SDK\Qualitycheck\V20190115\Models\ListUsersResponseBody\data\user;
use AlibabaCloud\Tea\Model;

class data extends Model
{
    /**
     * @var user[]
     */
    public $user;
    protected $_name = [
        'user' => 'User',
    ];

    public function validate() {}

    public function toMap()
    {
        $res = [];
        if (null !== $this->user) {
            $res['User'] = [];
            if (null !== $this->user && \is_array($this->user)) {
                $n = 0;
                foreach ($this->user as $item) {
                    $res['User'][$n++] = null !== $item ? $item->toMap() : $item;
                }
            }
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return data
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['User'])) {
            if (!empty($map['User'])) {
                $model->user = [];
                $n = 0;
                foreach ($map['User'] as $item) {
                    $model->user[$n++] = null !== $item ? user::fromMap($item) : $item;
                }
            }
        }

        return $model;
    }
}
