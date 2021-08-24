<?php

namespace App\Http\Controllers;

use App\Repositories\BlogPostRepository;
use App\Repositories\ClientProjectRepository;
use Illuminate\Support\Facades\Log;
use Illuminate\Support\Facades\Storage;
use Throwable;

class AutoGenerateController extends Controller
{
    public static function sitemap()
    {
        try
        {
            $template_str = "";
            $client_projects = ClientProjectRepository::select();
            $blog_posts = BlogPostRepository::select();
            if (isset($client_projects) && count($client_projects) > 0 && isset($blog_posts) && count($blog_posts) > 0)
            {
                $file_path = "templates/sitemap.xml";
                if (Storage::exists($file_path))
                {
                    $template_str = Storage::get($file_path);

                    $cp_str = "";
                    foreach ($client_projects as $row)
                    {
                        if ($row -> ID != $client_projects[0] -> ID) $cp_str .= "\r\n   ";
                        $cp_str .= "<url>\r\n      <loc>" . route('live-website.clients.projects', [ 'projectId' => $row -> ID ]) . "</loc>\r\n   </url>";
                    }
                    $cp_str = str_replace(":8000", "", $cp_str);

                    $bp_str = "";
                    foreach ($blog_posts as $row)
                    {
                        if ($row -> ID != $blog_posts[0] -> ID) $bp_str .= "\r\n   ";
                        $bp_str .= "<url>\r\n      <loc>" . route('live-website.blog.blog-post', [ 'blogId' => $row -> ID ]) . "</loc>\r\n   </url>";
                    }
                    $bp_str = str_replace(":8000", "", $bp_str);

                    $template_str = str_replace("@clients", $cp_str, $template_str);
                    $template_str = str_replace("@blog", $bp_str, $template_str);

                    file_put_contents("sitemap.xml", $template_str);
                    return view('auto-generate.sitemap.success');
                }
            }
        }
        catch (Throwable $th)
        {
            report($th);
            Log::channel('auto-generate/sitemap') -> error("AutoGenerateController::sitemap()  --::--  Error occured generating the sitemap: ", [ $th -> getMessage() ]);
        }

        return view('auto-generate.sitemap.error');
    }
}
