<?php

namespace App\Http\Controllers;

use Google\Cloud\Translate\V2\TranslateClient;
use Illuminate\Http\Request;

class TranslationController extends Controller
{
    public function translate(Request $request): array
    {
        $translate = new TranslateClient();

        // Get the user input text from the request
        $text = $request->input('source_text');

        // Detect the source language of the text
        $result = $translate->detectLanguage($text);
        $sourceLanguage = $result['languageCode'];

        // Get the target language from the request
        $targetLanguage = $request->input('target_language');

        // Translate the text to the target language
        $translation = $translate->translate($text, [
            'target' => $targetLanguage,
        ]);

        return [
            'source_language' => $sourceLanguage,
            'target_language' => $targetLanguage,
            'translation' => $translation['text'],
        ];
    }
}
