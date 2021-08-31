<?php

namespace App\Repositories;

use Illuminate\Support\Facades\DB;
use Throwable;

class ClientProjectServiceRepository
{
    public static function Select()
    {
        try
        {
            return DB::select('call Select_All_ClientProjectService');
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
            return DB::select('call Select_ClientProjectService(?)', [ $id ]);
        }
        catch (Throwable $th)
        {
            report($th);
            return null;
        }
    }

    public static function SelectByClientProjectIDs($ids)
    {
        try
        {
            return DB::select('call Select_ClientProjectService_BY_ClientProjectIDs(?)', [ $ids ]);
        }
        catch (Throwable $th)
        {
            report($th);
            throw($th);
        }
    }

    public static function Insert($name, $img_src, $sort_index)
    {
        try
        {
            return DB::select('call Insert_ClientProjectService(?, ?, ?)',
            [
                $name,
                $img_src,
                $sort_index
            ]);
        }
        catch (Throwable $th)
        {
            report($th);
            throw($th);
        }
    }

    public static function Update($id, $name, $img_src, $sort_index)
    {
        try
        {
            DB::select("call Update_ClientProjectService(?, ?, ?, ?);",
            [
                $id,
                $name,
                $img_src,
                $sort_index
            ]);
        }
        catch (Throwable $th)
        {
            report($th);
            throw($th);
        }
    }

    public static function UpdateNoImage($id, $name, $sort_index)
    {
        try
        {
            DB::select("call Update_ClientProjectService_NO_IMAGE(?, ?, ?);",
            [
                $id,
                $name,
                $sort_index
            ]);
        }
        catch (Throwable $th)
        {
            report($th);
            throw($th);
        }
    }

}
