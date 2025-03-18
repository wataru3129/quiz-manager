<?php

namespace App\Context\Quiz\Domain\Entities;

use App\Context\Quiz\Domain\Entities\Interface\QuizEntityInterface;
use Illuminate\Support\Collection;

class QuizEntity implements QuizEntityInterface
{

    /**
     * @var int|null $id Quiz Table ID
     */
    private ?int $id {
        get {
            return $this->id;
        }
    }

    /**
     * @var string $question 問題
     */
    private string $question {
        get {
            return $this->question;
        }
    }

    /**
     * @var string $unit 単位
     */
    private string $unit {
        get {
            return $this->unit;
        }
    }

    /**
     * @var string $course コース
     */
    private string $course {
        get {
            return $this->course;
        }
    }

    /**
     * @var Collection $answers 回答
     */
    private Collection $answers {
        get {
            return $this->answers;
        }
    }

    /**
    * @var bool $isTwoMultiple 2択問題フラグ
    */
    private bool $isTwoMultiple {
        get {
            return $this->isTwoMultiple;
        }
    }

    /**
     * @var bool $twoMultipleAnswer 2択問題の回答
     */
    private bool $twoMultipleAnswer {
        get {
            return $this->twoMultipleAnswer;
        }
    }

    /**
     * QuizEntity constructor
     * @param string $question
     * @param string $unit
     * @param string $course
     * @param Collection $answers
     * @param bool $isTwoMultiple
     * @param bool $twoMultipleAnswer
     * @param int|null $id
     */
    public function __construct(
        string $question,
        string $unit,
        string $course,
        Collection $answers,
        bool $isTwoMultiple,
        bool $twoMultipleAnswer,
        ?int $id = null
    ) {
        $this->question = $question;
        $this->unit = $unit;
        $this->course = $course;
        $this->answers = $answers;
        $this->isTwoMultiple = $isTwoMultiple;
        $this->twoMultipleAnswer = $twoMultipleAnswer;
        $this->id = $id;
    }
}
