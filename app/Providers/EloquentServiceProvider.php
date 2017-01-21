<?php

namespace Xstore\Providers;

use Illuminate\Support\ServiceProvider;

class EloquentServiceProvider extends ServiceProvider
{
    /**
     * Bootstrap the application services.
     *
     * @return void
     */
    public function boot()
    {
        $this->app->singleton('attachment',\Xstore\Repositories\AttachmentRepositories::class);
        $this->app->singleton('category',\Xstore\Repositories\CategoryRepositories::class);
        $this->app->singleton('discount',\Xstore\Repositories\DiscountRepositories::class);
        $this->app->singleton('product_category',\Xstore\Repositories\ProductCatgoryRepositories::class);
        $this->app->singleton('product_trademark',\Xstore\Repositories\ProductTrademarkRepositories::class);
        $this->app->singleton('trademark_attachment',\Xstore\Repositories\ProductAttachmentRepositories::class);
        $this->app->singleton('product',\Xstore\Repositories\ProductRepositories::class);
        $this->app->singleton('description',\Xstore\Repositories\DescriptionRepositories::class);
        $this->app->singleton('theme',\Xstore\Repositories\ThemeRepositories::class);
        $this->app->singleton('trademark',\Xstore\Repositories\BrandRepositories::class);

            // $this->app->singleton('category_extend',\Xstore\Models\CategoryExtend::class);
            // $this->app->singleton('customer',\Xstore\Models\Customer::class);
            // $this->app->singleton('customer_extend',\Xstore\Models\CustomerExtend::class);
            // $this->app->singleton('customer_order',\Xstore\Models\CustomerOrder::class);
            // $this->app->singleton('district',\Xstore\Models\District::class);
            // $this->app->singleton('province',\Xstore\Models\Province::class);
            // $this->app->singleton('order',\Xstore\Models\Order::class);
            // $this->app->singleton('order_product',\Xstore\Models\OrderProduct::class);
            // $this->app->singleton('permission',\Xstore\Models\Permission::class);
            // $this->app->singleton('post',\Xstore\Models\Post::class);
            // $this->app->singleton('post_attachment',\Xstore\Models\PostAttachment::class);
            // $this->app->singleton('product_attachment',\Xstore\Models\ProductAttachment::class);
            // $this->app->singleton('product_extend',\Xstore\Models\ProductExtend::class);
            // $this->app->singleton('role',\Xstore\Models\Role::class);
            // $this->app->singleton('ship',\Xstore\Models\Ship::class);
            // $this->app->singleton('shiporder',\Xstore\Models\ShipOrder::class);
            // $this->app->singleton('site',\Xstore\Models\Site::class);

            // $this->app->singleton('trademark_category',\Xstore\Models\TrademarkCategory::class);
            // $this->app->singleton('trademark_extend',\Xstore\Models\TrademarkExtend::class);
            // $this->app->singleton('user',\Xstore\Models\User::class);
            // $this->app->singleton('user_role',\Xstore\Models\UserRole::class);
            // $this->app->singleton('user_extend',\Xstore\Models\UserExtend::class);
            // $this->app->singleton('user_password_reset',\Xstore\Models\UserPasswordReset::class);
            // $this->app->singleton('category_attachment',\Xstore\Models\CategoryAttachment::class);
            // $this->app->singleton('trademark_category',\Xstore\Models\TrademarkCategory::class);
            // $this->app->singleton('product_discount',\Xstore\Models\ProductDiscount::class);
    }

    /**
     * Register the application services.
     *
     * @return void
     */
    public function register()
    {
// $this->app->singleton('attachment',\Xstore\Models\Attachment::class);
        // $this->app->singleton('category',\Xstore\Models\Category::class);
        // $this->app->singleton('category_extend',\Xstore\Models\CategoryExtend::class);
        // $this->app->singleton('customer',\Xstore\Models\Customer::class);
        // $this->app->singleton('customer_extend',\Xstore\Models\CustomerExtend::class);
        // $this->app->singleton('customer_order',\Xstore\Models\CustomerOrder::class);
        // $this->app->singleton('district',\Xstore\Models\District::class);
        // $this->app->singleton('discount',\Xstore\Models\Discount::class);
        // $this->app->singleton('province',\Xstore\Models\Province::class);
        // $this->app->singleton('order',\Xstore\Models\Order::class);
        // $this->app->singleton('order_product',\Xstore\Models\OrderProduct::class);
        // $this->app->singleton('permission',\Xstore\Models\Permission::class);
        // $this->app->singleton('post',\Xstore\Models\Post::class);
        // $this->app->singleton('post_attachment',\Xstore\Models\PostAttachment::class);
        // $this->app->singleton('product',\Xstore\Models\Product::class);
        // $this->app->singleton('product_attachment',\Xstore\Models\ProductAttachment::class);
        // $this->app->singleton('product_extend',\Xstore\Models\ProductExtend::class);
        // $this->app->singleton('description',\Xstore\Models\Description::class);
        // $this->app->singleton('role',\Xstore\Models\Role::class);
        // $this->app->singleton('ship',\Xstore\Models\Ship::class);
        // $this->app->singleton('shiporder',\Xstore\Models\ShipOrder::class);
        // $this->app->singleton('site',\Xstore\Models\Site::class);
        // $this->app->singleton('theme',\Xstore\Models\Theme::class);
        // $this->app->singleton('trademark',\Xstore\Models\Trademark::class);
        // $this->app->singleton('trademark_category',\Xstore\Models\TrademarkCategory::class);
        // $this->app->singleton('trademark_extend',\Xstore\Models\TrademarkExtend::class);
        // $this->app->singleton('user',\Xstore\Models\User::class);
        // $this->app->singleton('user_role',\Xstore\Models\UserRole::class);
        // $this->app->singleton('user_extend',\Xstore\Models\UserExtend::class);
        // $this->app->singleton('user_password_reset',\Xstore\Models\UserPasswordReset::class);
        // $this->app->singleton('product_category',\Xstore\Models\ProductCategory::class);
        // $this->app->singleton('product_trademark',\Xstore\Models\ProductTrademark::class);
        // $this->app->singleton('trademark_attachment',\Xstore\Models\TrademarkAttachment::class);
        // $this->app->singleton('category_attachment',\Xstore\Models\CategoryAttachment::class);
        // $this->app->singleton('trademark_category',\Xstore\Models\TrademarkCategory::class);
        // $this->app->singleton('product_discount',\Xstore\Models\ProductDiscount::class);
    }
}
