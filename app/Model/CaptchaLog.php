<?php

declare (strict_types=1);
namespace App\Model;

use Hyperf\DbConnection\Model\Model;
/**
 * @property int $id 主键ID
 * @property string $captcha_code 验证码
 * @property string $mobile 手机号码
 * @property string $created_time 发送时间
 */
class CaptchaLog extends Model
{
    /**
     * The table associated with the model.
     *
     * @var string
     */
    protected $table = 'captcha_log';
    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = ['id', 'captcha_code', 'mobile', 'created_time'];
    /**
     * The attributes that should be cast to native types.
     *
     * @var array
     */
    protected $casts = ['id' => 'integer'];
}