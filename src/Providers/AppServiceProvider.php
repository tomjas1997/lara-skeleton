<?php

namespace Skeleton\Module\Providers;

use Illuminate\Support\ServiceProvider;
use KlarnaPayment\Module\Core\Order\Repository\KlarnaPaymentOrderRepository;
use KlarnaPayment\Module\Core\Order\Repository\KlarnaPaymentOrderRepositoryInterface;

class AppServiceProvider extends ServiceProvider
{
    /**
     * Register any application services.
     *
     * @return void
     */
    public function register(): void
    {
    }

    /**
     * Bootstrap any application services.
     *
     * @return void
     */
    public function boot(): void
    {
    }
}