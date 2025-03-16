<?php

use App\Context\Quiz\ValueObjects\QuizAnswer;
use App\Context\Quiz\Exceptions\DisabledAnswerLengthException;

it('creates a new QuizAnswer', function ($id, $answer, $isCorrect) {
    $answerObject = new QuizAnswer($answer, $isCorrect, $id);
    expect($answerObject)->toBeInstanceOf(QuizAnswer::class);
})->with([
    [
        'id' => null,
        // 1000文字の文字列
        'answer' => 'rChGNu79TIqNFxKFLcESJPFgUxKcATxSgBdKVMUPiLFcadxREPZT62C5yFtnQMXvpES5A4m27MgMuQ97npBA2UNrA57mf4CwxWlSakEFFcJAEaHX9Hb4Gme39K6TieHFVKimpHtHXAUjaTe6zRAg5hX2oowWZcWeiIlyZVZgx4V8jcWwFpFmZecu4BTv59psC6DKgBrvoffO9GKmlffiM4Q4MqjlZK0xV74pFBokHK9WbG9MwPGMz3HNhDJRDDHwgF0pnVuPvnQEk6ruxV2EHoBSsZFNaZykYx8AmY1QdgOo6A5Ez4N2lyC8azyuFcsygrSEXf7eim3W9piGrEIk7XjxQK3yAE5zchM4wcB8KUDIh9zEKb1yC75evTrnj2MsWnP8hVZTVcENEn3G7R30ncsxoguKvLe8NzPF4VBetKNGvgfStANMrPNNT7MtCr62WyQYsfptpBYlcXhBpCIrPIJkZTOWbI6iVkawJIiTMXfY8Mc86ZNC8smidvrNBhEKocfzyU4WuiI39oTyeeEe3zSMputCr31A4E8MMCTBBZHO95QUvlqDlSWFXdrBmMQGHbbmkG2zupA3JV6rVTiuGLLBDZIeOuSF5HzUP7T28hyuoxT3L5eaQPhrRCnFl4UIVIvBDFG5R5gfHJ9lV2JpECyP9I8k1px8Datnuz2loUjRCksvXrMNQgNbfHyEkIvJ8hfgkAUc8XX0JtJf8mPzlfcSOsiUGILhW4bliCvLpxJJFhxxuhlgsz3bS1tcHEOwnFT266mNboaCnEy3gztwTtXsxg3REMURWYtBmukhLDjejwVmLFFhZbXnfS3KfYmWVLhS9AQeLkX66zKqE7zjwQ3bqa0XkLnFkJXdTStBx1wetQLrpawwBoJH5wHOGkJsuUlmGJyCjy0lTz87bfLoP4eUm70FMuqLO6JTBPyXYC3CsILcWV7FAV0PosH3YRpTnaviqVI0fUBkT2xyS0M5GROW6iyzeU4tMPvLEkCL',
        'isCorrect' => true,
    ]
]);

it('fails a new QuizAnswer', function ($id, $answer, $isCorrect) {
    new QuizAnswer($answer, $isCorrect, $id);
})
->with([
    'over 1000 chars' => [
        'id' => null,
        // 1000文字の文字列
        'answer' => 'ArChGNu79TIqNFxKFLcESJPFgUxKcATxSgBdKVMUPiLFcadxREPZT62C5yFtnQMXvpES5A4m27MgMuQ97npBA2UNrA57mf4CwxWlSakEFFcJAEaHX9Hb4Gme39K6TieHFVKimpHtHXAUjaTe6zRAg5hX2oowWZcWeiIlyZVZgx4V8jcWwFpFmZecu4BTv59psC6DKgBrvoffO9GKmlffiM4Q4MqjlZK0xV74pFBokHK9WbG9MwPGMz3HNhDJRDDHwgF0pnVuPvnQEk6ruxV2EHoBSsZFNaZykYx8AmY1QdgOo6A5Ez4N2lyC8azyuFcsygrSEXf7eim3W9piGrEIk7XjxQK3yAE5zchM4wcB8KUDIh9zEKb1yC75evTrnj2MsWnP8hVZTVcENEn3G7R30ncsxoguKvLe8NzPF4VBetKNGvgfStANMrPNNT7MtCr62WyQYsfptpBYlcXhBpCIrPIJkZTOWbI6iVkawJIiTMXfY8Mc86ZNC8smidvrNBhEKocfzyU4WuiI39oTyeeEe3zSMputCr31A4E8MMCTBBZHO95QUvlqDlSWFXdrBmMQGHbbmkG2zupA3JV6rVTiuGLLBDZIeOuSF5HzUP7T28hyuoxT3L5eaQPhrRCnFl4UIVIvBDFG5R5gfHJ9lV2JpECyP9I8k1px8Datnuz2loUjRCksvXrMNQgNbfHyEkIvJ8hfgkAUc8XX0JtJf8mPzlfcSOsiUGILhW4bliCvLpxJJFhxxuhlgsz3bS1tcHEOwnFT266mNboaCnEy3gztwTtXsxg3REMURWYtBmukhLDjejwVmLFFhZbXnfS3KfYmWVLhS9AQeLkX66zKqE7zjwQ3bqa0XkLnFkJXdTStBx1wetQLrpawwBoJH5wHOGkJsuUlmGJyCjy0lTz87bfLoP4eUm70FMuqLO6JTBPyXYC3CsILcWV7FAV0PosH3YRpTnaviqVI0fUBkT2xyS0M5GROW6iyzeU4tMPvLEkCL',
        'isCorrect' => true,
    ]
])
->throws(DisabledAnswerLengthException::class, '入力された回答は1000文字を超えています。')
;
