<?php

namespace App\Http\Controllers\Helpers;

use App\Http\Controllers\Controller;
use App\Models\Post;
use App\Models\PostTag;
use App\Models\Tag;
use Illuminate\Http\Request;

class TagController extends Controller
{
    const HASHTAG_PATTERN = '/(#\w+)/';
    protected array $hashtagsMatches = [];

    public function parseTags(Request $request, Post $post)
    {
        $hashtagsMatches = $this->hashtagsMatches;
        preg_match_all(self::HASHTAG_PATTERN, $request->content, $hashtagsMatches, PREG_PATTERN_ORDER);

        /**
         * insert tags
         */
        foreach ($hashtagsMatches[1] as $tag)
        {
            Tag::firstOrCreate(['tag' => $tag]);
        }

        /**
         * insert post_tags
         */
        foreach ($hashtagsMatches[1] as $tag)
        {
            $tag = Tag::where('tag', $tag)->first();

            PostTag::firstOrCreate([
                'post_id' => $post->id,
                'tag_id' => $tag->id,
            ]);
        }
    }
}
