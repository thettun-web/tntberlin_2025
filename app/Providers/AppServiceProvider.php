<?php

namespace App\Providers;

use App\Models\Article;
use App\Models\User;
use Illuminate\Support\Facades\Gate;
use Illuminate\Support\ServiceProvider as ServiceProvider;

class AppServiceProvider extends ServiceProvider
{
    /**
     * Register any application services.
     */
    public function register(): void
    {
        //
    }
    public function boot(): void
    {
        // Rule for updating / deleting an article
        Gate::define('manage-article', function (User $user, Article $article) {
            // Admins can manage any article, or the user must be the author.
            return $user->is_admin || $user->id === $article->article_id;
    });

        // Rule for deleting a comment
        Gate::define('delete-comment', function (User $user) {
        // Only admins can delete comments.
        return $user->is_admin;
    });
    }
}
