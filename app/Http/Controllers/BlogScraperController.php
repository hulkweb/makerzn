<?php



namespace App\Http\Controllers;

use DOMDocument;
use Illuminate\Support\Facades\Http;
use Illuminate\Support\Facades\Storage;
// use DOMDocument;
use Illuminate\Support\Facades\DB;

class BlogScraperController extends Controller
{
    public function scrapeAndInsertBlogs()
    {
        // Step 1: Scrape the main page to get all blog URLs
        $mainPageHtml = $this->fetchHtml('https://mashash.com/blogs'); // Provide the main page URL here

        $urls = $this->extractBlogUrls($mainPageHtml);
        // dd($urls);
        // Step 2: Iterate through the URLs and scrape details from each blog
        // $urls = ["https://mashash.com/blog/2073988",];
        foreach ($urls as $url) {
            $blogPageHtml = $this->fetchHtml($url);
            $this->extractBlogDetailsAndStore($blogPageHtml);
        }

        return response()->json(['message' => 'Blogs scraped and inserted successfully']);
    }

    // Fetch HTML content from a given URL
    private function fetchHtml($url)
    {
        $response = Http::get($url);

        if ($response->successful()) {
            return $response->body();
        }

        return null;
    }

    // Extract blog URLs from the main blog listing page
    private function extractBlogUrls($htmlContent)
    {
        $dom = new DOMDocument();
        @$dom->loadHTML($htmlContent);

        $xpath = new \DOMXPath($dom);

        // Extract URLs for individual blog pages
        $urls = [];
        $nodes = $xpath->query("//a[@class='news-block_one-more']");
        // dd($nodes);
        foreach ($nodes as $node) {

            $urls[] = $node->getAttribute('href');
        }

        return $urls;
    }

    // Extract blog details from the blog detail page and store them
    private function extractBlogDetailsAndStore($htmlContent)
    {
        $dom = new DOMDocument;
        @$dom->loadHTML($htmlContent);
        $xpath = new \DOMXPath($dom);

        // Extract the title
        $title = $xpath->query("//h3[@class='blog-detail_heading']")->item(0)->nodeValue ?? null;

        // Extract the body content
        $bodyNodes = $xpath->query("//div[@class='blog-c']//p");
        $body = '';
        foreach ($bodyNodes as $paragraph) {
            $body .= '<p>' . $paragraph->nodeValue . '</p>';
        }

        // Extract the image URL
        $imageNode = $xpath->query("//div[@class='blog-detail_image']//img")->item(0);
        $imageUrl = $imageNode ? $imageNode->getAttribute('src') : null;

        // Extract the image name from the URL
        $imageName = $imageUrl ? basename(parse_url($imageUrl, PHP_URL_PATH)) : null;

        // Store the image locally (optional)
        if ($imageUrl) {
            $imageContent = Http::get($imageUrl)->body();
            Storage::disk('public')->put('images/' . $imageName, $imageContent);
        }

        // Insert the blog data into the database
        DB::table('blogs')->insert([
            'title' => $title,
            'body' => $body,
            'image' => $imageName,
            'created_at' => now(),
            'updated_at' => now()
        ]);
    }
}
