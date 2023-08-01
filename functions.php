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

function getGitHubContributors($repoOwner, $repoName, $contribSort = 'contributions', $contribOrder = 'desc', $perPage = 10) {
    $url = "https://api.github.com/repos/{$repoOwner}/{$repoName}/contributors?sort={$contribSort}&order={$contribOrder}&per_page={$perPage}";

    // Create a new cURL handle
    $ch = curl_init();

    // Set cURL options
    curl_setopt($ch, CURLOPT_URL, $url);
    curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);
    curl_setopt($ch, CURLOPT_USERAGENT, 'PHP'); // Set your app's user agent here

    // You might need to set authorization headers here if your app requires authentication.
    // For public GitHub API requests, it is usually not necessary.

    // Execute the cURL request
    $response = curl_exec($ch);

    // Check for cURL errors
    if (curl_errno($ch)) {
        // Handle cURL error here (e.g., return an error message)
        return array('error' => 'cURL Error: ' . curl_error($ch));
    }

    // Get the HTTP status code
    $httpCode = curl_getinfo($ch, CURLINFO_HTTP_CODE);

    // Close the cURL handle
    curl_close($ch);

    // Check if the request was successful (status code 200)
    if ($httpCode === 200) {
        // Convert JSON response to an associative array
        return json_decode($response, true);
    } else {
        // If the request was not successful, you might want to handle the error appropriately.
        // For example, you can log the error or return an error message.
        return array('error' => 'Failed to retrieve data from GitHub API. HTTP status code: ' . $httpCode);
    }
}



// Specify the GitHub repository owner and name
$owner = 'rezwanahmedsami';
$repo = 'routemamba';

?>