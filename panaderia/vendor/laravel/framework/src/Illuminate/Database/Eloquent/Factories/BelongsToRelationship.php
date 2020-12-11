<?php

namespace Illuminate\Database\Eloquent\Factories;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\MorphTo;

class BelongsToRelationship
{
    /**
     * The related factory instance.
     *
<<<<<<< HEAD
     * @var \Illuminate\Database\Eloquent\Factories\Factory|\Illuminate\Database\Eloquent\Model
=======
     * @var \Illuminate\Database\Eloquent\Factories\Factory
>>>>>>> be94746b1f59100ae2b323d591c9213416c268d3
     */
    protected $factory;

    /**
     * The relationship name.
     *
     * @var string
     */
    protected $relationship;

    /**
     * The cached, resolved parent instance ID.
     *
     * @var mixed
     */
    protected $resolved;

    /**
     * Create a new "belongs to" relationship definition.
     *
<<<<<<< HEAD
     * @param  \Illuminate\Database\Eloquent\Factories\Factory|\Illuminate\Database\Eloquent\Model  $factory
     * @param  string  $relationship
     * @return void
     */
    public function __construct($factory, $relationship)
=======
     * @param  \Illuminate\Database\Eloquent\Factories\Factory  $factory
     * @param  string  $relationship
     * @return void
     */
    public function __construct(Factory $factory, $relationship)
>>>>>>> be94746b1f59100ae2b323d591c9213416c268d3
    {
        $this->factory = $factory;
        $this->relationship = $relationship;
    }

    /**
     * Get the parent model attributes and resolvers for the given child model.
     *
     * @param  \Illuminate\Database\Eloquent\Model  $model
     * @return array
     */
    public function attributesFor(Model $model)
    {
        $relationship = $model->{$this->relationship}();

        return $relationship instanceof MorphTo ? [
<<<<<<< HEAD
            $relationship->getMorphType() => $this->factory instanceof Factory ? $this->factory->newModel()->getMorphClass() : $this->factory->getMorphClass(),
=======
            $relationship->getMorphType() => $this->factory->newModel()->getMorphClass(),
>>>>>>> be94746b1f59100ae2b323d591c9213416c268d3
            $relationship->getForeignKeyName() => $this->resolver($relationship->getOwnerKeyName()),
        ] : [
            $relationship->getForeignKeyName() => $this->resolver($relationship->getOwnerKeyName()),
        ];
    }

    /**
     * Get the deferred resolver for this relationship's parent ID.
     *
     * @param  string|null  $key
     * @return \Closure
     */
    protected function resolver($key)
    {
        return function () use ($key) {
            if (! $this->resolved) {
<<<<<<< HEAD
                $instance = $this->factory instanceof Factory ? $this->factory->create() : $this->factory;
=======
                $instance = $this->factory->create();
>>>>>>> be94746b1f59100ae2b323d591c9213416c268d3

                return $this->resolved = $key ? $instance->{$key} : $instance->getKey();
            }

            return $this->resolved;
        };
    }
}
