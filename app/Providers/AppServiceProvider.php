<?php

namespace App\Providers;

use App\Models\DanhMucSanPham;
use Illuminate\Support\ServiceProvider;

class AppServiceProvider extends ServiceProvider
{
    /**
     * Register any application services.
     *
     * @return void
     */
    public function register()
    {
        //
    }

    /**
     * Bootstrap any application services.
     *
     * @return void
     */
    public function boot()
    {
        $menuCha = DanhMucSanPham::where('id_danh_muc_cha', 0)
                                 ->where('is_open', 1)
                                 ->get();
        $menuCon = DanhMucSanPham::where('id_danh_muc_cha', '<>', 0)
                                 ->where('is_open', 1)
                                 ->get();

        foreach($menuCha as $key => $value_cha) {
            $value_cha->tmp = $value_cha->id;
            foreach($menuCon as $key => $value_con) {
                if($value_con->id_danh_muc_cha == $value_cha->id) {
                    $value_cha->tmp =  $value_cha->tmp . ', ' . $value_con->id;
                }
            }
        }

        view()->share('menuCha', $menuCha);
        view()->share('menuCon', $menuCon);
    }
}
