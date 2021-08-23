<?php

namespace App\Repositories;

use Illuminate\Support\Facades\DB;
use Throwable;

class BlogPostRepository
{
    public static function Select()
    {
        try
        {
            return DB::select('call SELECT_Blog_Post');
        }
        catch (Throwable $th)
        {
            report($th);
            return null;
        }
    }

    public static function SelectById($id)
    {
        try
        {
            return DB::select('call SELECT_BY_ID_Blog_Post(?)', [ $id ]);
        }
        catch (Throwable $th)
        {
            report($th);
            return null;
        }
    }

    public static function Insert($page_title, $heading, $image, $full_content, $category_id)
    {
        try
        {
            return DB::select('call INSERT_Blog_Post(?, ?, ?, ?, ?)',
            [
                $page_title,
                $heading,
                $image,
                $full_content,
                $category_id
            ]);
        }
        catch (Throwable $th)
        {
            report($th);
            return null;
        }
    }

    public static function Update($id, $page_title, $heading, $image, $full_content, $category_id)
    {
        try
        {
            DB::select("call UPDATE_Blog_Post(?, ?, ?, ?, ?, ?);",
            [
                $id,
                $page_title,
                $heading,
                $image,
                $full_content,
                $category_id
            ]);
        }
        catch (Throwable $th)
        {
            throw($th);
            report($th);
            return null;
        }
    }

    public static function UpdateNoImage($id, $page_title, $heading, $full_content, $category_id)
    {
        try
        {
            DB::select("call UPDATE_Blog_Post_NO_IMAGE(?, ?, ?, ?, ?);",
            [
                $id,
                $page_title,
                $heading,
                $full_content,
                $category_id
            ]);
        }
        catch (Throwable $th)
        {
            throw($th);
            report($th);
            return null;
        }
    }
}
