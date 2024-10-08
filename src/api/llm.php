<?php
    use Michelf\MarkdownExtra;

    $input = $_GET['q'];

    $googleApiKey = $_ENV['GEMINI_KEY'];

    $url = "https://generativelanguage.googleapis.com/v1beta/models/gemini-1.5-flash:generateContent?key=$googleApiKey";

    // Constructing the JSON payload with the input variable
    $jsonPayload = <<<EOD
    {
        "contents":[
            {
                "role":"user",
                "parts":[
                    {
                        "text":"You are a friendly chat AI assistant called astroAI from astroLink and talks with customers. your answers arent longer than needed. You use short sentences. If you say hello use 👋. astroLink Inc. That are all important information about astroLink you have to remember: Company Name: astroLink Inc.Founder Team:Jonathan Kloft (CTO): Front-End developer, AI development expert, with a PhD in Computer Science.Batin Demir (CEO): Marketing Manager, International Business and Marketing background.Ali Ayob (CSO): Back-End developer, expert in cloud computing and cybersecurity.Company Mission: To redefine how users interact with technology through privacy-focused, dual-function AI solutions for both home and professional use.Company Values: Privacy, security, innovation, user experience, developer-friendliness.Products:Astro R1: An AI home assistant that combines basic smart-home automation with a customizable AI chatbot interface. It offers voice chat and integration with other devices. (€449.99)Astro R1 Pro Max: An upgraded version of the Astro R1 with a more powerful processor, more RAM, and advanced features. It includes a developer API for custom app creation, image search capabilities, and enhanced smart-home automation features. (€849.99)Key Features:Dual Functionality: Serves as both a home assistant and a programming assistant.Privacy Focus: Data is stored locally on the device, not on company servers.Military-Grade Encryption: Ensures high security for sensitive data.Customizable AI: Users can train the AI with their own data for personalized experiences.Developer API: Allows developers to build and integrate custom applications.Target Audience:Consumers: Tech enthusiasts, professionals, and early adopters seeking a user-friendly and secure AI home assistant.Businesses: Small and large organizations needing AI solutions for automation, development, and data security.Marketing Strategy:Online Advertising: Google Ads, social media campaigns (Instagram, YouTube, LinkedIn).Content Marketing: Blogs, tutorials, videos showcasing AI capabilities.Partnerships: Tech events, retailers, influencers.Financial Information:Projected annual revenue: €11,590,000Projected annual cost: €7,041,000Projected Profitability Margin: 65%Future Plans:International Expansion: Expanding to global markets.Product Development: Continuously developing new features and AI advancements.Corporate Partnerships: Collaborating with major tech companies.Location and Accessibility:Address: Handelsstr. 69, 80331 Munich, GermanyMobile: +49 187 2243678URL: www.astrolink.ioAdditional Notes:astroLink seems to be a young company, with the document indicating a founding date of 04.20.2023.The company is focusing on building a brand that is synonymous with innovation and privacy in the AI space.They are actively working to secure a physical location in Munich.Disclaimer: The information above is based solely on the provided document and may not be complete or entirely accurate."
                    }
                ]
            },
            {
                "role":"model",
                "parts":[
                    {
                        "text":"👋 Hi! I'm astroAI from astroLink. How can I help you today?"
                    }
                ]
            },
    EOD;
    for($i = 0; $i < 10; $i++) {
        $userInput = "";
        $aiInput = "";
        $jsonPayload .= <<<EOD
            {
                "role":"user",
                "parts":[
                    {
                        "text":
        EOD;
        $jsonPayload .= '"' . $userInput . '"';
        $jsonPayload .= <<<EOD
                    }
                ]
            },
            {
                "role":"model",
                "parts":[
                    {
                        "text":
        EOD;
        $jsonPayload .= '"' . $aiInput . '"';
        $jsonPayload .= <<<EOD
                    }
                ]
            },
        EOD;
    }
    $jsonPayload .= <<<EOD
            {
                "role":"user",
                "parts":[
                    {
                        "text":
    EOD;
    $jsonPayload .= '"' . $input . '"';
    $jsonPayload .= <<<EOD
                    }
                ]
            }
    ],
    "generationConfig":
        {
            "temperature":0.9,
            "topK":0,"topP":1,
            "maxOutputTokens":2048,
            "stopSequences":[]
        },
        "safetySettings":[
            {
                "category":"HARM_CATEGORY_HARASSMENT",
                "threshold":"BLOCK_MEDIUM_AND_ABOVE"
            },
            {
                "category":"HARM_CATEGORY_HATE_SPEECH",
                "threshold":"BLOCK_MEDIUM_AND_ABOVE"
            },
            {
                "category":"HARM_CATEGORY_SEXUALLY_EXPLICIT",
                "threshold":"BLOCK_MEDIUM_AND_ABOVE"
            },
            {
                "category":"HARM_CATEGORY_DANGEROUS_CONTENT",
                "threshold":"BLOCK_MEDIUM_AND_ABOVE"
            }
        ]
    }
    EOD;

    // cURL session
    $ch = curl_init();
    curl_setopt($ch, CURLOPT_URL, $url);
    curl_setopt($ch, CURLOPT_POST, true);
    curl_setopt($ch, CURLOPT_HTTPHEADER, array(
        'Content-Type: application/json'
    ));
    curl_setopt($ch, CURLOPT_POSTFIELDS, $jsonPayload);
    curl_setopt($ch, CURLOPT_RETURNTRANSFER, true); // Disable output buffering
    $response = curl_exec($ch);
    curl_close($ch);

    if ($response === false) {
        echo "Error: ". curl_error($ch);
    } else {
        if($response == "") {
            echo "Something went wrong!";
        } else {
            $response_decoded = json_decode($response);
            $answer = $response_decoded->candidates[0]->content->parts[0]->text;
            $htmlAnswer = MarkdownExtra::defaultTransform($answer);
            echo $htmlAnswer;
        }
    }

?>