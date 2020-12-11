<?php

namespace Illuminate\Database\Eloquent\Factories;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Collection;

class BelongsToManyRelationship
{
    /**
     * The related factory instance.
     *
<<<<<<< HEAD
     * @var \Illuminate\Database\Eloquent\Factories\Factory|\Illuminate\Support\Collection|\Illuminate\Database\Eloquent\Model
=======
     * @var \Illuminate\Database\Eloquent\Factories\Factory
>>>>>>> be94746b1f59100ae2b323d591c9213416c268d3
     */
    protected $factory;

    /**
     * The pivot attributes / attribute resolver.
     *
     * @var callable|array
     */
    protected $pivot;

    /**
     * The relationship name.
     *
     * @var string
     */
    protected $relationship;

    /**
     * Create a new attached relationship definition.
     *
<<<<<<< HEAD
     * @param  \Illuminate\Database\Eloquent\Factories\Factory|\Illuminate\Support\Collection|\Illuminate\Database\Eloquent\Model  $factory
=======
     * @param  \Illuminate\Database\Eloquent\Factories\Factory  $factory
>>>>>>> be94746b1f59100ae2b323d591c9213416c268d3
     * @param  callable|array  $pivot
     * @param  string  $relationship
     * @return void
     */
<<<<<<< HEAD
    public function __construct($factory, $pivot, $relationship)
=======
    public function __construct(Factory $factory, $pivot, $relationship)
>>>>>>> be94746b1f59100ae2b323d591c9213416c268d3
    {
        $this->factory = $factory;
        $this->pivot = $pivot;
        $this->relationship = $relationship;
    }

    /**
     * Create the attached relationship for the given model.
     *
     * @param  \Illuminate\Database\Eloquent\Model  $model
     * @return void
     */
    public function createFor(Model $model)
    {
<<<<<<< HEAD
        Collection::wrap($this->factory instanceof Factory ? $this->factory->create([], $model) : $this->factory)->each(function ($attachable) use ($model) {
=======
        Collection::wrap($this->factory->create([], $model))->each(function ($attachable) use ($model) {
>>>>>>> be94746b1f59100ae2b323d591c9213416c268d3
            $model->{$this->relationship}()->attach(
                $attachable,
                is_callable($this->pivot) ? call_user_func($this->pivot, $model) : $this->pivot
            );
        });
    }
}
