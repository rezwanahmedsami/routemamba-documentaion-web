<?php

// Function to fetch changelog data from GitHub repository
function fetchChangelogData($owner, $repo)
{
    $url = "https://api.github.com/repos/$owner/$repo/releases";
    
    // Set the user agent header to avoid rate limiting
    $options = [
        'http' => [
            'header' => 'User-Agent: PHP'
        ]
    ];
    
    $context = stream_context_create($options);
    $data = file_get_contents($url, false, $context);
    
    if ($data === false) {
        // Error fetching data
        return null;
    }
    
    $releases = json_decode($data, true);
    
    // Extract relevant information from releases
    $changelog = [];
    
    foreach ($releases as $release) {
        $version = $release['tag_name'];
        $date = $release['published_at'];
        $changes = $release['body'];
        // echo "<pre>";
        // print_r($release['body']);
        // foreach ($release['body'] as $body) {
        //     $changes .= trim($body) . "\n";
        // }
        
        $changelog[] = [
            'version' => $version,
            'date' => $date,
            'changelog' => $changes
        ];
    }
    
    return $changelog;
}

// Specify the GitHub repository owner and name
$owner = 'rezwanahmodsami';
$repo = 'routemamba';

?>