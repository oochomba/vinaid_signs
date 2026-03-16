<?php

namespace App\Providers;
use App\Models\SMTPModel;
use Illuminate\Support\ServiceProvider;
use Illuminate\Pagination\Paginator as PaginationPaginator;
use Config;

class AppServiceProvider extends ServiceProvider
{
    /**
     * Register any application services.
     */
    public function register(): void
    {
        //
    }

    /**
     * Bootstrap any application services.
     */
    public function boot(): void
    {
         PaginationPaginator::defaultView('admin.pagination.custom-pagination');
        $mail_setting = SMTPModel::getSingle();
        if (!empty($mail_setting)) {
            $data_mail = [
                'driver' => $mail_setting->mail_mailer,
                'host' => $mail_setting->mail_host,
                'port' => $mail_setting->mail_port,
                'encryption' => $mail_setting->mail_encryption,
                'username' => $mail_setting->mail_username,
                'password' => $mail_setting->mail_password,
                'from' => [
                    'address' => $mail_setting->mail_from_address,
                    'name' => $mail_setting->name,
                ],
            ];
            Config::set('mail', $data_mail);
        }
    }
}
