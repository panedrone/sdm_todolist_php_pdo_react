<?php

// Code generated by a tool. DO NOT EDIT.
// https://sqldalmaker.sourceforge.net/

class Task
{
    /**
     * @var int
     */
    private $t_id;
    /**
     * @var int
     */
    private $p_id;
    /**
     * @var int
     */
    private $t_priority;
    /**
     * @var string
     */
    private $t_date;
    /**
     * @var string
     */
    private $t_subject;
    /**
     * @var string
     */
    private $t_comments;

    public function get_t_id(): int
    {
        return $this->t_id;
    }

    public function set_t_id(int $value)
    {
        $this->t_id = $value;
    }

    public function get_p_id(): int
    {
        return $this->p_id;
    }

    public function set_p_id(int $value)
    {
        $this->p_id = $value;
    }

    public function get_t_priority(): int
    {
        return $this->t_priority;
    }

    public function set_t_priority(int $value)
    {
        $this->t_priority = $value;
    }

    public function get_t_date(): string
    {
        return $this->t_date;
    }

    public function set_t_date(string $value)
    {
        $this->t_date = $value;
    }

    public function get_t_subject(): string
    {
        return $this->t_subject;
    }

    public function set_t_subject(string $value)
    {
        $this->t_subject = $value;
    }

    public function get_t_comments(): string
    {
        return $this->t_comments;
    }

    public function set_t_comments(string $value)
    {
        $this->t_comments = $value;
    }
}