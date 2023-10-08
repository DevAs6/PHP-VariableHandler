<?php
class Variable
{
    public $value;
    public $length;
    function __construct($value)
    {
        $this->value = $value;
        $this->length = strlen($value);
    }
    function set_value($value)
    {
        $this->value = $value;
    }
    function get_value()
    {
        return $this->value;
    }
    function __toString()
    {
        return $this->value;
    }
    function split($split)
    {
        return explode($split, $this->value);
    }
    function at($position)
    {
        return $this->value[$position];
    }
    function startsWith($text)
    {
        return str_starts_with($this->value, $text);
    }
    function endsWith($text)
    {
        return str_ends_with($this->value, $text);
    }
    function concat(...$args)
    {
        array_unshift($args, $this->value);
        return join("", $args);
    }
    function includes($text)
    {
        return str_contains($this->value, $text);
    }
    function indexOf($text, $start = null)
    {
        return strpos($this->value, $text, $start);
    }
    function lastIndexOf($text, $start = null)
    {
        return strrpos($this->value, $text, $start);
    }
    function match($pattern)
    {
        preg_match_all($pattern, $this->value, $match);
        return $match;
    }
    function padEnd(int $time, $text)
    {
        $value = $this->value;
        foreach (range(1, $time) as $x) {
            $value .= $text;
        }
        return $value;
    }
    function padStart(int $time, $text)
    {
        $padded = null;
        foreach (range(1, $time) as $x) {
            $padded .= $text;
        }
        $padded .= $this->value;
        return $padded;
    }
    function repeat(int $time)
    {
        return str_repeat($this->value, $time);
    }
    function replace($text, $by)
    {
        return str_replace($text, $by, $this->value);
    }
    function search($pattern)
    {
        return preg_match($pattern, $this->value);
    }
    function slice(int $offset, ?int $length = null)
    {
        return substr($this->value, $offset, $length);
    }
    function toLowerCase()
    {
        return strtolower($this->value);
    }
    function toUpperCase()
    {
        return strtoupper($this->value);
    }
    function trim($case = " ")
    {
        return trim($this->value, $case);
    }
    function trimEnd($case = " ")
    {
        return rtrim($this->value, $case);
    }
    function trimStart($case = " ")
    {
        return ltrim($this->value, $case);
    }
    function parseInt()
    {
        return intval($this->value);
    }
    function parseBool()
    {
        return boolval($this->value);
    }
    function parseFloat()
    {
        return floatval($this->value);
    }
    function parseString()
    {
        return strval($this->value);
    }
    function type($type)
    {
        return settype($this->value, $type);
    }
    function push(...$items)
    {
        return array_push($this->value, ...$items);
    }
    function merge($items)
    {
        return array_merge($this->value, $items);
    }
    function pop()
    {
        return array_pop($this->value);
    }
    function rand(int $number = null)
    {
        return array_rand($this->value, $number);
    }
}
?>
