<?php

namespace App\Context\Quiz\ValueObjects;

use App\Context\Quiz\Exceptions\DisabledAnswerLengthException;
class QuizAnswer
{
    /**
     * @var int|null $id Answer Table ID
     */
    private ?int $id {
        get {
            return $this->id;
        }
    }

    /**
     * @var string $answer Answer
     */
    private string $answer {
        get {
            return $this->answer;
        }
    }

    /**
     * @var bool $isCorrect 正答フラグ
     */
    private bool $isCorrect {
        get {
            return $this->isCorrect;
        }
    }

    /**
     * @var int ANSWER_LENGTH 回答の最大文字数
     */
    const int ANSWER_LENGTH = 1000;

    /**
     * QuizAnswer constructor
     * @param string $answer
     * @param bool $isCorrect
     * @param int|null $id
     * @throws DisabledAnswerLengthException
     */
    public function __construct(string $answer, bool $isCorrect, ?int $id = null)
    {
        if (strlen($answer) > self::ANSWER_LENGTH) {
            throw new DisabledAnswerLengthException('入力された回答は' . self::ANSWER_LENGTH . '文字を超えています。');
        }

        $this->answer = $answer;
        $this->isCorrect = $isCorrect;
        $this->id = $id;
    }
}
