<?php

namespace App\Repositories;

use Illuminate\Support\Facades\DB;
use Throwable;

class ClientProjectRepository
{
    public static function Select()
    {
        try
        {
            return DB::select('call Select_All_ClientProject');
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
            return DB::select('call Select_ClientProject(?)', [ $id ]);
        }
        catch (Throwable $th)
        {
            report($th);
            return null;
        }
    }

    public static function Insert($page_title, $heading, $sub_heading, $image, $service_list, $short_content, $full_content)
    {
        try
        {
            return DB::select('call Insert_ClientProject(?, ?, ?, ?, ?, ?, ?)',
            [
                $page_title,
                $heading,
                $sub_heading,
                $image,
                $service_list,
                $short_content,
                $full_content
            ]);
        }
        catch (Throwable $th)
        {
            throw($th);
            report($th);
            return null;
        }
    }

    public static function Update($id, $page_title, $heading, $sub_heading, $image, $services, $short_content, $full_content)
    {
        try
        {
            return DB::select("call Update_ClientProject(?, ?, ?, ?, ?, ?, ?, ?);",
            [
                $id,
                $page_title,
                $heading,
                $sub_heading,
                $image,
                $services,
                $short_content,
                $full_content
            ]);
        }
        catch (Throwable $th)
        {
            throw($th);
            report($th);
            return null;
        }
    }

    public static function UpdateNoImage($id, $page_title, $heading, $sub_heading, $services, $short_content, $full_content)
    {
        try
        {
            return DB::select("call UPDATE_ClientProject_NO_IMAGE(?, ?, ?, ?, ?, ?, ?);",
            [
                $id,
                $page_title,
                $heading,
                $sub_heading,
                $services,
                $short_content,
                $full_content
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
