<?php echo '<?xml version="1.0" encoding="UTF-8"?>'; ?>

<urlset xmlns="http://www.sitemaps.org/schemas/sitemap/0.9">
     
    @foreach($movies_list as $i => $movies_data)     
    <url>        
        <loc>{{ URL::to('movies/'.$movies_data->video_slug.'/'.$movies_data->id) }}</loc>
        <changefreq>Daily</changefreq>
        <priority>0.6</priority>
     </url>        
    @endforeach 
     
</urlset>