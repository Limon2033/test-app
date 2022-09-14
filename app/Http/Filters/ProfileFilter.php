<?php


namespace App\Http\Filters;


use Illuminate\Database\Eloquent\Builder;

class ProfileFilter extends AbstractFilter
{
    public const FIRST_NAME = 'first_name';
    public const SURNAME = 'surname';
    public const CITY = 'city';
    public const SPECIALIZATION = 'specialization';


    protected function getCallbacks(): array
    {
        return [
            self::FIRST_NAME => [$this, 'firstName'],
            self::SURNAME => [$this, 'surname'],
            self::CITY => [$this, 'city'],
            self::SPECIALIZATION => [$this, 'specialization'],
        ];
    }

    public function firstName(Builder $builder, $value)
    {
        $builder->where('first_name', 'like', "%{$value}%");
    }

    public function surname(Builder $builder, $value)
    {
        $builder->where('surname', 'like', "%{$value}%");
    }

    public function city(Builder $builder, $value)
    {
        $builder->where('city', 'like', "%{$value}%");
    }

    public function specialization(Builder $builder, $value)
    {
        $builder->where('specialization', 'like', "%{$value}%");
    }
}
