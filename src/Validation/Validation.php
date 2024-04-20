<?php

namespace Src\Validation;

class Validation
{
    protected array $data = [];

    protected array $aliases = [];

    protected array $rules = [];

    protected ErrorBag $errorBag;

    public function setRule($rules)
    {
        $this->rules = $rules;
    }

    public function make($data)
    {
        $this->data = $data;
        $this->errorBag = new ErrorBag;
        $this->validate();
    }

    public function validate()
    {
        foreach ($this->rules as $key => $rules) {

            foreach ($rules as $key) {

                $this->resoleRules($rules);
            }
        }
    }

    public function resoleRules(array $rules)
    {
        return array_map(function ($rule) {

            if (is_string($rule)) {

                return $this->getRuleFromString($rule);
            }

            return $rule;
        }, $rules);
    }

    public function getRuleFromString(string $rule)
    {

    }


    public function passes()
    {
        return empty($this->errors());
    }

    public function errors($key = null)
    {
        // return $key ? $this->errorBag->errors[$key] : $this->errorBag->errors;
    }

    public function alias($field)
    {
        return $this->aliases[$field] ?? $field;
    }

    public function setAlias(array $aliases)
    {
        $this->aliases = $aliases;
    }
}
