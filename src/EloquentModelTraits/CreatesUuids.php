<?php
/**
 * @author Robert Pratt <bpong@v8ch.com>
 * @copyright Robert Pratt 2017
 */

namespace V8CH\EloquentModelTraits;

use Illuminate\Database\Eloquent\Model;
use Ramsey\Uuid\Uuid;

trait CreatesUuids
{

    /**
     * Boot function from laravel.
     */
    protected static function boot()
    {
        /** @noinspection PhpUndefinedClassInspection */
        parent::boot();

        /** @noinspection PhpUndefinedMethodInspection */
        static::creating(function (Model $model) {
            $model->{$model->getKeyName()} = Uuid::uuid1()->toString();
        });
    }
}
