<?php

namespace App\Repositories;

use Illuminate\Support\Facades\DB;
use Throwable;

class BlogCategoryRepository
{
    public static function Select()
    {
        try
        {
            return DB::select('call SELECT_Blog_Category');
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
            return DB::select('call SELECT_BY_ID_Blog_Category(?)', [ $id ]);
        }
        catch (Throwable $th)
        {
            report($th);
            return null;
        }
    }

    public static function Insert($name)
    {
        try
        {
            return DB::select('call INSERT_Blog_Category(?)',
            [
                $name
            ]);
        }
        catch (Throwable $th)
        {
            report($th);
            return null;
        }
    }

    public static function Update($id, $name)
    {
        try
        {
            DB::select("call UPDATE_Blog_Category(?, ?);", [
                $id,
                $name
            ]);
        }
        catch (Throwable $th)
        {
            report($th);
            return null;
        }
    }
}
