<?php

// Replace the URL with your own webhook url
$url = "https://discordapp.com/api/webhooks/722290349141131294/JbR4tdAz0DN4tkxKq7KoMQoHsdt_6ckQLmLK1X6ysfvjdCdslZvbSv1XCrMniuHT1Uya";

$hookObject = json_encode([
    /*
     * The general "message" shown above your embeds
     */
    "content" => "Activity Warning!",
    /*
     * The username shown in the message
     */
    "username" => "GTA | HATO",
    /*
     * The image location for the senders image
     */
    "avatar_url" => "https://pbs.twimg.com/profile_images/972154872261853184/RnOg6UyU_400x400.jpg",
    /*
     * Whether or not to read the message in Text-to-speech
     */
    "tts" => false,
    /*
     * File contents to send to upload a file
     */
    // "file" => "",
    /*
     * An array of Embeds
     */
    "embeds" => [
        /*
         * Our first embed
         */
        [
            // Set the title for your embed
            "title" => "Wong Jr",

            // The type of your embed, will ALWAYS be "rich"
            "type" => "rich",

            // A description for your embed
            "description" => "Your HATO hours are lower than they should be. Please increase your hours as soon as possible to avoid getting demoted/kicked. Your hours are shown below:",

            // The URL of where your title will be a link to
            "url" => "",

            /* A timestamp to be displayed below the embed, IE for when an an article was posted
             * This must be formatted as ISO8601
             */
            "timestamp" => "",

            // The integer color to be used on the left side of the embed
            "color" => hexdec( "E06666" ),

            // Footer object
            "footer" => [
                "text" => "",
                "icon_url" => ""
            ],

            // Image object
            "image" => [
                "url" => ""
            ],

            // Thumbnail object
            "thumbnail" => [
                "url" => ""
            ],

            // Author object
            "author" => [
                "name" => "GrandTheftArma",
                "url" => "https://grandtheftarma.com/"
            ],

            // Field array of objects
            "fields" => [
                // Field 1
                [
                    "name" => "05/06/2020",
                    "value" => "24",
                    "inline" => true
                ],
                // Field 2
                [
                    "name" => "28/05/2020",
                    "value" => "46",
                    "inline" => true
                ],
                // Field 3
                [
                    "name" => "07/05/2020",
                    "value" => "72",
                    "inline" => true
                ]
            ]
        ]
    ]

], JSON_UNESCAPED_SLASHES | JSON_UNESCAPED_UNICODE );

$ch = curl_init();

curl_setopt_array( $ch, [
    CURLOPT_URL => $url,
    CURLOPT_POST => true,
    CURLOPT_POSTFIELDS => $hookObject,
    CURLOPT_HTTPHEADER => [
        "Content-Type: application/json"
    ]
]);

$response = curl_exec( $ch );
curl_close( $ch );

?>
Hl
