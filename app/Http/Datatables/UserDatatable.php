<?php

namespace App\Http\Datatables;


class UserDatatable
{

    /**
     * Action column view
     * @param $user
     * @return array|string
     */
    public static function laratablesCustomAction($user)
    {
        return view('user.includes.user_index_action', compact('user'))->render();
    }

    /**
     * first_name column should be used for sorting when name column is selected in Datatables.
     *
     * @return string
     */
    public static function laratablesOrderVersion()
    {
        return 'name';
    }


}
