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
            return DB::select('call SELECT_Client_Project');
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
            return DB::select('call SELECT_BY_ID_Client_Project(?)', [ $id ]);
        }
        catch (Throwable $th)
        {
            report($th);
            return null;
        }
    }

    public static function Insert($page_title, $heading, $sub_heading, $image, $short_content, $full_content)
    {
        try
        {
            return DB::select('call INSERT_Client_Project(?, ?, ?, ?, ?, ?)',
            [
                $page_title,
                $heading,
                $sub_heading,
                $image,
                $short_content,
                $full_content
            ]);
        }
        catch (Throwable $th)
        {
            report($th);
            return null;
        }
    }

    public static function Update($id, $page_title, $heading, $sub_heading, $image, $short_content, $full_content)
    {
        try
        {
            DB::select("call UPDATE_Client_Project(?, ?, ?, ?, ?, ?, ?);",
            [
                $id,
                $page_title,
                $heading,
                $sub_heading,
                $image,
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

    public static function UpdateNoImage($id, $page_title, $heading, $sub_heading, $short_content, $full_content)
    {
        try
        {
            DB::select("call UPDATE_Client_Project_NO_IMAGE(?, ?, ?, ?, ?, ?);",
            [
                $id,
                $page_title,
                $heading,
                $sub_heading,
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
