<?php

namespace App\Helpers;

class HtmlHelpers
{
    public static function limitHtmlContent($content, $wordLimit = 50)
    {
        $dom = new \DOMDocument();
        @$dom->loadHTML('<?xml encoding="utf-8" ?>' . $content, LIBXML_HTML_NOIMPLIED | LIBXML_HTML_NODEFDTD);

        $paragraphs = $dom->getElementsByTagName('p');
        if ($paragraphs->length > 0) {
            $firstParagraph = $paragraphs->item(0);
            $text = $firstParagraph->textContent;
            $words = explode(' ', $text);

            if (count($words) > $wordLimit) {
                $words = array_slice($words, 0, $wordLimit);
                $limitedText = implode(' ', $words) . '...';
            } else {
                $limitedText = $text;
            }

            $limitedContent = '<p>' . htmlspecialchars($limitedText) . '</p>';
            return $limitedContent;
        }

        return '';
    }
}
