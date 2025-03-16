<?php

namespace App\Context\Quiz\Domain\Entities\Interface;

use Illuminate\Support\Collection;

interface QuizEntityInterface
{
    /**
     * @return int
     */
    public function getId(): int;

    /**
     * @return string
     */
    public function getQuestion(): string;

    /**
     * @return String
     */
    public function getUnit(): String;

    /**
     * @return String
     */
    public function getCourse(): String;

    /**
     * @return Collection
     */
    public function getAnswers(): Collection;

    /**
     * @return bool
     */
    public function getIsTwoMultiple(): bool;

    /**
     * @return bool
     */
    public function getTwoMultipleAnswer(): bool;
}
