<?php

return [

    'languages' => [
        // A list of the supported languages that can be read with linguacafe. 
        'supported_languages' => [
            // Catalan will need a dictionary
            // 'Catalan',
            'Chinese',
            'Croatian',
            'Danish',
            'Czech',
            'Dutch',
            'English',
            'Finnish',
            'French',
            'German',
            'Greek',
            'Italian',
            'Japanese',
            'Korean',
            'Latin',
            // Lithuanian will need custom font family
            // 'Lithuanian',
            'Macedonian',
            'Norwegian',
            'Polish',
            'Portuguese',
            'Romanian',
            'Russian',
            'Slovenian',
            'Spanish',
            'Swedish',
            'Thai',
            'Turkish',
            'Ukrainian',
            'Welsh',
        ],

        'supported_languages_with_required_install' => [
            "Chinese",
            "Japanese",
            "Korean",
            "Russian",
            "Turkish",
            "Thai",
            "Ukrainian",
        ],

        'languages_without_spaces' => [
            'chinese',
            'japanese',
            'thai',

            'Chinese',
            'Japanese',
            'Thai',
        ],

        /*
            List of languages that can be selected for target language. These should also have flag images. 
            
            Currently this list contain these languages:
            - dict cc supported languages
            - deepl supported languages
            - linguacafe supported languages

            Any additional language can, and should be added to this list, together with it's flag.
        */
        'supported_target_languages' => [
            'Albanian',
            'Arabic',
            'Bosnian',
            'Brazilian portuguese',
            'Bulgarian',
            'Catalan',
            'Chinese',
            'Chinese',
            'Croatian',
            'Czech',
            'Czech',
            'Danish',
            'Dutch',
            'English',
            'Esperanto',
            'Estonian',
            'Finnish',
            'French',
            'German',
            'Greek',
            'Hungarian',
            'Icelandic',
            'Indonesian',
            'Italian',
            'Japanese',
            'Korean',
            'Latin',
            'Latvian',
            'Lithuanian',
            'Macedonian',
            'Norwegian',
            'Polish',
            'Portuguese',
            'Romanian',
            'Russian',
            'Serbian',
            'Slovak',
            'Slovenian',
            'Spanish',
            'Swedish',
            'Thai',
            'Turkish',
            'Ukrainian',
            'Welsh',
        ],

        /*
            List of target languages that are supported by DeepL.
        */
        'deepl_supported_target_languages' => [
            'Arabic',
            'Brazilian portuguese',
            'Bulgarian',
            'Chinese',
            'Czech',
            'Danish',
            'Dutch',
            'English',
            'Estonian',
            'Finnish',
            'French',
            'German',
            'Greek',
            'Hungarian',
            'Indonesian',
            'Italian',
            'Japanese',
            'Korean',
            'Latvian',
            'Lithuanian',
            'Norwegian',
            'Polish',
            'Portuguese',
            'Romanian',
            'Russian',
            'Slovak',
            'Slovenian',
            'Spanish',
            'Swedish',
            'Turkish',
            'Ukrainian',
        ],

        /*
            A list of supported languages by Newspaper3k python library. This library 
            is used for importing websites, and also RSS feed. This should not be modified.
        */
        'website_import_supported_languages' => [
            'Arabic',
            'Belarusian',
            'Bulgarian',
            'Danish',
            'German',
            'Greek',
            'English',
            'Spanish',
            'Estonian',
            'Persian',
            'Finnish',
            'French',
            'Hebrew',
            'Hindi',
            'Croatian',
            'Hungarian',
            'Indonesian',
            'Italian',
            'Japanese',
            'Korean',
            'Lithuanian',
            'Macedonian',
            'Norwegian',
            'Dutch',
            'Norwegian',
            'Polish',
            'Portuguese',
            'Romanian',
            'Russian',
            'Slovenian',
            'Serbian',
            'Swedish',
            'Swahili',
            'Turkish',
            'Ukrainian',
            'Vietnamese',
            'Chinese',


            'arabic',
            'belarusian',
            'bulgarian',
            'danish',
            'german',
            'greek',
            'english',
            'spanish',
            'estonian',
            'persian',
            'finnish',
            'french',
            'hebrew',
            'hindi',
            'croatian',
            'hungarian',
            'indonesian',
            'italian',
            'japanese',
            'korean',
            'lithuanian',
            'macedonian',
            'norwegian',
            'dutch',
            'norwegian',
            'polish',
            'portuguese',
            'romanian',
            'russian',
            'slovenian',
            'serbian',
            'swedish',
            'swahili',
            'turkish',
            'ukrainian',
            'vietnamese',
            'chinese',
        ],

        /*
            These are language codes that Jellyfin uses for subtitles. You can find out what
            a jellyfin language code is by going to the jellyfin subtitle import, and starting a video
            with a new language subtitle. If that new language is not added here, you will see
            a javascript log about the unsupported languages code.
        */
        'jellyfin_language_codes' => [
            'jpn' => 'japanese',
            'eng' => 'english',
            'nor' => 'norwegian',
            'ger' => 'german',
            'gre' => 'greek',
            'spa' => 'spanish',
            'lat' => 'latin',
            'chi' => 'chinese',
            'dut' => 'dutch',
            'fin' => 'finnish',
            'fre' => 'french',
            'ita' => 'italian',
            'lit' => 'lithuanian',
            'kor' => 'korean',
            'swe' => 'swedish',
            'ukr' => 'ukrainian',
            'rus' => 'russian',
            'wel' => 'welsh',
            'cze' => 'czech',
            'hrv' => 'Croatian',
            'dan' => 'Danish',
            'mac' => 'Macedonian',
            'pol' => 'Polish',
            'por' => 'Portuguese',
            'rum' => 'Romanian',
            'slv' => 'Slovenian',
            'tha' => 'Thai',
            'tur' => 'Turkish',
        ],

        /*
            These language codes are used to create 
            database tables for dictionaries.
        */
        'database_name_language_codes' => [
            'albanian' => 'sq',
            'bosnian' => 'bs',
            'bulgarian' => 'bg',
            'chinese' => 'zh',
            'catalan' => 'ca',
            'croatian' => 'hr',
            'czech' => 'cs',
            'danish' => 'da',
            'dutch' => 'nl',
            'english' => 'en',
            'esperanto' => 'eo',
            'finnish' => 'fi',
            'french' => 'fr',
            'german' => 'de',
            'greek' => 'el',
            'hungarian' => 'hu',
            'icelandic' => 'is',
            'italian' => 'it',
            'japanese' => 'jp',
            'korean' => 'ko',
            'latin' => 'la',
            'lithuanian' => 'lt',
            'macedonian' => 'mk',
            'norwegian' => 'no',
            'polish' => 'pl',
            'portuguese' => 'pt',
            'romanian' => 'ro',
            'russian' => 'ru',
            'serbian' => 'sr',
            'slovak' => 'sk',
            'slovenian' => 'sl',
            'spanish' => 'es',
            'swedish' => 'sv',
            'thai' => 'th',
            'turkish' => 'tr',
            'ukrainian' => 'ua',
            'welsh' => 'cy',

            'Albanian' => 'sq',
            'Bosnian' => 'bs',
            'Chinese' => 'zh',
            'Catalan' => 'ca',
            'Croatian' => 'hr',
            'Czech' => 'cs',
            'Danish' => 'da',
            'Dutch' => 'nl',
            'English' => 'en',
            'Esperanto' => 'eo',
            'Finnish' => 'fi',
            'French' => 'fr',
            'German' => 'de',
            'Greek' => 'el',
            'Hungarian' => 'hu',
            'Icelandic' => 'is',
            'Italian' => 'it',
            'Japanese' => 'jp',
            'Korean' => 'ko',
            'Latin' => 'la',
            'Lithuanian' => 'lt',
            'Macedonian' => 'mk',
            'Norwegian' => 'no',
            'Polish' => 'pl',
            'Portuguese' => 'pt',
            'Romanian' => 'ro',
            'Russian' => 'ru',
            'Serbian' => 'sr',
            'Slovak' => 'sk',
            'Slovenian' => 'sl',
            'Spanish' => 'es',
            'Swedish' => 'sv',
            'Thai' => 'th',
            'Turkish' => 'tr',
            'Ukrainian' => 'ua',
            'Welsh' => 'cy',
        ],

        /*
            These are needed to recognize dict cc dictionary
            files inside the dictionaries directory. These 
            language codes can be found in the first line of 
            dict cc dictionary files.
        */
        'dict_cc_language_codes' => [
            'BG' => 'bulgarian',
            'BS' => 'bosnian',
            'CS' => 'czech',
            'DA' => 'danish',
            'DE' => 'german',
            'EL' => 'greek',
            'EN' => 'english',
            'EO' => 'esperanto',
            'ES' => 'spanish',
            'FI' => 'finnish',
            'FR' => 'french',
            'HR' => 'croatian',
            'HU' => 'hungarian',
            'IS' => 'icelandic',
            'IT' => 'italian',
            'LA' => 'latin',
            'NL' => 'dutch',
            'NO' => 'norwegian',
            'PL' => 'polish',
            'PT' => 'portuguese',
            'RO' => 'romanian',
            'RU' => 'russian',
            'RU' => 'russian',
            'SK' => 'slovak',
            'SQ' => 'albanian',
            'SR' => 'serbian',
            'SV' => 'swedish',
            'TR' => 'turkish',
        ],

        // ISO_639-1 codes, with a few exceptions (en-GB)
        'deepl_language_codes' => [
            'japanese' => 'JA',
            'norwegian' => 'NB',
            'german' => 'DE',
            'english' => 'EN-US',
            'chinese' => 'ZH',
            'dutch' => 'NL',
            'finnish' => 'FI',
            'french' => 'FR',
            'italian' => 'IT',
            'korean' => 'KO',
            'spanish' => 'ES',
            'swedish' => 'SV',
            'ukrainian' => 'UK',
            'russian' => 'RU',
            'czech' => 'CS',
            'arabic' => 'AR',
            'bulgarian' => 'BG',
            'danish' => 'DA',
            'greek' => 'EL',
            'estonian' => 'ET',
            'hungarian' => 'HU',
            'indonesian' => 'ID',
            'lithuanian' => 'LT',
            'latvian' => 'LV',
            'polish' => 'PL',
            'portuguese' => 'PT-PT',
            'brazilian Portuguese' => 'PT-BR',
            'romanian' => 'RO',
            'slovak' => 'SK',
            'slovenian' => 'SL',
            'turkish' => 'TR',

            'Japanese' => 'JA',
            'Norwegian' => 'NB',
            'German' => 'DE',
            'English' => 'EN-US',
            'Chinese' => 'ZH',
            'Dutch' => 'NL',
            'Finnish' => 'FI',
            'French' => 'FR',
            'Italian' => 'IT',
            'Korean' => 'KO',
            'Spanish' => 'ES',
            'Swedish' => 'SV',
            'Ukrainian' => 'UK',
            'Russian' => 'RU',
            'Czech' => 'CS',
            'Arabic' => 'AR',
            'Bulgarian' => 'BG',
            'Danish' => 'DA',
            'Greek' => 'EL',
            'Estonian' => 'ET',
            'Hungarian' => 'HU',
            'Indonesian' => 'ID',
            'Lithuanian' => 'LT',
            'Latvian' => 'LV',
            'Polish' => 'PL',
            'Portuguese' => 'PT-PT',
            'Brazilian Portuguese' => 'PT-BR',
            'Romanian' => 'RO',
            'Slovak' => 'SK',
            'Slovenian' => 'SL',
            'Turkish' => 'TR',
        ],
    ],
    'words_to_skip' => ['。', '、', ':', '？', '！', '＜', '＞', '：', ' ', '「', '」', '（', '）', '｛', '｝', '≪', '≫', '〈', '〉',
        '《', '》','【', '】', '『', '』', '〔', '〕', '［', '］', '・', '?', '(', ')', ' ', ' NEWLINE ', '.', '%', '-',
        '«', '»', "'", '’', '–', 'NEWLINE', 'newline', ' ', "\r", "\n", "\r\n", '	', "\r\n　", ';', ',', '!', '\'', 
        '"', '‘', '_', '…', '/', '*', '&', '“', '”', '•', '©', '...', '●', '¡', '¿', '€', '$', '%', '˚', '°', '=', '!=', '-', '+'],

    'tokens_with_no_space_before' => ['.', ',', '?', '!', '\'', '"', '‘', '’'],
    'tokens_with_no_space_after' => ['‘', '’'],
];
