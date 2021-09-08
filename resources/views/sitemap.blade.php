<?xml version="1.0" encoding="UTF-8"?>
<urlset xmlns="http://www.sitemaps.org/schemas/sitemap/0.9">
    @foreach($datapost['data']['data'] as $post)
        <url>
            <loc>{{ route('detail', $post['slug']) }}</loc>
            <lastmod>{{ (new \Carbon\Carbon($post['updated_at']))->toAtomString() }}</lastmod>
        </url>
    @endforeach
</urlset>
