<?php

namespace App\Context\Quiz\Domain\Entities;

use App\Context\Quiz\Domain\Entities\Interface\QuizEntityInterface;
use Illuminate\Support\Collection;

class QuizEntity implements QuizEntityInterface
{

    /**
     * @inheritDoc
     */
    public function getId (): int
    {
        // TODO: Implement getId() method.
    }

    /**
     * @inheritDoc
     */
    public function getQuestion (): string
    {
        // TODO: Implement getQuestion() method.
    }

    /**
     * @inheritDoc
     */
    public function getUnit (): string
    {
        // TODO: Implement getUnit() method.
    }

    /**
     * @inheritDoc
     */
    public function getCourse (): string
    {
        // TODO: Implement getCourse() method.
    }

    /**
     * @inheritDoc
     */
    public function getAnswers (): Collection
    {
        // TODO: Implement getAnswers() method.
    }

    /**
     * @inheritDoc
     */
    public function getIsTwoMultiple (): bool
    {
        // TODO: Implement getIsTwoMultiple() method.
    }

    /**
     * @inheritDoc
     */
    public function getTwoMultipleAnswer (): bool
    {
        // TODO: Implement getTwoMultipleAnswer() method.
    }
}
