<?php

use App\Context\Quiz\Domain\Entities\QuizEntity;

it('', function () {
    $quiz = new QuizEntity('question', 'unit', 'course', collect(['answer1', 'answer2']), true);
    expect($quiz)->toBeInstanceOf(QuizEntity::class);
});
